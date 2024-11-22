<?php
/*
$log = fopen("logPhp.txt", 'a');
        fwrite($log, $found);
        fclose($log);
*/
class Controller {
    protected $user;

    public function __construct()
    {
        session_start();
        $this->user = new Usuario();
    }

    protected function checkSession()
    {
        if (!isset($_SESSION['nom'])) {
            $this->render("login", ["error" => "La sessió no s'ha iniciat"]);
            exit;
        }
    }

    protected function checkRole(array $allowedRoles)
    {
        $this->checkSession();
        if (!in_array($_SESSION['rol'], $allowedRoles)) {
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
