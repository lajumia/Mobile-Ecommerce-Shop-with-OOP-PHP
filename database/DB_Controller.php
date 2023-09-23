<?php

class DB_controller{

    private $serverName = "localhost";
    private $userName = "admin";
    private $dbPass = "1234";
    private $dbName = "mobile_shop";

    public $dbCon = null; 


    public function __construct()
    {
        $this->dbCon = new mysqli($this->serverName,$this->userName,$this->dbPass,$this->dbName);
        
        if($this->dbCon->connect_error)
        {
            die("Database Connection Failed !". $this->dbCon->connect_error);
        }
        
    }


    public function __destruct()
    {
        $this->closeDBConnection();
    }

    public function closeDBConnection()
    {
        if($this->dbCon != null){
            $this->dbCon->close();
            $this->dbCon = null;
        }
    }


    

    
}