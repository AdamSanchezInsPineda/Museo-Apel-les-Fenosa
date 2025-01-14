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
        $clGenericas = $model->getAllClGenericas();
        $eConservaciones = $model->getAllEConservacion();
        //var_dump($autores);
        $this->render('objects/createObject', ['autores' => $autores, 'museos' => $museos, 'materials' => $materials, 'tecnicas' => $tecnicas, 'bajas' =>$bajas, 'causaBajas' => $causaBajas, 'formaIngresos' => $formaIngresos, 'clGenericas' => $clGenericas, 'eConservaciones' => $eConservaciones]);
    }

    public function new($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }
    public function create() {
        $this->checkRole(['admin', 'tecnic', 'convidat']); // Verificar permisos
        
        $registroNumero = $_POST['RegistroNº'] ?? null;
        $regex = '/^[A-Za-z]?\d{5}$/'; // Expresión regular para validar el formato


        if (!$registroNumero || !preg_match($regex, $registroNumero)) {
            $_SESSION['error'] = "El número de registro no cumple con el formato requerido.";
            $this->render('objects/createObject');
            return;
        }
        
        // Recoger datos del formulario con validación
        $this->objeto->fitxesCreate(
            $registroNumero,
            $_POST['UsuarioID'] ?? null, 
            $_FILES['Imagen']['name'] ?? null, 
            $_POST['Nombre'] ?? null,
            $_POST['ClasificacionGenerica'] ?? null, 
            $_POST['ColeccionProcedencia'] ?? null,
            $_POST['Altura'] ?? null,
            $_POST['Anchura'] ?? null,
            $_POST['Profundidad'] ?? null,
            $_POST['MaterialID'] ?? null, 
            $_POST['TecnicaID'] ?? null, 
            $_POST['AutorID'] ?? null, 
            $_POST['Titulo'] ?? null,
            $_POST['DatacionID'] ?? null, 
            $_POST['UbicacionActualID'] ?? null, 
            date('Y-m-d H:i:s'),
            $_POST['NumeroEjemplares'] ?? null,
            $_POST['FormaIngresoID'] ?? null, 
            $_POST['FechaIngreso'] ?? null,
            $_POST['FuenteIngreso'] ?? null,
            $_POST['BajaID'] ?? null, 
            $_POST['CausaBajaID'] ?? null, 
            $_POST['FechaBaja'] ?? null,
            $_POST['PersonaAutorizadaBaja'] ?? null,
            $_POST['EstadoConservacionID'] ?? null, 
            $_POST['LugarEjecucion'] ?? null,
            $_POST['LugarProcedencia'] ?? null,
            $_POST['NumeroTiraje'] ?? null,
            $_POST['OtrosNrosIdentificacion'] ?? null,
            $_POST['ValoracionEconomica'] ?? null,
            $_POST['Bibliografia'] ?? null,
            $_POST['Descripcion'] ?? null,
            $_POST['HistoriaObjeto'] ?? null,
            $_POST['MuseoID'] ?? null, 
            1 
        );
    
        header('Location: /registers');
        exit();
    }

    public function updateView($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->render('objects/updateObject', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
    }

    public function update($registroN) {
        $this->checkRole(['admin', 'tecnic', 'convidat']);
        $this->objeto->fitxesUpdate(
            $registroN,
            $_POST['usuarioID'] ?? null, 
            $_FILES['imagen']['name'] ?? null, 
            $_POST['nombre'] ?? null,
            $_POST['clasificacionGenerica'] ?? null, 
            $_POST['coleccionProcedencia'] ?? null,
            $_POST['altura'] ?? null,
            $_POST['anchura'] ?? null,
            $_POST['profundidad'] ?? null,
            $_POST['materialID'] ?? null, 
            $_POST['tecnicaID'] ?? null, 
            $_POST['autorID'] ?? null, 
            $_POST['titulo'] ?? null,
            $_POST['datacionID'] ?? null, 
            $_POST['ubicacionActualID'] ?? null, 
            $_POST['numeroEjemplares'] ?? null,
            $_POST['formaIngresoID'] ?? null, 
            $_POST['fechaIngreso'] ?? null,
            $_POST['fuenteIngreso'] ?? null,
            $_POST['bajaID'] ?? null, 
            $_POST['causaBajaID'] ?? null, 
            $_POST['fechaBaja'] ?? null,
            $_POST['personaAutorizadaBaja'] ?? null,
            $_POST['estadoConservacionID'] ?? null, 
            $_POST['lugarEjecucion'] ?? null,
            $_POST['lugarProcedencia'] ?? null,
            $_POST['numeroTiraje'] ?? null,
            $_POST['otrosNrosIdentificacion'] ?? null,
            $_POST['valoracionEconomica'] ?? null,
            $_POST['bibliografia'] ?? null,
            $_POST['descripcion'] ?? null,
            $_POST['historiaObjeto'] ?? null,
            $_POST['museoID'] ?? null, 
            1,
            $registroN // Agregar el valor de ObjetoID como último parámetro
        );
        $this->render('objects/fitxaCompleta', ['cont' => [$registroN, $this -> objeto->fitxesMostrar($registroN)]]);
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