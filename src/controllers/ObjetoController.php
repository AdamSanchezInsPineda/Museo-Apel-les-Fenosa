<?php
class ObjetoController {
    public function table() {
        require '../src/model/register.php';
        $this->render('table', ['registros' => getAllObjetos()]);
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