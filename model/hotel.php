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
        $this->db->query("SELECT DISTINCT url.hotel_id, hotel.name, MAX(url.min_price) AS 'price' FROM `hotel`, `url` WHERE hotel.province_id = :id AND url.hotel_id = hotel.id GROUP BY url.hotel_id LIMIT :offset, 20");
        $this->db->bind(':id', $id);
        $this->db->bind(':offset', ($page-1)*11);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getProvinceById($id) {
        $this->db->query("SELECT name FROM `province` WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }
    public function getAllProvince(){
        $this->db->query("SELECT province.name FROM province");
        $results = $this->db->resultSet();
        return $results;
    }

    public function getAllDistrict($name){
        $this->db->query("SELECT district.name FROM district, province WHERE province.id = district.province_id AND province.name = :name");
        $this->db->bind(':name', $name);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getNumberOfHotelById($id) {
        $this->db->query("SELECT COUNT(*) as 'noOfHotel' FROM `hotel` WHERE province_id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }
    public function getHotelInfoById($id) {
        $this->db->query("SELECT hotel.*, MAX(url.min_price) AS 'price', province.name AS 'province' FROM `hotel`, `url`, `province` WHERE hotel.id = :id AND url.hotel_id = hotel.id AND province.id = hotel.province_id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }

    public function getDistrictByName($name) {
        $this->db->query("SELECT id FROM `district` WHERE name = :name");
        $this->db->bind(':name', $name);
        $result = $this->db->result();
        return $result;
    }

    public function getProvinceByName($name) {
        $this->db->query("SELECT id FROM `province` WHERE name = :name");
        $this->db->bind(':name', $name);
        $result = $this->db->result();
        return $result;
    }
    public function getMaxHotelId() {
        $this->db->query("SELECT MAX(id) AS 'ID' FROM `hotel`");
        $result = $this->db->result();
        return $result;
    }
    public function addHotel($data) {
        $id = $this->getMaxHotelId()->ID + 1;
        $this->db->query("INSERT INTO hotel (id, name, address, province_id) VALUES (:id, :name, :address, :province_id)");
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['hotelName']);
        $this->db->bind(':address', $data['addressName']);

        //$this->db->bind(':district_id', $this->getDistrictByName($data['districtName'])->id);
        $this->db->bind(':province_id', $data['provinceId']);
        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }
}
