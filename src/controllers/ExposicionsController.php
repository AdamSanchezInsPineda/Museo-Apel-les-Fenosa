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
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        
            if ($state) {       
                if ($_SESSION['rol'] == "admin"){
                    $exposicio->eliminarExposicion($id);
                    header('Location: /exposicions');
                }
                else{
                    //Warning de que no tiene permisos para ejecutar esta orden
                    header('Location: /registers');
                }

            } else {
                session_unset();
                session_destroy();
                $error = " La sessió no s'ha iniciat ";
                $this->render("login", ["error"=> $error]);  
            }
            exit;
    }
    public function newExposicio() {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {
            if ($_SESSION['rol'] != "convidat"){
                $tiposExposicion = $exposicio->getTiposExposicion();
                $this->render('exposicions/createExposicions', ['tiposExposicion' => $tiposExposicion]);
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /registers');
            }     
            
        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }
    public function createExposicio() {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {     
            if ($_SESSION['rol'] != "convidat"){
                $exposicio->crearExposicion($_POST['Nom'], $_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['Lloc']);
                header('Location: /exposicions');
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /registers');
            }

        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }

    public function editExposicio($id) {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {   
            if ($id){  
                if ($_SESSION['rol'] == "admin"){
                    $exposicionData = $exposicio->updateViewExposicion($id);
                
                    $tiposExposicion = $exposicio->getTiposExposicion();
                    if (!$exposicionData) {
                        header('Location: /exposicions');
                        exit;
                    }
                    $this->render('exposicions/editExposicions', [
                        'exposicion' => $exposicionData,
                        'tiposExposicion' => $tiposExposicion
                    ]);                
                }else{
                    //Warning de que no tiene permisos para ejecutar esta orden
                    header('Location: /registers');
                }
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /users');
            }          
        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }


    public function updateExposicio($id) {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {     
            if ($id != 1){
                if ($_SESSION['rol'] == "admin"){
                    $exposicio->updateExposicion($_POST['Nom'],$_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['LugarExposicion'], $id);
                    header('Location: /exposicions');
                }
                else{
                    //Warning de que no tiene permisos para ejecutar esta orden
                    header('Location: /registers');
                }
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /exposicions');
            }

        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }

    public function bensExposicio($id){
        
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render("exposicions/bensExposicions");
        exit;
    }

    public function bensExposiciosearchDef($id, $found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->verBens($id, $found)));
    }

    public function bensExposiciosearch($id, $found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->exposicio->verBens($id, $found)));
    }

    public function bensAddExposicio($id){
        session_start();
        $user = new Usuario();
        $objeto = new Objeto();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {
            if ($_SESSION['rol'] != "convidat"){
                $this->render("exposicions/addBensExposicions", ["objetos" => [$objeto->afegirBensObj($id), $id]]);
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /registers');
            }     
            
        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }
    

    public function bensCreateExposicio($id) {
        session_start();
        $user = new Usuario();
    
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {
            if ($_SESSION['rol'] != "convidat"){
                $exposicio = new Exposicio();
                $objetosSeleccionados = $_POST['afegir'];
                foreach ($objetosSeleccionados as $objetoId) {
                    $exposicio->insertObjetoExposicion($id, $objetoId);
                }
                header("Location: /exposicions/{$id}/bens");
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /registers');
            }   
        }
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }

    public function bensDeleteExposicio($id, $objetoExposicion) {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        
        if ($state) {      
            if ($_SESSION['rol'] == "admin"){
                $exposicio->eliminarObjetoExposicion($objetoExposicion);
                header("Location: /exposicions/{$id}/bens");
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /registers');
            }

        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);  
        }
        exit;
    }
}