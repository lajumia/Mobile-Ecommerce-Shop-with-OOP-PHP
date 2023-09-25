<?php

class Product{

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function fetch_product(){
        $sql = 'SELECT * FROM product';
        $query = $this->db->dbCon->query($sql); //return a mysql object
        return $query;
    }

}