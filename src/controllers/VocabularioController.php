<?php

require_once '../src/model/Usuario.php';
require_once '../src/model/Vocabulario.php';

class VocabularioController {

    function index(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'tecnic':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    }

    function indexLlistas(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $vocabularis = new Vocabulario();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("vocabularios/campsLlista", ["vocabularis" => $vocabularis->getAllVocabularios()]);
                break;
            case 'tecnic':
                $this->render("vocabularios/campsLlista", ["vocabularis" => $vocabularis->getAllVocabularios()]);
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    }

    function newLlista(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $vocabularis = new Vocabulario();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("vocabularios/createCampLlista");
                break;
            case 'tecnic':
                $this->render("vocabularios/createCampLlista");
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    }

    function createLlista(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $vocabularis = new Vocabulario();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                header("Location: ");
                break;
            case 'tecnic':
                $this->render("vocabularios/createCampLlista");
                break;
            case 'convidat':
                header('Location: /registers');
                break;
        }
    }

    function indexAutors(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $autors = new Autor();

        switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
            case 'admin':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'tecnic':
                $this->render("vocabularios/indexVocabulario");
                break;
            case 'convidat':
                header('Location: /registers');
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