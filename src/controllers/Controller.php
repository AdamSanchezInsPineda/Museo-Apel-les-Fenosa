<?php

require_once '../src/model/Usuario.php';

class Controller {
    protected $user;

    public function __construct()
    {
        session_start();
        $this->checkSession();
        $this->user = new Usuario();
    }

    protected function checkSession()
    {
        if (!isset($_SESSION['nom'])) {
            $this->render("login", ["error" => "La sessió no s'ha iniciat"]);
            exit;
        }
    }

    protected function checkReadRole(array $allowedRoles)
    {
        $role = $this->user->rolUsuario($_SESSION['nom'], $_SESSION['password']);
        
        if (!in_array($role, $allowedRoles)) {
            header('Location: /registers');
            exit;
        }
    }

    protected function checkWriteRole(array $allowedRoles)
    {
        $role = $this->user->rolUsuario($_SESSION['nom'], $_SESSION['password']);
        
        if (!in_array($role, $allowedRoles)) {
            header('Location: /registers');
            exit;
        }
    }

    protected function render($view, $data = [])
    {
        extract($data);
        $viewFile = "../src/views/$view.php";

        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View $view not found.";
        }
    }
}