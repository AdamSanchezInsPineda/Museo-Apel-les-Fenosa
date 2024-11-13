<?php

class UsuarioController extends Controller {

    public function index() {
        $this->render("login", ["error" => ""]);
    }

    public function getRol() {
        header("Content-Type: application/json");
        if (isset($_SESSION["rol"])){
            echo json_encode(["rol" => $_SESSION["rol"]]);
        } else {
            echo json_encode(["error" => "Sesión no iniciada"]);
        }
        exit;
    }

    public function login() {
        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['password'] = $_POST["password"];
        echo json_encode($_SESSION);

        if ($this->user->comprovarUsuario($_SESSION['nom'], $_SESSION['password'])) {
            $_SESSION['rol'] = $this->user->rolUsuario($_SESSION['nom'], $_SESSION['password']);
            header('Location: /registers');
        } else {
            session_unset();
            session_destroy();
            $this->render("login", ["error" => "* Nom d'usuari o contrasenya incorrecta"]);
        }
        exit;
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /');
    }

    public function table() {
        $this->checkRole(['admin', 'tecnic']);
        $this->render('users/users');
    }

    public function searchDef($found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->user->mostrarUsuarios($found)));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->user->mostrarUsuarios($found)));
    }

    public function createView() {
        $this->checkRole(['admin']);
        $this->render('users/createUser');
    }

    public function create() {
        $this->checkRole(['admin']);
        $this->user->crearUsuario($_POST['Nom'], $_POST['Contraseña'], $_POST['Rol']);
        header('Location: /users');
        exit;
    }

    public function updateView($id) {
        $this->checkRole(['admin']);
        if ($id != 1) {
            $this->render('users/updateUser', ['usuario' => $this->user->updateViewUsuario($id)]);
        } else {
            header('Location: /users');
        }
    }

    public function update($id) {
        $this->checkRole(['admin']);
        if ($id != 1) {
            $this->user->updateUsuario($_POST['Nom'],$_POST['Contraseña'], $_POST['Rol'], $id);
            header('Location: /users');
        } else {
            header('Location: /users');
        }
        exit;
    }

    public function delete($id) {
        $this->checkRole(['admin']);
        if ($id != 1) {
            $this->user->eliminarUsuario($id);
            header('Location: /users');
        } else {
            header('Location: /users');
        }
        exit;
    }
}
