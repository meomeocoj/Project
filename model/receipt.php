<?php


class Receipt
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insert($data)
    {
        $this->db->query("INSERT INTO receipt (email, hotel_id, checkin_date, checkout_date, booking_date, payment) VALUES (:email,:hotel_id, :checkin_date, :checkout_date, :booking_date, :payment)");
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':hotel_id', $data['hotel_id']);
        $this->db->bind(':checkin_date', $data['checkin_date']);
        $this->db->bind(':checkout_date', $data['checkout_date']);
        $this->db->bind(':booking_date', $data['booking_date']);
        $this->db->bind(':payment', $data['payment']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }


}