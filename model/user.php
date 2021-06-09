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
        $this->db->query("INSERT INTO user (name, email, password, role) VALUES (:name,:email,:password,:role)");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);

        if ($this->db->executeStmt()) {
            return true;
        } else {
            return false;
        }
    }
    public function verify($user)
    {
        $this->db->query("SELECT * FROM user WHERE email = :email");
        $this->db->bind(':email', $user['email']);
        //$this->db->bind(':password', $user['password']);
        $result = $this->db->result();
        password_verify($user['password'], $result->password);

        return $result;
    }
}
