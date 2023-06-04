<?php

class Barang_model {

    private $table = 'barang';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBarang() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function uploadDataBarang($data) {
        $query = "INSERT INTO barang VALUES('', :nama_barang, :dekripsi_barang, :tempat, :tanggal, :foto)";
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('dekripsi_barang', $data['dekripsi_barang']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('foto', $data['foto']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
}