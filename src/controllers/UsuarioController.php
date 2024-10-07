<?php
    require_once '../src/model/Usuario.php';
    
    class UsuarioController {

        public function index() {
            $this->render('login');
        }

        public function login() {
            $user = new Usuario();
            
            session_start();
            
            $_SESSION['nom'] = $_POST["nom"];
            $_SESSION['password'] = $_POST["password"];

            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {
                header('Location: /registers');
                exit;

            } else {
                session_unset();
                session_destroy();
                $error = "* Nom d'usuari o contrasenya incorrecta";
                $this->render("login", ["error"=> $error]);
                exit;
            }
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header('Location: /');
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
