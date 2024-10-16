<?php

require_once '../src/model/Usuario.php';

class VocabularioController {

    function index(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'Administració':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'Tècnic':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'Convidat':
                header('Location: /registers');
                break;
            
            default:
                # code...
                break;
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