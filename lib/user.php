<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insert($data)
    {
        $this->db->query("INSERT INTO user (fullname, email, username, password) VALUES(:fullname,:email,:username,:password)");

        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }

    }
}
