<?php
    require_once '../src/model/Usuario.php';
    
    class UsuarioController {

        public function index() {
            $error = "";
            $this->render("login", ["error"=> $error]);
        }

        public function login() {
            $user = new Usuario();
            
            session_start();
            
            $_SESSION['nom'] = $_POST["nom"];
            $_SESSION['password'] = $_POST["password"];

            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);

            if ($state) {
                $rol = $user->rolUsuario($_SESSION['nom'] , $_SESSION['password']);
                $_SESSION['rol'] = $rol;
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

        public function table(){
            session_start();
            $user = new Usuario();
            if (!isset($_SESSION['nom'])){
                $state = false;
            }
            else{
                $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
            }
            if ($state) {             
                $this->render('users/users', ['usuarios' => $user->mostrarUsuarios()]);
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
                    $this->render('users/createUser');
                    exit;
    
                } else {
                    session_unset();
                    session_destroy();
                    $error = " La sessió no s'ha iniciat ";
                    $this->render("login", ["error"=> $error]);
                    exit;
                }
        }

        public function new($id) {
            session_start();
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
    
                if ($state) {         
                    $this->render('users/newUser', [$id]);
                    exit;
    
                } else {
                    session_unset();
                    session_destroy();
                    $error = " La sessió no s'ha iniciat ";
                    $this->render("login", ["error"=> $error]);
                    exit;
                }
        }

        public function update($id) {
            session_start();
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
    
                if ($state) {         
                    $this->render('users/updateUser', [$id]);
                    exit;
    
                } else {
                    session_unset();
                    session_destroy();
                    $error = " La sessió no s'ha iniciat ";
                    $this->render("login", ["error"=> $error]);
                    exit;
                }
        }

        public function delete($id) {
            session_start();
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
    
                if ($state) {         
                    
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
