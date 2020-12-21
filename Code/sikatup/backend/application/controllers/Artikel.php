<?php
class Artikel extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model(array('MArtikel'));
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data['artikel']         = $this->MArtikel->tampil_data();
        $data['frontend']      = 'http://localhost/sikatup/';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_artikel', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_artikeltambah', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $data = [
            'judul_kegiatan'        => $this->input->post('judul'),
            'slug'            => $this->input->post('slug'),
            'kategori'        => $this->input->post('kategori'),
            'konten'        => $this->input->post('konten'),
            'thumbnail'        => 'assets/img/upload/produk/' . $this->upload(),
            'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
            'kegiatan_status'        => $this->input->post('status'),
            'create'        => date('Y-m-d H:i:s'),
        ];

        $this->MArtikel->input_data($data, 'kegiatan');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultSuccessArtikel"></button></div>');
        redirect('artikel');
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
        $where = array('idKegiatan' => $id);
        $this->MArtikel->hapus_data($where, 'kegiatan');
        $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultErrorArtikel"></button></div>');
        redirect('artikel');
    }

    public function edit($id)
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('idKegiatan' => $id);
        $data['artikel'] = $this->MArtikel->edit_data($where, 'kegiatan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_artikeledit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data['pengurus'] = $this->db->get_where('pengurus', ['username' => $this->session->userdata('username')])->row_array();
        $id = $this->input->post('id');
        if ($this->upload() == false) {
            $data = array(
                'judul_kegiatan'        => $this->input->post('judul'),
                'slug'            => $this->input->post('slug'),
                'kategori'        => $this->input->post('kategori'),
                'konten'        => $this->input->post('konten'),
                'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
                'kegiatan_status'        => $this->input->post('status'),
                'update'        => date('Y-m-d H:i:s'),
            );
            $where = array(
                'idKegiatan' => $id
            );

            $this->MArtikel->update_data($where, $data, 'kegiatan');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoArtikel"></button></div>');
            redirect('artikel');
        } else {
            $data = array(
                'judul_kegiatan'        => $this->input->post('judul'),
                'slug'            => $this->input->post('slug'),
                'kategori'        => $this->input->post('kategori'),
                'konten'        => $this->input->post('konten'),
                'thumbnail'        => 'assets/img/upload/produk/' . $this->upload(),
                'Pengurus_idPengurus'        => $data['pengurus']['idPengurus'],
                'kegiatan_status'        => $this->input->post('status'),
                'update'        => date('Y-m-d H:i:s'),
            );
            $where = array(
                'idKegiatan' => $id
            );

            $this->MArtikel->update_data($where, $data, 'kegiatan');
            $this->session->set_flashdata('message', '<div id="removeBtn"><button id="klikAuto" onclick="removeElement()" class="toastrDefaultInfoArtikel"></button></div>');
            redirect('artikel');
        }
    }
}
