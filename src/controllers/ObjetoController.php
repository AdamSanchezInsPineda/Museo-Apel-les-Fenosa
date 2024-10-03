<?php
require_once '../src/model/Objeto.php';
class ObjetoController {
    public function table() {
        $objeto = new Objeto();
        $this->render('table', ['registros' => $objeto->getAllObjetos()]);
    }

    public function project($project) {
        $this->render('project', ['project' => $project]);
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