<?php

class ObjetoController extends Controller{

    protected $objeto;

    public function __construct()
    {
        parent::__construct();
        $this->objeto = new Objeto();
    }
    
    public function table() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/objects');
    }

    public function searchDef($found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> getObjetos($found)));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> getObjetos($found)));
    }

    public function advancedSearch() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        
        $criteria = json_decode(file_get_contents('php://input'), true)['criteria'];
        exit(json_encode($this->objeto->advancedSearch($criteria)));
    }

    public function createView() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/createObject');
    }

    public function new($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }

    public function updateView($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/updateObject', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }

    public function update($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/updateObject', ['objeto' => $this -> objeto->fitxesMostrar($registroN)]);
    }

    public function delete($registroN) {
        $this->checkRole(['admin', 'tecnic']);
        $this->objeto->fitxesDisable($registroN);
        header("/registers");   
    }


    public function ficha($id) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $detallesObjeto = $this -> objeto->fitxesMostrar($id);
            
        if ($detallesObjeto) {
            $this->render('objects/ficha', ['objeto' => $detallesObjeto]);
        } else {
            header('Location: /registers');
        }
    }
}