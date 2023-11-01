<?php

class kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->model('mahasiswa_m', 'mhs');
        $this->load->library('form_validation');
    }

    public function set_rules()
    {
        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
    }

    public function tambahOrganisasi($nim)
    {
        $this->set_rules();

        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/organisasi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/organisasi/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;

                $tambah = array(
                    "nim" => $nim,
                    "kategori" => "organisasi",
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true),
                    "file_sertifikat" => $file_name,
                    "path_sertifikat" => $file_path
                );
                $this->kgt->tambahKegiatan($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/organisasi/' . $nim);
            }
        }
    }

    public function tambahPrestasi($nim)
    {
        $this->set_rules();

        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/prestasi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/prestasi/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;

                $tambah = array(
                    "nim" => $nim,
                    "kategori" => "prestasi",
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true),
                    "file_sertifikat" => $file_name,
                    "path_sertifikat" => $file_path
                );
                $this->kgt->tambahKegiatan($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/prestasi/' . $nim);
            }
        }
    }

    public function tambahPertemuan($nim)
    {
        $this->set_rules();

        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pertemuan/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pertemuan/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
                $tambah = array(
                    "nim" => $nim,
                    "kategori" => "pertemuan",
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true),
                    "file_sertifikat" => $file_name,
                    "path_sertifikat" => $file_path
                );
                $this->kgt->tambahKegiatan($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/pertemuan/' . $nim);
            }
        }
    }

    public function tambahPelatihan($nim)
    {
        $this->set_rules();

        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Pelatihan/Kursus';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pelatihan/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pelatihan/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
                $tambah = array(
                    "nim" => $nim,
                    "kategori" => "pelatihan",
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true),
                    "file_sertifikat" => $file_name,
                    "path_sertifikat" => $file_path
                );
                $this->kgt->tambahKegiatan($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/pelatihan/' . $nim);
            }
        }
    }

    public function tambahPenunjang($nim)
    {
        $this->set_rules();

        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        $data['title'] = 'Daftar Keikutsertaan';
        $data['sub_title'] = 'Data Keikutsertaan';
        $data['deskripsi'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/penunjang/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/penunjang/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;

                $tambah = array(
                    "nim" => $nim,
                    "kategori" => "penunjang",
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true),
                    "file_sertifikat" => $file_name,
                    "path_sertifikat" => $file_path
                );
                $this->kgt->tambahKegiatan($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/penunjang/' . $nim);
            }
        }
    }

    public function editKegiatanAdmin($id, $kategori)
    {
        $data['user'] = get_user();
        if ($kategori == 'organisasi') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa';
        } elseif ($kategori == 'prestasi') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';
        } elseif ($kategori == 'pertemuan') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';
        } elseif ($kategori == 'pelatihan') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Pelatihan/Kursus';
        } elseif ($kategori == 'penunjang') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';
        }
        $data['data'] = $this->kgt->getKegiatanByIdAdmin($id);
        $this->form_validation->set_rules('validasi', 'Validasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/organisasi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $validasi = $this->input->post('validasi', true);
            $edit_data = array(
                "validasi" => $validasi,
            );

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/' . $kategori);
        }
    }

    public function editKegiatan($id, $kategori, $nim)
    {
        $data['user'] = get_user();
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($nim);
        if ($kategori == 'organisasi') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Organisasi/Kepanitiaan/Pembinaan Mahasiswa';
        } elseif ($kategori == 'prestasi') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Lomba/Prestasi Mahasiswa/Beasiswa';
        } elseif ($kategori == 'pertemuan') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Pertemuan Ilmiah/Seminar/Kuliah Umum/Lokakarya';
        } elseif ($kategori == 'pelatihan') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Pelatihan/Kursus';
        } elseif ($kategori == 'penunjang') {
            $data['title'] = 'Daftar Keikutsertaan';
            $data['sub_title'] = 'Data Keikutsertaan';
            $data['deskripsi'] = 'Kegiatan yang Menunjang Prestasi/Kompetensi/Pengalaman Kerja';
        }
        $data['data'] = $this->kgt->getKegiatanById($id);
        $this->set_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/organisasi/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/SERTIFIKAT/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_sertifikat')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/organisasi/edit', $error);
                $this->load->view('temp_pengunjung/footer');
            } else {
                $upload_data = $this->upload->data();
                $new_file_name = $upload_data['file_name'];
                $new_file_path = $config['upload_path'] . $new_file_name;
            }
            $kegiatan = $this->input->post('kegiatan', true);
            $peran = $this->input->post('peran', true);
            $no_sertifikat = $this->input->post('nomor', true);
            $penyelenggara = $this->input->post('penyelenggara', true);
            $periode = $this->input->post('periode', true);
            $id = $this->input->post('id_kegiatan');

            if (!empty($new_file_name)) {
                $edit_data = array(
                    "kegiatan" => $kegiatan,
                    "peran" => $peran,
                    "no_sertifikat" => $no_sertifikat,
                    "penyelenggara" => $penyelenggara,
                    "periode" => $periode,
                    "file_sertifikat" => $new_file_name,
                    "path_sertifikat" => $new_file_path
                );
                unlink($data['data']->path_sertifikat);
            } else {
                $edit_data = array(
                    "kegiatan" => $kegiatan,
                    "peran" => $peran,
                    "no_sertifikat" => $no_sertifikat,
                    "penyelenggara" => $penyelenggara,
                    "periode" => $periode
                );
            }
            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/' . $kategori . '/' . $nim);
        }
    }

    public function hapusKegiatanAdmin($id, $kategori)
    {
        $this->kgt->hapusKegiatan($id, $kategori);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/' . $kategori);
    }

    public function hapusKegiatan($id, $kategori, $nim)
    {
        $this->kgt->hapusKegiatan($id, $kategori);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/' . $kategori . '/' . $nim);
    }
}
