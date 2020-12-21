<?php

class MPengurus extends CI_Model
{
    public function bph()
    {
        $query = $this->db->query('SELECT pengurus.*, jabatan.* FROM pengurus INNER JOIN jabatan ON pengurus.Jabatan_idJabatan = jabatan.idJabatan  WHERE Jabatan_idJabatan != 7');
        return $query->result();
    }
    public function staff()
    {
        $query = $this->db->query('SELECT pengurus.*, jabatan.* FROM pengurus INNER JOIN jabatan ON pengurus.Jabatan_idJabatan = jabatan.idJabatan  WHERE Jabatan_idJabatan = 7');
        return $query->result();
    }
}
