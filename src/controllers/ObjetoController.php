<?php

require_once '../src/model/Objeto.php';
require_once '../src/model/Usuario.php';

class ObjetoController {
    public function table() {
        session_start();
        $user = new Usuario();
        $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {
                $objeto = new Objeto();
                $rol = rolUsuario($_SESSION['nom'], $_SESSION['password']);
                $objeto->getAllObjetos();
                $this->render('table', ['registros' => $objeto, 'rol' => $rol]);
                exit;

            } else {
                session_unset();
                session_destroy();
                $error = " La sessió no s'ha iniciat ";
                $this->render("login", ["error"=> $error]);
                exit;
            }
        
        
    }

    public function project($project) {
        $this->render('project', ['project' => $project]);
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