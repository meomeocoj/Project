<?php
class Hotel {
    private $db;

    public function __construct(){
        $this->db = new Database;
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