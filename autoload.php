<?php

function classLoader($class)
{
    $class = str_replace('qifuwec\\wechat\\', '', $class);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/src/' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }else{
        echo $file;
        exit;
    }
}

spl_autoload_register('classLoader');