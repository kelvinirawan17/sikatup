<?php
class Produk extends CI_controller
{
    public $frontend = 'http://localhost/sikatup/';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('MProduk'));
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data['produk']         = $this->MProduk->tampil_data();
        $data['frontend']      = 'http://localhost/sikatup/';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_produk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data = [
            'nama_produk'        => $this->input->post('nama'),
            'deskripsi_produk'            => $this->input->post('deskripsi'),
            'harga_produk'        => $this->input->post('harga'),
            'cp_produk'        => $this->input->post('cp'),
            'foto_produk'        => 'assets/img/upload/produk/' . $this->upload(),
            'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
            'produk_status'        => $this->input->post('status'),
        ];

        $this->MProduk->input_data($data, 'produk');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultSuccessProduk"></button></div>');
        redirect('produk');
    }

    function upload()
    {
        $namaFile = $_FILES['foto_produk']['name'];
        $ukuranFile = $_FILES['foto_produk']['size'];
        $error = $_FILES['foto_produk']['error'];
        $tmpName = $_FILES['foto_produk']['tmp_name'];

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
        $where = array('idProduk' => $id);
        $this->MProduk->hapus_data($where, 'produk');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorProduk"></button></div>');
        redirect('produk');
    }

    public function edit($id)
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('idProduk' => $id);
        $data['produk'] = $this->MProduk->edit_data($where, 'produk')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_produkedit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $id = $this->input->post('id');
        if ($this->upload() == false) {
            $data = array(
                'nama_produk'        => $this->input->post('nama'),
                'deskripsi_produk'            => $this->input->post('deskripsi'),
                'harga_produk'        => $this->input->post('harga'),
                'cp_produk'        => $this->input->post('cp'),
                'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
                'produk_status'        => $this->input->post('status'),
            );
            $where = array(
                'idProduk' => $id
            );

            $this->MProduk->update_data($where, $data, 'produk');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoProduk"></button></div>');
            redirect('produk');
        } else {
            $data = array(
                'nama_produk'        => $this->input->post('nama'),
                'deskripsi_produk'            => $this->input->post('deskripsi'),
                'harga_produk'        => $this->input->post('harga'),
                'foto_produk'        => 'assets/img/upload/produk/' . $this->upload(),
                'cp_produk'        => $this->input->post('cp'),
                'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
                'produk_status'        => $this->input->post('status'),
            );
            $where = array(
                'idProduk' => $id
            );

            $this->MProduk->update_data($where, $data, 'produk');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoTiket"></button></div>');
            redirect('produk');
        }
    }
}
