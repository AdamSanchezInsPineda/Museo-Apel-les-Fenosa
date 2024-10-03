<?php
    require_once '../src/model/Usuario.php';
    
    class UsuarioController {

        public function index() {
            $this->render('login');
        }

        public function login() {
            $user = new Usuario();
            $state = $user->comprovarUsuario($_POST["nom"], $_POST["password"]);
            if ($state) {
                header('Location: /registers');
                exit;
            } else {
                $error = "* Nom d'usuari o contrasenya incorrecta";
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
