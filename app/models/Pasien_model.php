<?php

class Pasien_model
{
    private $table = 'pasien';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPasien()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPasienById($id_pasien)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pasien=:id_pasien');
        $this->db->bind('id_pasien', $id_pasien);
        return $this->db->single();
    }

    public function tambahDataPasien($data)
    {
        $query = "INSERT INTO pasien
                    VALUES
                  ('', :nama, :umur, :alamat)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPasien($id_pasien)
    {
        $query = "DELETE FROM pasien WHERE id_pasien = :id_pasien";
        $this->db->query($query);
        $this->db->bind('id_pasien', $id_pasien);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
