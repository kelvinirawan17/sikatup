<?php
class Pengurus extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('MPengurus'));
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengurus_list']         = $this->MPengurus->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_pengurus', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultSuccessLogout"></button></div>');
        redirect(base_url('login/wkwkreg'));
    }

    function upload()
    {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        if ($error === 4) {
            echo "<script>
                    alert('Pilih Gambar Terlebih Dahulu')
                </script>";
            return false;
        }
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Format gambar hanya jpg, jpeg, png')
                </script>";
            return false;
        }

        if ($ukuranFile > 2000000) {
            echo "<script>
                    alert('Ukuran maks 2MB')
                </script>";
            return false;
        }

        move_uploaded_file($tmpName, './assets/img/upload/produk/' . $namaFile);
        return $namaFile;
    }

    public function hapus($id)
    {
        $where = array('idPengurus' => $id);
        $this->MPengurus->hapus_data($where, 'pengurus');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorStaff"></button></div>');
        redirect('pengurus');
    }

    public function edit($id)
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('idPengurus' => $id);
        $data['pengurus_edit'] = $this->MPengurus->edit_data($where, 'pengurus')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_pengurusedit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $id = $this->input->post('id');
        if ($this->upload() == false) {
            $data = array(
                'nama_pengurus'        => $this->input->post('nama'),
                'username'            => $this->input->post('username'),
                'alamat'        => $this->input->post('alamat'),
                'no_wa'        => $this->input->post('no_wa'),
                'status'        => $this->input->post('status'),
                'role'        => $this->input->post('role'),
                'diedit'        => date('Y-m-d H:i:s'),
                'Jabatan_idJabatan'        => $this->input->post('jabatan'),
            );
            $where = array(
                'idPengurus' => $id
            );

            $this->MPengurus->update_data($where, $data, 'pengurus');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoStaff"></button></div>');
            redirect('pengurus');
        } else {
            $data = array(
                'nama_pengurus'        => $this->input->post('nama'),
                'username'            => $this->input->post('username'),
                'alamat'        => $this->input->post('alamat'),
                'foto'        => 'assets/img/upload/produk/' . $this->upload(),
                'no_wa'        => $this->input->post('no_wa'),
                'status'        => $this->input->post('status'),
                'role'        => $this->input->post('role'),
                'diedit'        => date('Y-m-d H:i:s'),
                'Jabatan_idJabatan'        => $this->input->post('jabatan'),
            );
            $where = array(
                'idPengurus' => $id
            );

            $this->MPengurus->update_data($where, $data, 'pengurus');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoStaff"></button></div>');
            redirect('pengurus');
        }
    }
}
