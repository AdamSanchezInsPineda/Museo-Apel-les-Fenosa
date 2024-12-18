<?php

class Vocabulario extends Database
{
    public function getAllFromModel($modelName)
    {
        $modelClass = ucfirst($modelName);
        
        if (class_exists($modelClass)) {
            $model = new $modelClass();
            
            $method = "getAll" . ucfirst($modelName) . "s";
            
            if (method_exists($model, $method)) {
                return $model->$method();
            } else {
                throw new Exception("Método $method no existe en el modelo $modelClass");
            }
        } else {
            throw new Exception("El modelo $modelClass no existe");
        }
    }

    public function getFromModel($modelName, $id)
    {
        $modelClass = ucfirst($modelName);
        
        if (class_exists($modelClass)) {
            $model = new $modelClass();
            
            $method = "get" . ucfirst($modelName);
            
            if (method_exists($model, $method)) {
                return $model->$method($id);
            } else {
                throw new Exception("Método $method no existe en el modelo $modelClass");
            }
        } else {
            throw new Exception("El modelo $modelClass no existe");
        }
    }

    public function addFromModel($modelName, $params)
    {
        $modelClass = ucfirst($modelName);
        
        if (class_exists($modelClass)) {
            $model = new $modelClass();
            
            $method = "add" . ucfirst($modelName);
            
            if (method_exists($model, $method)) {
                $model->$method($params);
            } else {
                throw new Exception("Método $method no existe en el modelo $modelClass");
            }
        } else {
            throw new Exception("El modelo $modelClass no existe");
        }
    }

    public function updateFromModel($modelName, $params)
    {
        $modelClass = ucfirst($modelName);
        
        if (class_exists($modelClass)) {
            $model = new $modelClass();
            
            $method = "update" . ucfirst($modelName);
            
            if (method_exists($model, $method)) {
                $model->$method($params);
            } else {
                throw new Exception("Método $method no existe en el modelo $modelClass");
            }
        } else {
            throw new Exception("El modelo $modelClass no existe");
        }
    }

    public function destroyFromModel($modelName, $id)
    {
        $modelClass = ucfirst($modelName);
        
        if (class_exists($modelClass)) {
            $model = new $modelClass();
            
            $method = "destroy" . ucfirst($modelName);
            
            if (method_exists($model, $method)) {
                $model->$method($id);
            } else {
                throw new Exception("Método $method no existe en el modelo $modelClass");
            }
        } else {
            throw new Exception("El modelo $modelClass no existe");
        }
    }
    public function getAllAutors()
    {
        $sql = $this->db->prepare('SELECT id, Nombre FROM Autors');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllMuseos()
    {
        $sql = $this->db->prepare('SELECT MuseoID, Nombre FROM Museos');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllMaterial(){
        $sql = $this->db->prepare('SELECT id, valor FROM Material');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllTecnicas(){
        $sql = $this->db->prepare('SELECT id, valor FROM Tecnica');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllBajas(){
        $sql = $this->db->prepare('SELECT id, valor FROM Baja');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllCausaBaja(){
        $sql = $this->db->prepare('SELECT id, valor FROM CausaBaja');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllFormaIngreso(){
        $sql = $this->db->prepare('SELECT id, valor FROM FormaIngreso');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
