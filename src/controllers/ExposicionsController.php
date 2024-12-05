<?php

class ExposicionsController extends Controller{

    protected $exposicio;

    public function __construct()
    {
        parent::__construct();
        $this->exposicio = new Exposicio();
    }
    function index(){
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render("exposicions/exposicions");
        exit;
    }

    public function searchDef($found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->getExposiciones($found)));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->getExposiciones($found)));
    }

    public function deleteExposicio($id) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        if ($_SESSION['rol'] == "admin"){
            $this->exposicio->eliminarExposicion($id);
            header('Location: /exposicions');
        }
        else{
            header('Location: /registers');
        }
        exit;
    }
    public function newExposicio() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);

        if ($_SESSION['rol'] != "convidat"){
            $tiposExposicion = $this->exposicio->getTiposExposicion();
            $this->render('exposicions/createExposicions', ['tiposExposicion' => $tiposExposicion]);
        }
        else{
            header('Location: /registers');
        }     
        exit;
    }
    public function createExposicio() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
  
        if ($_SESSION['rol'] != "convidat"){
            $this->exposicio->crearExposicion($_POST['Nom'], $_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['Lloc']);
            header('Location: /exposicions');
        }
        else{
            header('Location: /registers');
        }

        exit;
    }

    public function editExposicio($id) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);

        if ($_SESSION['rol'] == "admin"){
            $exposicionData = $this->exposicio->updateViewExposicion($id);
        
            $tiposExposicion = $this->exposicio->getTiposExposicion();
            if (!$exposicionData) {
                header('Location: /exposicions');
                exit;
            }
            $this->render('exposicions/editExposicions', [
                'exposicion' => $exposicionData,
                'tiposExposicion' => $tiposExposicion
            ]);
        }
        else{
            header('Location: /exposicions');
        }
        exit;
    }


    public function updateExposicio($id) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);

        if ($_SESSION['rol'] == "admin"){
            $this->exposicio->updateExposicion($_POST['Nom'],$_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['LugarExposicion'], $id);
            header('Location: /exposicions');
        }
        else{
            header('Location: /registers');
        }
            
        exit;
    }

    public function bensExposicio($id){

        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render("exposicions/bensExposicions");
        exit;
    }

    public function bensExposicioSearchDef($id, $found = "") {

        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->verBens($id, $found)));
    }

    public function bensExposicioSearch($id, $found) {

        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->verBens($id, $found)));
    }

    public function bensCreateExposicio($id) {
    $this->checkRole(['admin', 'tecnic', 'convidat']);

        if ($_SESSION['rol'] != "convidat"){
            $objetosSeleccionados = $_POST['afegir'];
            foreach ($objetosSeleccionados as $objetoId) {
                $this->exposicio->insertObjetoExposicion($id, $objetoId);
            }
            header("Location: /exposicions/{$id}/bens");
        }
        else{
            header('Location: /registers');
        }
        exit;
    }

    public function bensDeleteExposicio($id, $objetoExposicion) {
        
        $this->checkRole(['admin', 'tecnic', 'convidat']);
   
        if ($_SESSION['rol'] == "admin"){
            $this->exposicio->eliminarObjetoExposicion($objetoExposicion);
            header("Location: /exposicions/{$id}/bens");
        }
        else{
            header('Location: /registers');
        }

        exit;
    }
}