<?php

class kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->library('form_validation');
    }

    public function tambahOrganisasi()
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

    public function editOrganisasi($id)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Berita';
        $data['data'] = $this->kgt->getKegiatanById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/organisasi/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $id = $this->input->post('id_kegiatan');
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            } else {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            }

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/organisasi');
        }
    }

    public function tambahPrestasi()
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

    public function editPrestasi($id)
    {
        $data['user'] = get_user();
        $data['title'] = '';
        $data['data'] = $this->kgt->getKegiatanById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/prestasi/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $id = $this->input->post('id_kegiatan');
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            } else {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            }

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/prestasi');
        }
    }

    public function tambahPertemuan()
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

    public function editPertemuan($id)
    {
        $data['user'] = get_user();
        $data['title'] = '';
        $data['data'] = $this->kgt->getKegiatanById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pertemuan/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $id = $this->input->post('id_kegiatan');
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            } else {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            }

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pertemuan');
        }
    }

    public function tambahPelatihan()
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

    public function editPelatihan($id)
    {
        $data['user'] = get_user();
        $data['title'] = '';
        $data['data'] = $this->kgt->getKegiatanById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pelatihan/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $id = $this->input->post('id_kegiatan');
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            } else {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            }

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pelatihan');
        }
    }

    public function tambahPenunjang()
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

    public function editPenunjang($id)
    {
        $data['user'] = get_user();
        $data['title'] = '';
        $data['data'] = $this->kgt->getKegiatanById($id);

        $this->form_validation->set_rules('kegiatan', 'Kegiatan', 'required');
        $this->form_validation->set_rules('peran', 'Peran', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Sertifikat', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pelatihan/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $id = $this->input->post('id_kegiatan');
            if (!empty($gambar_baru)) {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            } else {
                $edit_data = array(
                    "kegiatan" => $this->input->post('kegiatan', true),
                    "peran" => $this->input->post('peran', true),
                    "no_sertifikat" => $this->input->post('nomor', true),
                    "penyelenggara" => $this->input->post('penyelenggara', true),
                    "periode" => $this->input->post('periode', true)
                );
            }

            $this->kgt->ubahKegiatan($id, $edit_data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/penunjang');
        }
    }

    public function hapusKegiatan($id, $kategori)
    {
        if (
            $kategori == 'organisasi' ||
            $kategori == 'pelatihan' ||
            $kategori == 'penunjang' ||
            $kategori == 'prestasi' ||
            $kategori == 'pertemuan'
        ) {
            $this->kgt->hapusKegiatan($id, $kategori);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('pengunjung/' . $kategori);
        }
    }
}
