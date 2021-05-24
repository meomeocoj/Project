<?php
class Hotel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function insertUser(){
        $this->db->query("INSERT INTO user (fullname, age, username, password, gender) VALUES(?,?,?,?,?) ");
    }
    //get All hotels
    public function getAllHotels(){
        $this->db->query("SELECT * FROM hotel");
        $results = $this->db->resultSet();
        return $results;
    }
    public function getDetailHotel(){
        
    }

}
?>