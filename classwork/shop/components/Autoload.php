<?php



function myAutoload($className) {
    $array_path = array(
        '/models/',
        '/components/'
    );

    foreach ($array_path as $path) {
        $path = ROOT . $path . $className . '.php';

        if (is_file($path)) {
            include_once $path;
        }
    }

}

spl_autoload_register('myAutoload');