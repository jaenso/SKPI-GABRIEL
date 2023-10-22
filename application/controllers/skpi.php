<?php

class skpi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->library('form_validation');
    }

    public function tambah1()
    {
        $this->form_validation->set_rules('smt', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('sks_beban', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Pengajuan SKPI';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_skpi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "semester" => $this->input->post('smt', true),
                "jml_matkul" => $this->input->post('jml_matkul', true),
                "jml_sks_program" => $this->input->post('sks_beban', true),
                "jml_sks_lulus" => $this->input->post('sks_lulus', true)
            );
            $this->akm->tambahNilai($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/pengaju_nilai');
        }
    }

    public function tambah2()
    {
        $this->form_validation->set_rules('kegmbkm', 'Kegiatan MBKM', 'required');
        $this->form_validation->set_rules('ketmbkm', 'Keterangan MBKM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Kegiatan Merdeka Belajar Kampus Merdeka';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_mbkm/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "kegiatan" => $this->input->post('kegmbkm', true),
                "keterangan" => $this->input->post('ketmbkm', true),
            );
            $this->akm->tambahMBKM($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/pengaju_mbkm');
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
        $this->akm->hapusNilai($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/pengaju_nilai');
    }
}
