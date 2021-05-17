<?php

class Buku_model{
    private $table = 'buku';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllBuku(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataBuku($data){

                $query = "INSERT INTO buku 
                VALUES
                ('', :judul, :pengarang, :penerbit)";

                $this->db->query($query);
                $this->db->bind('judul', $data['judul']);
                $this->db->bind('pengarang', $data['pengarang']);
                $this->db->bind('penerbit', $data['penerbit']);
                $this->db->execute();

                return $this->db->hitungBaris();
    }
}