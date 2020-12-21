<?php

class MPengumuman extends CI_Model
{
    public function jumlah_data($table)
    {
        $result = $this->db->get_where($table, array(
            'kegiatan_status ' => 1
        ))->num_rows();
        return $result;
    }
    public function jumlah_data_pengumuman($table)
    {
        $result = $this->db->get_where($table, array(
            'kegiatan_status ' => 1, 'kategori' => 1
        ))->num_rows();
        return $result;
    }
    public function jumlah_data_kategori($table)
    {
        $result = $this->db->get_where($table, array(
            'kegiatan_status ' => 1, 'kategori' => 0
        ))->num_rows();
        return $result;
    }

    public function get_total()
    {
        $result = $this->db->get_where('kegiatan', array(
            'kegiatan_status ' => 1
        ))->result();
        return $result !== NULL ? count($result) : 0;
    }

    public function get($where, $limit, $offset)
    {
        $this->db->order_by('create', 'desc');
        $this->db->join('pengurus', 'Pengurus_idPengurus = idPengurus');
        return $this->db->get_where('kegiatan', $where, $limit, $offset)->result();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('kegiatan.*, pengurus.*');
        $this->db->from('kegiatan');
        $this->db->join('pengurus', 'Pengurus_idPengurus = idPengurus');
        $this->db->like('judul_kegiatan', $keyword);
        $this->db->or_like('konten', $keyword);
        $query = $this->db->get()->result();
        return $query;
    }
}
