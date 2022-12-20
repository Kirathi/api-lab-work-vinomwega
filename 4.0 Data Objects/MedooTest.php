<?php

define("DB_HOST","localhost");
define("DB_USER","vinnie");
define("PASS","vinnie");
define("DB_NAME","class_db");
define("DB_PORT","3306");
require_once 'vendor/autoload.php';

// Using Medoo namespace
use Medoo\Medoo;

// Connect the database
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'DB_HOST',
    'database' => 'DB_NAME',
    'username' => 'DB_USER',
    'password' => 'PASS'
]);
//insert
$database->insert('row' ,[
    'name' => 'Admin'
]);