<?php

class VocabularioController extends Controller {
    private $vocabularis;

    public function __construct()
    {
        parent::__construct();
        $this->vocabularis = new Vocabulario();
    }

    public function indexVocabulario()
    {
        $this->checkReadRole(['admin']); // Permiso de lectura para admins
        $vocabularisList = [
            "Autors" => "autor",
            "Baixes" => "baja",
            "Causa de la baixa" => "causaBaja",
            "Classificació genèrica" => "classificacion",
            "Codi Getty" => "codigoGetty",
            "Datació" => "datacion",
            "Estat Conservació" => "estadoConservacion",
            "Forma d'Ingrés" => "formaIngreso",
            "Materials" => "material",
            "Tècnica" => "tecnica",
            "Tipus Exposició" => "tiposExposicion"
        ];
        
        $this->render("vocabularios/indexVocabulario", ["vocabularis" => $vocabularisList]);
    }

    public function showVocabulario($path)
    {
        $this->checkReadRole(['admin']); // Permiso de lectura
        $data = $this->vocabularis->getAllFromModel($path);
        $this->render("vocabularios/campsLlista", ["vocabularis" => $data, "path" => $path]);
    }

    public function newVocabulario($path)
    {
        $this->checkWriteRole(['admin']); // Permiso de escritura
        $this->render("vocabularios/createCampLlista", ["path" => $path]);
    }

    public function createVocabulario($path)
    {
        $this->checkWriteRole(['admin']); // Permiso de escritura
        $this->vocabularis->addFromModel($path, $_POST);
        header("Location: /vocabularis/{$path}");
        exit;
    }

    public function editVocabulario($path, $id)
    {
        $this->checkWriteRole(['admin']); // Permiso de escritura
        $this->render("/vocabularios/editCampLlista", [
            "vocabulari" => $this->vocabularis->getFromModel($path, $id),
            "path" => $path,
            "id" => $id,
            "tipo" => ["Autor" => "autor", "Material" => "material", "Tècnica" => "tecnica"]
        ]);
    }

    public function updateVocabulario($path, $id)
    {
        $this->checkWriteRole(['admin']); // Permiso de escritura
        $_POST["id"] = $id;
        $this->vocabularis->updateFromModel($path, $_POST);
        header("Location: /vocabularis/{$path}");
        exit;
    }

    public function deleteVocabulario($path, $id)
    {
        $this->checkWriteRole(['admin']); // Permiso de escritura
        $this->vocabularis->destroyFromModel($path, $id);
        header("Location: /vocabularis/{$path}");
        exit;
    }
}