<?php

    class InformeController{

        public function index(/*$registroN*/){
            session_start();
            if (!isset($_SESSION['nom'])){
                $state = false;
            }
            else{
                $user = new Usuario();
                $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
            }
            if($state){
                //$objeto = new Objeto();
                $this->render('objects/informepdf'/*, ['cont' => [$registroN, $objeto->fitxesMostrar($registroN)]]*/);
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

?>