<?php
//constrants - settings
define("DB_HOST","localhost");
define("DB_USER","vinnie");
define("PASS","vinnie");
define("DB_NAME","class_db");
define("DB_PORT","3306");
class Database{
    //class property
    public $connection;
    //method - a special one a.k.a class constructor
    public function __construct(){
        $this->connection =
         new mysqli(DB_HOST,DB_USER,PASS,DB_NAME,DB_PORT);

         //Error check
         if ($this->connection->connect_errno){
            echo "Something went wrong: ".
            $this->connection->connect_error;
            die();
        }
    }
}
//$test = new Database();//an oblect