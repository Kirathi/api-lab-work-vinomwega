<?php

require_once "ClassLoader.php";//our class autoloader
class Quote extends Database implements Crud{

    public function __construct(){
        parent::__construct();//call the parent constructor
    }

    public function insert(){
        $sql=
        "INSERT INTO quote(quote,author,dob,dod,category)
        VALUE('If you want to live a happy life, tie it to a goal, not to people or things.',
        'Albert Einstein',1879,1955,'life')
        ";
        //run this query
        $this->connection->query($sql);
    }
    public function get($id = 0){
        //if  id is set,  we reuturn one quote get (1)
        if($id != 0)
            $sql = "SELECT * FROM quote WHERE qid=$id "; 
        else
            $sql = "SELECT * FROM quote";
        
        $results = $this->connection->query($sql);
        //get the resultset
        if($id != 0)
            return $results->fetch_assoc();
        else
            return $results->fetch_all(MYSQLI_ASSOC);
    
    }
    public function delete($id){
        try{
            if($this->get($id)){
                $sql = "DELETE FROM quote WHERE qid=$id";
                //execute the query
                $this->connection->query($sql);

                echo "record deleted successfully";
            }else{
                echo "record does not exist";
            }
           
        }catch (Exception $e){
            //the user will see this message
            echo "something went wrong plese contact your Administrator";
            
        }
          
    }
}
$test = new Quote();
$test->insert();
$singleQuote = $test->get(2);//a simple array(assoc)
echo '<p>'.$singleQuote['qid'].'</p>';
echo '<p>'.$singleQuote['quote'].'</p>';
echo '<p>'.$singleQuote['author'].'</p>';
$allQuotes = $test->get();//2d array
foreach($allQuotes as $quote){
    echo '<p>'.$quote['qid'].'</p>';
    echo '<p>'.$quote['quote'].'</p>';
    echo '<p>'.$quote['author'].'</p>'; 
}
//testing delete
$test->delete(3);