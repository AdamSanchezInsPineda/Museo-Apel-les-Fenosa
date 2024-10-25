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
}
