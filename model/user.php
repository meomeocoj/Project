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
        $this->db->query("INSERT INTO user (fullname, email, password) VALUES (:fullname,:email,:password)");
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }
    public function verify($user)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email AND password = :password");
        $this->db->bind('email', $user['email']);
        $this->db->bind(':password', $user['password']);
        $result = $this->db->result();
    
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}
