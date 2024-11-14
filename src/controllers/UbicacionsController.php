<?php

class UbicacionsController extends Controller {
    private $ubicacion;

    public function __construct(){
        parent::__construct();
        $this->ubicacion = new Ubicacion();
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

    public function new($id) {
        header("Content-Type: text/html");

        include "../src/views/ubicaciones/new.php";
    }

    public function show($id) {
        header("Content-Type: text/html");

        include "../src/views/ubicaciones/show.php";
    }

    public function edit($id) {
        header("Content-Type: text/html");

        include "../src/views/ubicaciones/edit.php";
    }

    public function destroy($id) {
        try {
            $this->ubicacion->destroyUbicacion($id);
            http_response_code(200);
        } catch (Exception $e) {
            echo $e;
            http_response_code(500);
        }
    }
}