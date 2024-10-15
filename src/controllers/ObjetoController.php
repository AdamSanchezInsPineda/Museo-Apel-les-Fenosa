<?php

require_once '../src/model/Objeto.php';
require_once '../src/model/Usuario.php';

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

    public function create() {
        session_start();
        $user = new Usuario();
        $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {
                $objeto = new Objeto();              
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

    public function new($nRegistro) {
        session_start();
        $user = new Usuario();
        $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {         
                $this->render('objects/newObject', [$nRegistro]);
                exit;

            } else {
                session_unset();
                session_destroy();
                $error = " La sessió no s'ha iniciat ";
                $this->render("login", ["error"=> $error]);
                exit;
            }
    }

    public function update($nRegistro) {
        session_start();
        $user = new Usuario();
        $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {         
                $this->render('objects/updateObject', [$nRegistro]);
                exit;

            } else {
                session_unset();
                session_destroy();
                $error = " La sessió no s'ha iniciat ";
                $this->render("login", ["error"=> $error]);
                exit;
            }
    }

    public function delete($nRegistro) {
        session_start();
        $user = new Usuario();
        $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {         
                $this->render('objects/deleteObject', [$nRegistro]);
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