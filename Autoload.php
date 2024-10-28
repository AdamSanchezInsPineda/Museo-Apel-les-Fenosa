<?php
spl_autoload_register(function ($class) {
    $baseDirs = [
        __DIR__ . "/src/models/",
        __DIR__ . "/src/models/vocabulario/",
        __DIR__ . "/src/controllers/",
        __DIR__ . "/src/"
    ];
    
    foreach ($baseDirs as $baseDir) {
        $file = $baseDir . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
    
    throw new Exception("La clase {$class} no se encuentra en ninguno de los directorios base.");
});