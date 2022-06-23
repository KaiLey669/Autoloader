<?php

spl_autoload_register(function($class){
    //echo $class;
    $path = __DIR__ . '/' . str_replace('\\','/', $class) . '.php';
    //echo $path;
    include $path;
});

use Classes\Second\Second;
use Classes\First;

//require __DIR__ . '/Classes/First.php';
//require __DIR__ . '/Classes/Second/Second.php';

$firstClass = new First();
$secondClass = new Second();

$firstClass->printFirst();
$secondClass->printSecond();

//echo __DIR__;


