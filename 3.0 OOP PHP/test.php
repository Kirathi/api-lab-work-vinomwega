<?php

//require_once "Classes/Main.php";
//require_once "Design/Main.php";

//Aliasing

function loader($className){
    require_once $className.'php';
}
spl_autoload_register("loader");

$object1 = new Classes\Main();
$object2 = new Design\Main();