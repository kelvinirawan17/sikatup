<?php
defined('BASEPATH') or exit('No direct Script Access Allowed');
class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('MPengumuman'));
    }

    public function index()
    {
        $this->load->database();
        $jumlah_data             = $this->MPengumuman->jumlah_data('kegiatan');
        $this->load->library('pagination');
        $config['base_url']     = site_url('pengumuman/index');
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
        $data['total'] = $jumlah_data;
        $data['total_keg'] = $this->MPengumuman->jumlah_data_kategori('kegiatan');
        $data['total_peng'] = $this->MPengumuman->jumlah_data_pengumuman('kegiatan');
        $data['kegiatan'] = $this->MPengumuman->get(array('kegiatan_status' => 1), $config['per_page'], $from);
        $data['kegiatan_baru'] = $this->MPengumuman->get(array('kegiatan_status' => 1), 5, 0);
        $data["page_title"] = "Pengumuman";
        $this->load->view('v_header', $data);
        $this->load->view('v_pengumuman', $data);
        $this->load->view('v_footer');
    }

    public function view($url_slug)
    {
        $data['total'] = $this->MPengumuman->jumlah_data('kegiatan');
        $data['total_keg'] = $this->MPengumuman->jumlah_data_kategori('kegiatan');
        $data['total_peng'] = $this->MPengumuman->jumlah_data_pengumuman('kegiatan');
        $data["page_title"] = "Pengumuman";
        $data['kegiatan'] = $this->MPengumuman->get(
            array('kegiatan_status' => 1, 'slug' => trim($url_slug)),
            1,
            0
        );
        $data['kegiatan_baru'] = $this->MPengumuman->get(array('kegiatan_status' => 1), 5, 0);
        $this->load->view('v_header', $data);
        $this->load->view('v_viewkegiatan', $data);
        $this->load->view('v_footer');
    }

    public function kategori($idkateg)
    {
        $this->load->database();
        if ($idkateg == 0) {
            $jumlah_data             = $this->MPengumuman->jumlah_data_kategori('kegiatan');
        } else {
            $jumlah_data             = $this->MPengumuman->jumlah_data_pengumuman('kegiatan');
        }
        $this->load->library('pagination');
        $config['base_url']     = site_url('pengumuman/index');
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
        $data['total'] = $this->MPengumuman->jumlah_data('kegiatan');
        $data['total_keg'] = $this->MPengumuman->jumlah_data_kategori('kegiatan');
        $data['total_peng'] = $this->MPengumuman->jumlah_data_pengumuman('kegiatan');
        $data['kegiatan'] = $this->MPengumuman->get(array('kegiatan_status' => 1, 'kategori' => $idkateg), $config['per_page'], $from);
        $data["page_title"] = "Pengumuman";
        $data['kegiatan_baru'] = $this->MPengumuman->get(array('kegiatan_status' => 1), 5, 0);
        $this->load->view('v_header', $data);
        $this->load->view('v_pengumuman', $data);
        $this->load->view('v_footer');
    }

    public function search()
    {
        $keyword = strtolower($this->input->post('keyword'));
        $data['total'] = $this->MPengumuman->jumlah_data('kegiatan');
        $data['total_keg'] = $this->MPengumuman->jumlah_data_kategori('kegiatan');
        $data['total_peng'] = $this->MPengumuman->jumlah_data_pengumuman('kegiatan');
        $data["page_title"] = "Pengumuman";
        $data['kegiatan'] = $this->MPengumuman->get_keyword($keyword);
        $data['kegiatan_baru'] = $this->MPengumuman->get(array('kegiatan_status' => 1), 5, 0);
        $this->load->view('v_header', $data);
        $this->load->view('v_pengumuman', $data);
        $this->load->view('v_footer');
    }
}
