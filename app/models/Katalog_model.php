<?php

class Katalog_model {
    private $table = 'sayur';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

public function getAllKatalog(){
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
}
public function getDatabyid($id){
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE sayurID = :id');
    $this->db->bind('id',$id);
    return $this->db->single();
}
public function getsayur($nama){
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama = :nama');
    $this->db->bind('nama',$nama);
    return $this->db->resultSet();
}
public function tambahDataKatalog($data)
{
    $query = "INSERT INTO sayur VALUES (:id, :nama, :harga, :stok)";
    $this->db->query($query);
    $this->db->bind('id',null);
    $this->db->bind('nama',$data['nama']);
    $this->db->bind('harga',$data['harga']);
    $this->db->bind('stok',$data['stok']);

    $this->db->execute();

    return $this->db->rowCount();

}
public function ubahDataKatalog($data)
{
    $query = "UPDATE sayur SET harga = :harga, stok = :stok WHERE nama = :nama";
    $this->db->query($query);
    $this->db->bind('nama',$data['nama']);
    $this->db->bind('harga',$data['harga']);
    $this->db->bind('stok',$data['stok']);

    $this->db->execute();

    return $this->db->rowCount();

}


public function hapusDataKatalog($id){
    $this->db->query('DELETE FROM sayur WHERE sayurID = :id');
    $this->db->bind('id',$id);
    
    $this->db->execute();

    return $this->db->rowCount();
}

}