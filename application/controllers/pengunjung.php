<?php

class pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->model('kegiatan_m', 'kgt');
    }

    public function index()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/dashboard');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_nilai()
    {
        $data['data'] = $this->akm->getNilai();
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pengajuan Nilai ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_nilai/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_mbkm()
    {
        $data['data'] = $this->akm->getMBKM();
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Merdeka Belajar Kampus Merdeka ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_mbkm/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function rekap_nilai()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Rekapitulasi Nilai ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/rekap_nilai/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function organisasi()
    {
        $kategori = 'organisasi';
        $data['data'] = $this->kgt->getKegiatan($kategori);
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/organisasi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function prestasi()
    {
        $kategori = 'prestasi';
        $data['data'] = $this->kgt->getKegiatan($kategori);
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Lomba/Prestasi Mahasiswa/Beasiswa ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/prestasi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pertemuan()
    {
        $kategori = 'pertemuan';
        $data['data'] = $this->kgt->getKegiatan($kategori);
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pertemuan/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pelatihan()
    {
        $kategori = 'pelatihan';
        $data['data'] = $this->kgt->getKegiatan($kategori);
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pelatihan/Kursus ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pelatihan/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function penunjang()
    {
        $kategori = 'penunjang';
        $data['data'] = $this->kgt->getKegiatan($kategori);
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja ';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/penunjang/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function lock_menu()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Master Data Mahasiswa';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/lock_menu/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_skpi()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Pengajuan SKPI';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_skpi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function cetak_skpi()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Cetak SKPI';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/cetak_skpi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function tanbah()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah SKPI';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_skpi/tambah');
        $this->load->view('temp_pengunjung/footer');
    }
}
