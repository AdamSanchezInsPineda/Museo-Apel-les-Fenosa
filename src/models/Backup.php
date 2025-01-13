<?php

class Backup extends Database
{
    private $backupDir = __DIR__ . '/../storage/backups';

    public function createBackup($backupName)
    {
        $backupName = preg_replace('/[^a-zA-Z0-9_-]/', '', $backupName);

        $date = date("Y-m-d");
        $fileName = "{$this->backupDir}/{$backupName}_{$date}.sql";

        $config = parse_ini_file(__DIR__ . '/config/config.ini');
        $host = escapeshellarg($config['host']);
        $db = escapeshellarg($config['db']);
        $username = escapeshellarg($config['username']);
        $password = escapeshellarg($config['password']);
        $fileName = escapeshellarg($fileName);

        $command = "mysqldump --user=$username --password=$password --host=$host $db > $fileName";

        exec($command . " 2>&1", $output, $returnCode);

    }


    public function importBackup($backupFile)
    {
        // Ruta completa al archivo
        $filePath = "{$this->backupDir}/{$backupFile}";

        if (!file_exists($filePath)) {
            throw new Exception("El archivo {$backupFile} no existe.");
        }

        // Leer configuración de base de datos
        $config = parse_ini_file(__DIR__ . '/config/config.ini');
        $host = escapeshellarg($config['host']);
        $db = escapeshellarg($config['db']);
        $username = escapeshellarg($config['username']);
        $password = escapeshellarg($config['password']);
        $filePath = escapeshellarg($filePath);

        // Comando de importación
        $command = "mysql --user=$username --password=$password --host=$host $db < $filePath";

        exec($command . " 2>&1", $output, $returnCode);

        if ($returnCode !== 0) {
            $errorMessage = implode("\n", $output);
            throw new Exception("Error al importar el backup: $errorMessage");
        }

        return [
            'success' => true,
            'message' => "Backup {$backupFile} importado exitosamente.",
        ];
    }


    public function deleteBackup($backupName)
    {
        $filePath = $this->backupDir . '/' . $backupName;

        // Verificar si el archivo de backup existe
        if (file_exists($filePath)) {
            unlink($filePath); // Eliminar el archivo
            return ['success' => true]; // Retornar éxito
        } else {
            return ['success' => false, 'message' => 'El archivo no existe']; // Si el archivo no existe
        }
    }

    public function getBackups()
    {
        $backups = [];
        

        if (is_dir($this->backupDir)) {
            $files = scandir($this->backupDir);

            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $filePath = $this->backupDir . '/' . $file;

                    
                        $creationTime = filectime($filePath);

                        $backups[$file]['name'] = $file;
                        $backups[$file]['date'] = date('Y-m-d H:i:s', $creationTime);

                }
            }
        }
        return $backups;
    }

    public function exportTablesToCSV()
    {
        // Definir las tablas a exportar
        $tables = [
            'Autors' => 'Autores',
            'Baja' => 'Baja',
            'CausaBaja' => 'Causas de Baja',
            'Classificacion' => 'Clasificación',
            'CodigoGetty' => 'Código Getty',
            'Datacion' => 'Datación',
            'EstadoConservacion' => 'Estado de Conservación',
            'Exposiciones' => 'Exposiciones',
            'FormaIngreso' => 'Formas de Ingreso',
            'Material' => 'Materiales',
            'Museos' => 'Museos',
            'Objetos' => 'Objetos',
            'Restauraciones' => 'Restauraciones',
            'Tecnica' => 'Técnicas',
            'TiposExposicion' => 'Tipos de Exposición',
            'UbicacionObjeto' => 'Ubicación de Objetos',
            'Ubicaciones' => 'Ubicaciones'
        ];

        // Preparar la salida para CSV
        $output = fopen('php://output', 'w');
        if (!$output) {
            throw new Exception('No se pudo abrir el flujo de salida.');
        }

        foreach ($tables as $table => $title) {
            // Agregar el nombre de la tabla como título
            fputcsv($output, ["Tabla: $title"]);

            // Obtener columnas y filas
            $stmt = $this->db->query("DESCRIBE $table"); // Usamos $this->db en lugar de $this->pdo
            $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
            fputcsv($output, $columns);

            $stmt = $this->db->query("SELECT * FROM $table"); // Consultar datos de la tabla
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                fputcsv($output, $row);
            }

            // Separador entre tablas
            fputcsv($output, []);
        }

        fclose($output);
    }

}