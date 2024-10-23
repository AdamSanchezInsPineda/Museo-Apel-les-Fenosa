<?php
require_once '../src/model/Usuario.php';
require_once '../src/model/Exposicio.php';
require_once '../src/model/Objeto.php';
require_once '../src/model/Ubicacio.php';


class UbicacionController {
    public function getUbicaciones() {
        $ubicacion = new Ubicacion();
        $ubicaciones = $ubicacion->getAll();
        
        // Devolver como JSON
        header('Content-Type: application/json');
        echo json_encode($ubicaciones);
    }
}