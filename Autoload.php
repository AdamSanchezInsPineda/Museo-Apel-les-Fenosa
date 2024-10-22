<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../src/model/vocabulario' . $class . '.php';

    if (file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception("La clase {$class} no se encuentra en {$path}");
    }
});
