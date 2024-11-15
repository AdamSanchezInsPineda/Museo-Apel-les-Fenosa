<?php

class ObjetoController extends Controller{

    protected $objeto;

    public function __construct()
    {
        parent::__construct();
        $this->objeto = new Objeto();
    }
    public function table() {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user ->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {        
            $this->render('objects/objects', ['registros' => $this -> objeto-> getAllObjetos()]);
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function searchDef($found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> ));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> ($found)));
    }

    public function createView() {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {          
            $this->render('objects/createObject');
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function new($registroN) {
        session_start();
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {         
            $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function updateView($registroN) {
        session_start();
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {
            $this->render('objects/updateObject', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function update($registroN) {
        session_start();
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {         
            $this->render('objects/updateObject', ['objeto' => $this -> objeto->fitxesMostrar($registroN)]);
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function delete($registroN) {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {     
            if ($_SESSION['rol'] == "admin")
                $this -> objeto -> fitxesDelete($registroN);
            
            elseif ($_SESSION['rol'] == "tecnic")
                $this -> objeto -> fitxesDisable($registroN);
            
            header("/registers");   
                
        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }


    public function ficha($id) {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $this -> user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
    
        if ($state) {
            $detallesObjeto = $this -> objeto->fitxesMostrar($id);
            
            if ($detallesObjeto) {
                $this->render('objects/ficha', ['objeto' => $detallesObjeto]);
            } else {
                // Si no se encuentra el objeto, redirigir a la lista de objetos
                header('Location: /registers');
            }
            exit;
    
        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }
}