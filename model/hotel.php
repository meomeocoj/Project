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
        $this->db->query("SELECT DISTINCT name, address FROM hotel WHERE name LIKE CONCAT('%', :data, '%') ORDER BY id LIMIT 0,5");
        $this->db->bind(':data', $data);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getHotelById($id, $page) {
        $this->db->query("SELECT DISTINCT hotel.id, hotel.name, hotel.price FROM `hotel`, `street`, `district`, `province` WHERE province.id = :id AND province.id = district.province_id AND district.id = street.district_id AND street.id = hotel.street_id LIMIT :offset, 20");
        $this->db->bind(':id', $id);
        $this->db->bind(':offset', ($page-1)*20);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getProvinceById($id) {
        $this->db->query("SELECT name FROM `province` WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }

    public function getNumberOfHotelById($id) {
        $this->db->query("SELECT COUNT(hotel.id) as 'noOfHotel' FROM `hotel`, `street`, `district`, `province` WHERE province.id = :id AND province.id = district.province_id AND district.id = street.district_id AND street.id = hotel.street_id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }
    public function getHotelInfoByHotelId($id) {
        $this->db->query("SELECT hotel.*, province.name AS 'province' FROM `hotel`, `street`, `district`, `province` WHERE hotel.id = :id AND province.id = district.province_id AND district.id = street.district_id AND street.id = hotel.street_id");
        $this->db->bind(':id', $id);
        $result = $this->db->result();
        return $result;
    }

    public function getAllDistrict() {
        $this->db->query("SELECT name FROM `district`");
        $results = $this->db->resultSet();
        return $results;
    }

    public function getAllProvince() {
        $this->db->query("SELECT name FROM `province`");
        $results = $this->db->resultSet();
        return $results;
    }

    //delete hotel by id
    public function deleteHotel($id) {
        $this->db->query("DELETE FROM `hotel` WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }
    // max current id of hotel
    private function maxIdHotel() {
        $this->db->query("SELECT max(id) AS 'id' FROM `hotel`");
        $result = $this->db->result();
        return $result;
    }

    private function validateHotel($data) {

    }
    // k truyền vào id, id sẽ = max id + 1
    public function addHotel($data)
    {
        $this->db->query("INSERT INTO `hotel` (id, name, address, latitude, longtitude, star, price, rank_score, manager_id, street_id) VALUES (:id, :name, :address, :latitude, :longtitude, :star, :price, :rank_score, :manager_id, :street_id)");
        $this->db->bind(':id', $this->maxIdHotel()->id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':latitude', $data['latitude']);
        $this->db->bind(':longtitude', $data['longtitude']);
        $this->db->bind(':star', $data['star']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':rank_score', $data['rank_score']);
        $this->db->bind(':manager_id', $data['manager_id']);
        $this->db->bind(':street_id', $data['street_id']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateHotel($data) {
        $this->db->query("UPDATE `hotel` SET name = :name, address = :address, latitude = :latitude, longtitude = :longtitude, star = :star, price = :price, rank_score = :rank_score, manager_id = :manager_id, street_id = :street_id WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':latitude', $data['latitude']);
        $this->db->bind(':longtitude', $data['longtitude']);
        $this->db->bind(':star', $data['star']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':rank_score', $data['rank_score']);
        $this->db->bind(':manager_id', $data['manager_id']);
        $this->db->bind(':street_id', $data['street_id']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }
}
