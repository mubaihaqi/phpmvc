<?php

class Mahasiswa_model extends Controller
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // public function getMahasiswaById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        if (!$this->db->execute()) {
            die("Query gagal dieksekusi!");
        }

        $result = $this->db->single();
        if (!$result) {
            die("Data tidak ditemukan!");
        }

        return $result;
    }
}
