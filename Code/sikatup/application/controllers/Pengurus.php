<?php
defined('BASEPATH') or exit('No direct Script Access Allowed');
class Pengurus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('MPengurus'));
    }

    public function index()
    {
        $data["bph"] = $this->MPengurus->bph();
        $data["staff"] = $this->MPengurus->staff();
        $data["page_title"] = "Pengurus";
        $this->load->view('v_header', $data);
        $this->load->view('v_pengurus');
        $this->load->view('v_footer');
    }
}
