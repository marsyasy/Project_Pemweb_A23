<?php

class Login_model {
    private $table = 'account';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

public function getadmin(){
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
}
}