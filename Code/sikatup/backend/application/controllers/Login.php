<?php
defined('BASEPATH') or exit('No direct Script Access Allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('MLogin');
        $this->load->library('form_validation', 'session');
    }

    public function index()
    {
        $this->data["page_title"] = "Login";
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pengurus', ['username' => $username])->row_array();
        if ($user) {
            if ($user['status'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorSalah"></button></div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorBanned"></button></div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorSalah"></button></div>');
            redirect('login');
        }
    }

    public function wkwkreg()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengurus.username]', [
            'is_unique' => 'ID Member yang ada Masukan sudah ada '
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            ['matches' => 'Password tidak Sama !', 'min_lenght' => 'Password terlalu Pendek']
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('v_registrasi');
        } else {
            $data = [
                //nambah html special chars untuk security dan true jga
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama_pengurus' => $this->input->post('nama'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'alamat' => $this->input->post('alamat'),
                'no_wa' => $this->input->post('no_wa'),
                'jabatan_idjabatan' => $this->input->post('jabatan'),
                'role' => $this->input->post('role'),
                'status' => 1,
                'dibuat' => date('Y-m-d H:i:s'),
            ];
            $this->db->insert('pengurus', $data);
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultSuccessReg"></button></div>');
            redirect('login');
        }
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => ($password)
        );
        $cek = $this->m_login->cek_login("pengurus", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard"));
        } else {
            $this->session->set_flashdata('<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorSalah"></button></div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultSuccessLogout"></button></div>');
        redirect(base_url('login'));
    }
}
