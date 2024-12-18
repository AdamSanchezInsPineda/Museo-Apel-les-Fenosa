<?php

class ObjetoController extends Controller{

    protected $objeto;

    public function __construct()
    {
        parent::__construct();
        $this->objeto = new Objeto();
    }
    
    public function table() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/objects');
    }

    public function searchDef($found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> getObjetos($found)));
    }

    public function search($found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this -> objeto-> getObjetos($found)));
    }

    public function buscadorAvanzado() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        
        $criteria = json_decode(file_get_contents('php://input'), true)['criteria'];
        exit(json_encode($this->objeto->buscadorAvanzado($criteria)));
    }

    public function createView() {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $model = new Vocabulario();

        // Obtener todos los autores
        $autores = $model->getAllAutors();
        $museos = $model->getAllMuseos();
        $materials = $model->getAllMaterial();
        $tecnicas = $model->getAllTecnicas();
        $bajas = $model->getAllBajas();
        $causaBajas = $model->getAllCausaBaja();
        $formaIngresos = $model->getAllFormaIngreso();
        var_dump($autores);
        $this->render('objects/createObject', ['autores' => $autores, 'museos' => $museos, 'materials' => $materials, 'tecnicas' => $tecnicas, 'bajas' =>$bajas, 'causaBajas' => $causaBajas, 'formaIngresos' => $formaIngresos]);
    }

    public function new($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }
    public function create() {
        $this->checkRole(['admin', 'tecnic', 'convidat']); // Verificar permisos
        // Recoger datos del formulario con validación
        $this->objeto->fitxesCreate(
            $_POST['RegistroNº'] ?? null,
            $_POST['UsuarioID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_FILES['Imagen']['name'] ?? null, // Si estás subiendo una imagen
            $_POST['Nombre'] ?? null,
            $_POST['ClasificacionGenerica'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['ColeccionProcedencia'] ?? null,
            $_POST['Altura'] ?? null,
            $_POST['Anchura'] ?? null,
            $_POST['Profundidad'] ?? null,
            $_POST['MaterialID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['TecnicaID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['AutorID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['Titulo'] ?? null,
            $_POST['DatacionID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['UbicacionActualID'] ?? null, // Asegúrate de que este campo esté en el formulario
            date('Y-m-d H:i:s'),
            $_POST['NumeroEjemplares'] ?? null,
            $_POST['FormaIngresoID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['FechaIngreso'] ?? null,
            $_POST['FuenteIngreso'] ?? null,
            $_POST['BajaID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['CausaBajaID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['FechaBaja'] ?? null,
            $_POST['PersonaAutorizadaBaja'] ?? null,
            $_POST['EstadoConservacionID'] ?? null, // Asegúrate de que este campo esté en el formulario
            $_POST['LugarEjecucion'] ?? null,
            $_POST['LugarProcedencia'] ?? null,
            $_POST['NumeroTiraje'] ?? null,
            $_POST['OtrosNrosIdentificacion'] ?? null,
            $_POST['ValoracionEconomica'] ?? null,
            $_POST['Bibliografia'] ?? null,
            $_POST['Descripcion'] ?? null,
            $_POST['HistoriaObjeto'] ?? null,
            $_POST['MuseoID'] ?? null, // Asegúrate de que este campo esté en el formulario
            1 // O el valor que desees para el campo activo
        );
    
        // Redirigir a la página de registros
        header('Location: /registers');
        exit();
    }

    public function updateView($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/updateObject', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }

    public function update($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/updateObject', ['objeto' => $this -> objeto->fitxesMostrar($registroN)]);
    }

    public function delete($registroN) {
        $this->checkRole(['admin', 'tecnic']);
        $this->objeto->fitxesDisable($registroN);
        header("/registers");   
    }


    public function ficha($id) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $detallesObjeto = $this -> objeto->fitxesMostrar($id);
            
        if ($detallesObjeto) {
            $this->render('objects/ficha', ['objeto' => $detallesObjeto]);
        } else {
            header('Location: /registers');
        }
    }

    public function basica($registroN){
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/fitxaBasica', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }

    public function bensAddExposicio($id){

        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render("exposicions/addBensExposicions");
        exit;
    }    

    public function bensAddExposicioSearchDef($id, $found = "") {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->objeto->afegirBensObj($found, $id)));
    }

    public function bensAddExposicioSearch($id, $found) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        header('Content-Type: application/json');
        exit(json_encode($this->objeto->afegirBensObj($found, $id)));
    }
}