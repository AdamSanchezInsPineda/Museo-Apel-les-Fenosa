<?php

class ObjetoController {
    public function table() {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {
            $objeto = new Objeto();              
            $this->render('objects/objects', ['registros' => $objeto->getAllObjetos()]);
            exit;

        } else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
            exit;
        }
    }

    public function createView() {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
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
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {         
            $objeto = new Objeto();
            $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $objeto->fitxesMostrar($registroN)]]);
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
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {
            $objeto = new Objeto();
            $this->render('objects/updateObject', ['cont' => [$registroN, $objeto->fitxesMostrar($registroN)]]);
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
        $objeto = new Objeto();
        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {         
            $this->render('objects/updateObject', ['objeto' => $objeto->fitxesMostrar($registroN)]);
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
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }

        if ($state) {     
            $objeto = new Objeto();
            if ($_SESSION['rol'] == "admin")
                $objeto -> fitxesDelete($registroN);
            
            elseif ($_SESSION['rol'] == "tecnic")
                $objeto -> fitxesDisable($registroN);
            
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
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
    
        if ($state) {         
            $objeto = new Objeto();
            $detallesObjeto = $objeto->fitxesMostrar($id);
            
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

    private function render($view, $data = []) {
        extract($data);
        $viewFile = "../src/views/$view.php";
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View $view not found.";
        }
    }
}