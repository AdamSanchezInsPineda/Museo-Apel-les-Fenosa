<?php

class UbicacionsController extends Controller {
    private $ubicacion;

    public function __construct(){
        parent::__construct();
        $ubicacion = new Ubicacion();
    }

    public function index() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render("ubicaciones/ubicacions");
    }

    public function getUbicaciones() {
        $ubicaciones = $this->ubicacion->getAllUbicaciones();
        
        header('Content-Type: application/json');
        echo json_encode($ubicaciones);
    }
}