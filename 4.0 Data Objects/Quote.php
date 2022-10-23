<?php

require_once "ClassLoader.php";//our class autoloader
class Quote extends Database implements Crud{

    public function __construct(){
        parent::__construct();//call the parent constructor
    }

    public function insert(){
        $sql=
        "INSERT INTO quote(quote,author,dob,dod,category)
        VALUE('In God we trust, all others bring data',
        'Demming',1901,1993,'data-science')
        ";
        //run this query
        $this->connection->query($sql);
    }
    public function get($id = 0){}
    public function delete($id){}
}
$test = new Quote();
$test->insert();