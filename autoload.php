<?php
spl_autoload_register (function($classname) {
    $classname= explode('_',$classname);
    $classname= implode('/',$classname);
    $filename = $classname .".php";
    include_once $filename;
 //  var_dump($filename);
});