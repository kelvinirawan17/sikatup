<?php
defined('BASEPATH') or exit('No direct Script Access Allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["page_title"] = "Home";
        $this->load->view('v_header', $data);
        $this->load->view('v_home');
        $this->load->view('v_footer');
    }
}
