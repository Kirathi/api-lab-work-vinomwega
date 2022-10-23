<?php

namespace Design;
$path =  __DIR__;
$path = trim($path,"Design");
//die($path);
require_once $path.'Classes/Database.php';

class Main{
    public function __construct(){
        echo "<p>Design\Main</p>";
    }
}