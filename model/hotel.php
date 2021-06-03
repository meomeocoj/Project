<?php
class Hotel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    //get All hotels
    public function getAllHotels()
    {
        $this->db->query("SELECT * FROM hotel");
        $results = $this->db->resultSet();
        return $results;
    }
    public function getDetailHotel()
    {

    }
    public function getSearchResult($data)
    {
        $this->db->query("SELECT DISTINCT address FROM hotel WHERE name LIKE '%$data%' ORDER BY id LIMIT 0,5");
        $results = $this->db->resultSet();
        return $results;
    }
}
