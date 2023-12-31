<?php

class pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->model('mahasiswa_m', 'mhs');
        $this->load->model('skpi_m', 'skpi');
    }

    public function index($username)
    {
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Dashboard Utama';
        $data['sub_title'] = 'Dashboard';
        $data['deskripsi'] = 'Data Mahasiswa';

        $data['organisasi'] = $this->kgt->countKegiatan('organisasi', $username);
        $data['prestasi'] = $this->kgt->countKegiatan('prestasi', $username);
        $data['pertemuan'] = $this->kgt->countKegiatan('pertemuan', $username);
        $data['pelatihan'] = $this->kgt->countKegiatan('pelatihan', $username);
        $data['penunjang'] = $this->kgt->countKegiatan('penunjang', $username);

        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/dashboard', $data);
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_nilai($username)
    {
        $data['data'] = $this->akm->getKHS($username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Data Pengajuan Nilai';
        $data['sub_title'] = 'Data Pengajuan Input Nilai';
        $data['deskripsi'] = 'Pengajuan Input Nilai';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_nilai/index', $data);
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_mbkm($username)
    {
        $data['data'] = $this->akm->getMBKM($username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Kegiatan Merdeka Belajar Kampus Merdeka';
        $data['sub_title'] = 'MBKM';
        $data['deskripsi'] = 'Merdeka Belajar Kampus Merdeka';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_mbkm/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function organisasi($username)
    {
        $kategori = 'organisasi';
        $data['data'] = $this->kgt->getKegiatan($kategori, $username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/organisasi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function prestasi($username)
    {
        $kategori = 'prestasi';
        $data['data'] = $this->kgt->getKegiatan($kategori, $username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/prestasi/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pertemuan($username)
    {
        $kategori = 'pertemuan';
        $data['data'] = $this->kgt->getKegiatan($kategori, $username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pertemuan/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function pelatihan($username)
    {
        $kategori = 'pelatihan';
        $data['data'] = $this->kgt->getKegiatan($kategori, $username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pelatihan/Kursus';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pelatihan/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function penunjang($username)
    {
        $kategori = 'penunjang';
        $data['data'] = $this->kgt->getKegiatan($kategori, $username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/penunjang/index');
        $this->load->view('temp_pengunjung/footer');
    }

    public function lock_menu($username)
    {
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Master Data Mahasiswa';
        $data['sub_title'] = 'Dashboard';
        $data['deskripsi'] = 'Merdeka Belajar Kampus Merdeka';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/lock_menu/index', $data);
        $this->load->view('temp_pengunjung/footer');
    }

    public function pengaju_skpi($username)
    {
        $data['data'] = $this->skpi->getSKPI($username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/pengaju_skpi/index', $data);
        $this->load->view('temp_pengunjung/footer');
    }

    public function cetak_skpi($username)
    {
        $data['data'] = $this->skpi->getSKPI($username);
        is_logged_out();
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $this->load->view('temp_pengunjung/header', $data);
        $this->load->view('temp_pengunjung/sidebar', $data);
        $this->load->view('pengunjung/cetak_skpi/index', $data);
        $this->load->view('temp_pengunjung/footer');
    }
}
