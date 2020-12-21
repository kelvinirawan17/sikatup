<?php
defined('BASEPATH') or exit('No direct Script Access Allowed');
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('MProduk'));
    }

    public function index()
    {
        $this->load->database();
        $jumlah_data             = $this->MProduk->jumlah_data('produk');
        $this->load->library('pagination');
        $config['base_url']     = site_url('produk/index');
        $config['total_rows']     = $jumlah_data;
        $config['per_page']        = 10;
        $from                     = $this->uri->segment(3);

        $config['first_link']    = 'First';
        $config['last_link']    = 'Last';
        $config['next_link']    = 'Next';
        $config['prev_link']    = 'Prev';
        $config['full_tag_open'] = ' <nav class="blog-pagination justify-content-center d-flex"> <ul class="pagination">';
        $config['full_tag_close'] =    '</ul></nav>';
        $config['num_tag_open']    = '<li class="page-item"><span class="page-link"> ';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link"> ';
        $config['cur_tag_close'] = '</span></li> ';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link"> ';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo</span></span></li> ';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link"> ';
        $config['prev_tagl_close'] = '</span>Next</li> ';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link"> ';
        $config['first_tagl_close'] = '</span></li> ';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link"> ';
        $config['last_tagl_close'] = '</span></li> ';


        $this->pagination->initialize($config);
        $data['produk'] = $this->MProduk->get(array('produk_status' => 1), $config['per_page'], $from);
        $data["page_title"] = "Produk";
        $this->load->view('v_header', $data);
        $this->load->view('v_produk', $data);
        $this->load->view('v_footer');
    }

    public function search()
    {
        $keyword = strtolower($this->input->post('keyword'));
        $data["page_title"] = "Produk";
        $data['produk'] = $this->MProduk->get_keyword($keyword);
        $this->load->view('v_header', $data);
        $this->load->view('v_produk', $data);
        $this->load->view('v_footer');
    }
}
