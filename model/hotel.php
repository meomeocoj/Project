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
        $this->db->query("SELECT DISTINCT name, address FROM hotel WHERE name LIKE CONCAT('%', :data, '%') ORDER BY id LIMIT 0,5");
        $this->db->bind(':data', $data);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getHotelById($id, $page) {
        $this->db->query("SELECT DISTINCT url.hotel_id, hotel.name, MAX(url.min_price) AS 'price' FROM `hotel`, `url` WHERE hotel.province_id = :id AND url.hotel_id = hotel.id GROUP BY url.hotel_id LIMIT :offset, 11");
        $this->db->bind(':id', $id);
        $this->db->bind(':offset', ($page-1)*11);
        $results = $this->db->resultSet();
        return $results;
    }
}
