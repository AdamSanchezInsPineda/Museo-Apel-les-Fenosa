<?php
require_once '../src/model/Usuario.php';
require_once '../src/model/Exposicio.php';


class ExposicionsController {

    // function index() {
    //     session_start();
        
    //     if (!isset($_SESSION['nom'])){
    //         $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
    //     }
    //         $user = new Usuario();
    //         $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
    //     if ($state) {
    //         $exposicio = new Exposicio();              
    //         $this->render('exposicions', ['exposicions' => $exposicio-> mostrarExposicions()]);
    //         exit;

    //         switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
    //             case 'admin':
    //                 $this->render("exposicions");
    //                 break;
    //             case 'tecnic':
    //                 $this->render("exposicions");
    //                 break;
    //             case 'convidat':
    //                 header('Location: /registers');
    //                 break;
    //         }

    //     } //else {
    //         //session_unset();
    //         //session_destroy();
    //         //$error = " La sessió no s'ha iniciat ";
    //         //$this->render("login", ["error"=> $error]);
    //         //exit;
    //     //}
    // }
    function index(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $exposicio = new Exposicio();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("exposicions/exposicions", ["exposicions" => $exposicio->mostrarExposicions()]);
                break;
            case 'tecnic':
                $this->render("exposicions/exposicions", ["exposicions" => $exposicio->mostrarExposicions()]);
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    
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
                if ($id != 1){         
                    if ($_SESSION['rol'] == "admin"){
                        $exposicio->eliminarExposicion($id);
                        header('Location: /exposicions');
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
                $this->render('exposicions/createExposicions');
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
                $exposicio->crearExposicion($_POST['nombre'], $_POST['fechaInicio'], $_POST['fechaFin'],  $_POST['tipoExposicionID'], $_POST['lugarExposicion']);
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