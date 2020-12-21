<?php
class MDashboard extends CI_Model
{
    public function jumlah_data($table)
    {
        return $this->db->get($table)->num_rows();
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
}
