<?php
class MArtikel extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('kegiatan.*, pengurus.*');
        $this->db->from('kegiatan');
        $this->db->join('pengurus', 'Pengurus_idPengurus = idPengurus');
        $this->db->order_by('create', 'desc');
        $query = $this->db->get()->result();
        return $query;
    }

    public function input_data($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
