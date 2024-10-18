<?php
require_once '../src/model/Usuario.php';
require_once '../src/model/Exposicio.php';

class ExposicionsController {

    //obje
    function index() {
        session_start();
        
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }
            $user = new Usuario();
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        if ($state) {
            $exposicio = new Exposicio();              
            $this->render('exposicions', ['exposicions' => $exposicio-> mostrarExposicions()]);
            exit;

            switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
                case 'admin':
                    $this->render("exposicions");
                    break;
                case 'tecnic':
                    $this->render("exposicions");
                    break;
                case 'convidat':
                    header('Location: /registers');
                    break;
            }

        } //else {
            //session_unset();
            //session_destroy();
            //$error = " La sessió no s'ha iniciat ";
            //$this->render("login", ["error"=> $error]);
            //exit;
        //}
    }
    function indexExposicions(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $exposicions = new Exposicio();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("exposicions", ["exposicions" => $exposicions->mostrarExposicions()]);
                break;
            case 'tecnic':
                $this->render("exposicions", ["exposicions" => $exposicions->mostrarExposicions()]);
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    }
}