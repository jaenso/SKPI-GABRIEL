<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->model('mahasiswa_m', 'mhs');
        $this->load->model('skpi_m', 'skpi');
    }

    public function index()
    {
        $data['data'] = $this->mhs->getMahasiswa();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Dashboard Utama';
        $data['sub_title'] = 'Dashboard';
        $data['deskripsi'] = 'Data Mahasiswa';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp_admin/footer');
    }

    public function pengaju_nilai()
    {
        $data['data'] = $this->akm->getKHSAdmin();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Nilai';
        $data['sub_title'] = 'Data Pengajuan Input Nilai';
        $data['deskripsi'] = 'Pengajuan Input Nilai';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengaju_nilai/index');
        $this->load->view('temp_admin/footer');
    }

    public function pengaju_mbkm()
    {
        $data['data'] = $this->akm->getMBKMAdmin();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Kegiatan Merdeka Belajar Kampus Merdeka';
        $data['sub_title'] = 'MBKM';
        $data['deskripsi'] = 'Merdeka Belajar Kampus Merdeka';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengaju_mbkm/index');
        $this->load->view('temp_admin/footer');
    }

    public function organisasi()
    {
        $kategori = 'organisasi';
        $data['data'] = $this->kgt->getKegiatanAdmin($kategori);
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/organisasi/index');
        $this->load->view('temp_admin/footer');
    }

    public function prestasi()
    {
        $kategori = 'prestasi';
        $data['data'] = $this->kgt->getKegiatanAdmin($kategori);
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/prestasi/index');
        $this->load->view('temp_admin/footer');
    }

    public function pertemuan()
    {
        $kategori = 'pertemuan';
        $data['data'] = $this->kgt->getKegiatanAdmin($kategori);
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pertemuan/index');
        $this->load->view('temp_admin/footer');
    }

    public function pelatihan()
    {
        $kategori = 'pelatihan';
        $data['data'] = $this->kgt->getKegiatanAdmin($kategori);
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pelatihan/Kursus';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pelatihan/index');
        $this->load->view('temp_admin/footer');
    }

    public function penunjang()
    {
        $kategori = 'penunjang';
        $data['data'] = $this->kgt->getKegiatanAdmin($kategori);
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/penunjang/index');
        $this->load->view('temp_admin/footer');
    }

    public function pengaju_skpi()
    {
        $data['data'] = $this->skpi->getSKPIAdmin();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengaju_skpi/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function cetak_skpi()
    {
        $data['data'] = $this->skpi->getSKPIAdmin();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/cetak_skpi/index', $data);
        $this->load->view('temp_admin/footer');
    }
}
