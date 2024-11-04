<?php

class UsuarioController extends Controller {

    public function index() {
        $this->render("login", ["error" => ""]);
    }

    public function login() {
        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['password'] = $_POST["password"];

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
        exit(json_encode([$this->user->mostrarUsuarios($found), $_SESSION['rol']]));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        exit(json_encode([$this->user->mostrarUsuarios($found), $_SESSION['rol']]));
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
