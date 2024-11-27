<?php

class VocabularioController extends Controller {
    private $vocabulariList;
    private $vocabularis;

    public function __construct()
    {
        parent::__construct();
        $this->vocabularis = new Vocabulario();
        $this->vocabulariList = [
            "autor" => "autor",
            "baixa" => "baja",
            "causa-baixa" => "causaBaja",
            "classificacio" => "classificacion",
            "getty" => "codigoGetty",
            "datacio" => "datacion",
            "conservacio" => "estadoConservacion",
            "ingres" => "formaIngreso",
            "material" => "material",
            "tecnica" => "tecnica",
            "exposicio" => "tiposExposicion"
        ];
    }

    public function indexVocabulario()
    {
        $this->checkRole(['admin']); // Permiso de lectura para admins
        $vocabularisList = [
            "Autors" => "autor",
            "Baixes" => "baixa",
            "Causa de la baixa" => "causa-baixa",
            "Classificació genèrica" => "classificacio",
            "Codi Getty" => "getty",
            "Datació" => "datacio",
            "Estat Conservació" => "conservacio",
            "Forma d'Ingrés" => "ingres",
            "Materials" => "material",
            "Tècnica" => "tecnica",
            "Tipus Exposició" => "exposicio"
        ];
        
        $this->render("vocabularios/indexVocabulario", ["vocabularis" => $vocabularisList]);
    }

    /*
        public function searchDef($found = "") {
            $this->checkRole(['admin']);
            exit(json_encode([$this->user->mostrarUsuarios($found), $_SESSION['rol']]));
        }

        public function search($found) {
            $this->checkRole(['admin']);
            exit(json_encode([$this->user->mostrarUsuarios($found), $_SESSION['rol']]));
        }
    */

    public function showVocabulario($path)
    {
        $this->checkRole(['admin']); // Permiso de lectura
        $data = $this->vocabularis->getAllFromModel($this->vocabulariList[$path]);
        $this->render("vocabularios/campsLlista", ["vocabularis" => $data, "path" => $this->vocabulariList[$path]]);
    }

    public function newVocabulario($path)
    {
        $this->checkRole(['admin']); // Permiso de escritura
        $this->render("vocabularios/createCampLlista", ["path" => $this->vocabulariList[$path]]);
    }

    public function createVocabulario($path)
    {
        $this->checkRole(['admin']); // Permiso de escritura
        $this->vocabularis->addFromModel($this->vocabulariList[$path], $_POST);
        header("Location: /vocabularis/{$this->vocabulariList[$path]}");
        exit;
    }

    public function editVocabulario($path, $id)
    {
        $this->checkRole(['admin']); // Permiso de escritura
        $this->render("/vocabularios/editCampLlista", [
            "vocabulari" => $this->vocabularis->getFromModel($this->vocabulariList[$path], $id),
            "path" => $this->vocabulariList[$path],
            "id" => $id,
            "tipo" => ["Autor" => "autor", "Material" => "material", "Tècnica" => "tecnica"]
        ]);
    }

    public function updateVocabulario($path, $id)
    {
        $this->checkRole(['admin']); // Permiso de escritura
        $_POST["id"] = $id;
        $this->vocabularis->updateFromModel($this->vocabulariList[$path], $_POST);
        header("Location: /vocabularis/{$this->vocabulariList[$path]}");
        exit;
    }

    public function deleteVocabulario($path, $id)
    {
        $this->checkRole(['admin']); // Permiso de escritura
        $this->vocabularis->destroyFromModel($this->vocabulariList[$path], $id);
        header("Location: /vocabularis/{$this->vocabulariList[$path]}");
        exit;
    }
}