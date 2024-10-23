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
            } 
            else {
                session_unset();
                session_destroy();
                $error = "* Nom d'usuari o contrasenya incorrecta";
                $this->render("login", ["error"=> $error]);
            }
            exit;
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
                if ($_SESSION['rol'] != "convidat"){
                    $this->render('users/users');
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

        public function searchDef($found = "") {
            session_start();
            $user = new Usuario();
            exit(json_encode([$user->mostrarUsuarios($found), $_SESSION['rol']]));
        }

        public function search($found) {
            session_start();
            $user = new Usuario();
            exit(json_encode([$user->mostrarUsuarios($found), $_SESSION['rol']]));
        }

        public function createView() {
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
                    $this->render('users/createUser');
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

        public function create() {
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
                    $user->crearUsuario($_POST['Nom'], $_POST['Contraseña'], $_POST['Rol']);
                    header('Location: /users');
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

        public function updateView($id) {
            session_start();
            $user = new Usuario();
            if (!isset($_SESSION['nom'])){
                $state = false;
            }
            else{
                $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
            }
            if ($state) {   
                if ($id != 1){  
                    if ($_SESSION['rol'] == "admin"){
                        $this->render('users/updateUser', ['usuario' => $user->updateViewUsuario($id)]);
                    }
                    else{
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
        

        public function update($id) {
            session_start();
            $user = new Usuario();
            if (!isset($_SESSION['nom'])){
                $state = false;
            }
            else{
                $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
            }
            if ($state) {     
                if ($id != 1){
                    if ($_SESSION['rol'] == "admin"){
                        $user->updateUsuario($_POST['Nom'],$_POST['Contraseña'], $_POST['Rol'], $id);
                        header('Location: /users');
                    }
                    else{
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

        public function delete($id) {
            session_start();
            $user = new Usuario();
            if (!isset($_SESSION['nom'])){
                $state = false;
            }
            else{
                $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
            }
    
                if ($state) {
                    if ($id != 1){         
                        if ($_SESSION['rol'] == "admin"){
                            $user->eliminarUsuario($id);
                            header('Location: /users');
                        }
                        else{
                            //Warning de que no tiene permisos para ejecutar esta orden
                            header('Location: /registers');
                        }
                    }
                    else{
                        //Warning de que no tiene permisos para ejecutar esta orden
                        header('Location: /users');
                    }

                } else {
                    session_unset();
                    session_destroy();
                    $error = " La sessió no s'ha iniciat ";
                    $this->render("login", ["error"=> $error]);  
                }
                exit;
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
