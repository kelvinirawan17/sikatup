<?php
class MProduk extends CI_Model
{
    public function jumlah_data($table)
    {
        $result = $this->db->get_where($table, array(
            'produk_status ' => 1
        ))->num_rows();
        return $result;
    }
    public function get($where, $limit, $offset)
    {
        $this->db->join('pengurus', 'Pengurus_idPengurus = idPengurus');
        return $this->db->get_where('produk', $where, $limit, $offset)->result();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('produk.*, pengurus.*');
        $this->db->from('produk');
        $this->db->join('pengurus', 'Pengurus_idPengurus = idPengurus');
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('deskripsi_produk', $keyword);
        $query = $this->db->get()->result();
        return $query;
    }
}
