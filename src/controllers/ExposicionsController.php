<?php

class ExposicionsController {
    function index(){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $user = new Usuario();

        $exposicio = new Exposicio();

        $this->render("exposicions/exposicions", ["exposicions" => $exposicio->mostrarExposicions()]);

    
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
                $exposicio->crearExposicion($_POST['Nom'], $_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['Lloc']);
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

    public function editExposicio($id) {
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
            if ($id){  
                if ($_SESSION['rol'] == "admin"){
                    $this->render('exposicions/editExposicions', ['exposicio' => $exposicio->updateViewExposicion($id)]);
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
        } 
        else {
            session_unset();
            session_destroy();
            $error = " La sessió no s'ha iniciat ";
            $this->render("login", ["error"=> $error]);
        }
        exit;
    }


    public function updateExposicio($id) {
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
                    $exposicio->updateExposicion($_POST['Nom'],$_POST['Data_Inicial'], $_POST['Data_Final'],  $_POST['Tipus'], $_POST['Lloc'], $id);
                    header('Location: /exposicions');
                }
                else{
                    //Warning de que no tiene permisos para ejecutar esta orden
                    header('Location: /registers');
                }
            }
            else{
                //Warning de que no tiene permisos para ejecutar esta orden
                header('Location: /exposicions');
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

    public function bensExposicio($id){
        session_start();
        if (!isset($_SESSION['nom'])){
            $this->render("login", ["error" => " La sessió no s'ha iniciat "]);
        }

        $exposicio = new Exposicio();
        $bens = $exposicio->verBens($id);
        // switch ($user->rolUsuario($_SESSION['nom'], $_SESSION['password'])) {
        //     case 'admin':
        //         $this->render("exposicions/bensExposicions", ["exposicions" => $exposicio->mostrarExposicions()]);
        //         break;
        //     case 'tecnic':
        //         $this->render("exposicions/bensExposicions", ["exposicions" => $exposicio->mostrarExposicions()]);
        //         break;
        //     case 'convidat':
        //         header('Location: /registers');
        //         break;
        // }

        $this->render("exposicions/bensExposicions", ["exposicions" => $bens,
        "exposicionID" => $id]);


    }

    public function bensAddExposicio(){
        session_start();
        $user = new Usuario();
        $objeto = new Objeto();

        if (!isset($_SESSION['nom'])){
            $state = false;
        }
        else{
            $state = $user->comprovarUsuario($_SESSION['nom'] , $_SESSION['password']);
        }
        if ($state) {
            if ($_SESSION['rol'] != "convidat"){
                $this->render("exposicions/addBensExposicions", ["objetos" => $objeto->afegirBensObj()]);
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
    

    public function bensCreateExposicio($exposicionId) {
        session_start();
        $user = new Usuario();
        $exposicio = new Exposicio();
    
        if (!isset($_SESSION['nom']) || !$user->comprovarUsuario($_SESSION['nom'], $_SESSION['password'])) {
            session_unset();
            session_destroy();
            $this->render("login", ["error" => "La sessió no s'ha iniciat"]);
            exit;
        }
    
        if ($_SESSION['rol'] == "convidat") {
            header('Location: /registers');
            exit;
        }
    

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $objetosSeleccionados = $_POST['objetos'] ?? [];
            
            foreach ($objetosSeleccionados as $objetoId) {
                // Aquí insertas en la tabla ObjetoExposicion
                $this->$exposicio->insertObjetoExposicion($objetoId, $exposicionId);
            }
            
            // Redirigir o mostrar un mensaje de éxito
            $this->render("exposicions/bensExposicions", ["exposicions" => $exposicionId]);
        }
    }

    public function bensDeleteExposicio($id) {
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
                        $exposicio->eliminarObjetoExposicion($id);
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