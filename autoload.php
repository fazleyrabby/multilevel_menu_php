<?php 

    spl_autoload_register('autoLoad');

    function autoLoad($className){
        $path = 'class/';
        $extension = '.class.php';
        $fileName = $path. $className . $extension;


        if (!file_exists($fileName)) {
            return false;
        }
        include_once $path. $className . $extension;
    }

    

    



