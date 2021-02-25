<?php

function load($class)
{

    $class = str_replace('\\', '/', $class);

    $prefix = 'Scripts\\InputValues\\';
    $len = strlen($prefix);
    $relative_class = substr($class, $len);
    
    $base_dir = __DIR__ . '/src/';

    $fullPath = $base_dir . $relative_class . '.php';

    return include_once $fullPath;

}

spl_autoload_register('load');
