<?php

class UbicacionController {
    public function getUbicaciones() {
        $ubicacion = new Ubicacion();
        $ubicaciones = $ubicacion->getAll();
        
        // Devolver como JSON
        header('Content-Type: application/json');
        echo json_encode($ubicaciones);
    }
}