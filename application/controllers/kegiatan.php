<?php

class kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->library('form_validation');
    }

    public function tambah1()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Data Keikutsertaan Organisasi/Kepanitiaan/Pembinaan Mahasiswa';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/organisasi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kategori" => "organisasi",
                "kegiatan" => $this->input->post('kegiatan', true),
                "peran" => $this->input->post('peran', true),
                "no_sertifikat" => $this->input->post('nomor', true),
                "penyelenggara" => $this->input->post('penyelenggara', true),
                "periode" => $this->input->post('periode', true)
            );
            $this->kgt->tambahKegiatan($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/organisasi');
        }
    }

    public function tambah2()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/prestasi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kategori" => "prestasi",
                "kegiatan" => $this->input->post('kegiatan', true),
                "peran" => $this->input->post('peran', true),
                "no_sertifikat" => $this->input->post('nomor', true),
                "penyelenggara" => $this->input->post('penyelenggara', true),
                "periode" => $this->input->post('periode', true)
            );
            $this->kgt->tambahKegiatan($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/prestasi');
        }
    }

    public function tambah3()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Keikutsertaan Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pertemuan/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kategori" => "pertemuan",
                "kegiatan" => $this->input->post('kegiatan', true),
                "peran" => $this->input->post('peran', true),
                "no_sertifikat" => $this->input->post('nomor', true),
                "penyelenggara" => $this->input->post('penyelenggara', true),
                "periode" => $this->input->post('periode', true)
            );
            $this->kgt->tambahKegiatan($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/pertemuan');
        }
    }

    public function tambah5()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Keikutsertaan Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/penunjang/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kategori" => "penunjang",
                "kegiatan" => $this->input->post('kegiatan', true),
                "peran" => $this->input->post('peran', true),
                "no_sertifikat" => $this->input->post('nomor', true),
                "penyelenggara" => $this->input->post('penyelenggara', true),
                "periode" => $this->input->post('periode', true)
            );
            $this->kgt->tambahKegiatan($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/penunjang');
        }
    }
    public function tambah4()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Keikutsertaan Pelatihan/Kursus';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pelatihan/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kategori" => "pelatihan",
                "kegiatan" => $this->input->post('kegiatan', true),
                "peran" => $this->input->post('peran', true),
                "no_sertifikat" => $this->input->post('nomor', true),
                "penyelenggara" => $this->input->post('penyelenggara', true),
                "periode" => $this->input->post('periode', true)
            );
            $this->kgt->tambahKegiatan($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/pelatihan');
        }
    }

    public function edit1($id)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Berita';
        $data['konten'] = $this->berita->getBeritaById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/konten/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $gambar_lama = $data['konten']['gambar'];
            $gambar_baru = '';

            if ($_FILES['userfile']['size'] > 0) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('temp_pengunjung/header', $data);
                    $this->load->view('temp_pengunjung/sidebar', $data);
                    $this->load->view('pengunjung/konten/edit', $error);
                    $this->load->view('temp_pengunjung/footer');
                } else {
                    $data = $this->upload->data();
                    $gambar_baru = $data['file_name'];
                }
            }
            $idk = $this->input->post('idk');
            $tanggal = $this->input->post('tanggal', true);
            $judul = $this->input->post('judul', true);
            $isi = $this->input->post('isi', true);
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi,
                    'gambar' => $gambar_baru
                );
                unlink('./uploads/' . $gambar_lama);
            } else {
                $edit_data = array(
                    'tanggal' => $tanggal,
                    'judul' => $judul,
                    'isi' => $isi
                );
            }

            $this->berita->ubahBerita($idk, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_nilai');
        }
    }

    public function hapus1($id)
    {
        $this->kgt->hapusNilai($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/pengaju_nilai');
    }
}
