<?php

class database{
    
    protected $connection;

    public function __construct(){
        /* este try catch não está a funcionar correctamente */
        try{
            $this->connection = new mysqli(SERVER, DB_USER, DB_PWD, BD);
        }catch(mysqli_sql_exception $e){
            echo "<pre>".$e."</pre>";
        }
    }

    public function qDb($query){
        $query = $this->connection->query($query)->fetch_assoc();

        return $query;
    }
}