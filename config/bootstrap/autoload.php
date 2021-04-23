<?php
declare(strict_types=1);
spl_autoload_register(function ($name) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $name);

    $path = $_SERVER['DOCUMENT_ROOT'] . '/apps/' . $className . '.php';
//    var_dump($path);
    if (file_exists($path)) {
        require $path;
    }
});
