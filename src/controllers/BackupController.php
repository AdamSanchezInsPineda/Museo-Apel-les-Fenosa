<?php

class BackupController extends Controller
{
    protected $backup;

    public function __construct()
    {
        parent::__construct();
        $this->backup = new Backup();
    }

    public function table()
    {
        $this->checkRole(['admin', 'tecnic']);
        
        $this->render("backups/backups", ['backups' => $this->backup->getBackups()]);
        exit;
    }

    public function delete()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $backupName = $data['backup'];

        try {
            $this->backup->deleteBackup($backupName);
            echo json_encode(['success' => true, 'message' => 'Backup eliminado exitosamente']);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error al eliminar el backup: ' . $e->getMessage()]);
        }

        exit;
    }


    public function import()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $backupName = $data['backup'];

        try {
            $result = $this->backup->importBackup($backupName);
            echo json_encode(['success' => true, 'message' => 'Backup importado correctamente']);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error al importar el backup: ' . $e->getMessage()]);
        }

        exit;
    }




    public function create($backupName)
    {
        $this->checkRole(['admin', 'tecnic']);

        try {
            $this->backup->createBackup($backupName);
            echo json_encode(['success' => true, 'message' => 'Copia de seguridad creada exitosamente']);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Error al crear el backup: ' . $e->getMessage()]);
        }

        exit;
    }

    public function exportTables()
    {
        $this->checkRole(['admin', 'tecnic']);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="export_bienes_' . date('Y-m-d') . '.csv"');

        try {
            $this->backup->exportTablesToCSV();
        } catch (Exception $e) {
            http_response_code(500);
            echo "Error al exportar las tablas: " . $e->getMessage();
        }

        exit;
    }


}