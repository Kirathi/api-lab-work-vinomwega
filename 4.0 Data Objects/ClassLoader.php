<?php
function loader($classname){
    require_once $classname.".php";
}
//register autoload function
spl_autoload_register("loader");
