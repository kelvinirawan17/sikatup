<?php
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('MDashboard'));
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }
    public function index()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data['totalPengurus'] = $this->MDashboard->jumlah_data('pengurus');
        $data['totalProduk'] = $this->MDashboard->jumlah_data('produk');
        $data['totalKegiatan'] = $this->MDashboard->jumlah_data_kategori('kegiatan');
        $data['totalPengumuman'] = $this->MDashboard->jumlah_data_pengumuman('kegiatan');

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('templates/footer');
    }
}
