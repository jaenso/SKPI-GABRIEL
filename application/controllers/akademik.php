<?php

class akademik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->library('form_validation');
    }

    public function inputNilai($id)
    {
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Input Nilai';
        $data['data'] = $this->akm->getKHSById($id);
        $this->form_validation->set_rules('smt', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('sks_beban', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_nilai/tambah_nilai', $data);
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

    public function editNilai($id)
    {
        $data['user'] = get_user();
        $data['title'] = 'Ubah Berita';
        $data['data'] = $this->akm->getKHSById($id);
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Input Nilai';

        $this->form_validation->set_rules('smt', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('sks_beban', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_nilai/edit_nilai', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $id = $this->input->post('id_nilai', true);
            $edit = array(
                "id_user" => $this->input->post('id_user', true),
                "semester" => $this->input->post('smt', true),
                "jml_matkul" => $this->input->post('jml_matkul', true),
                "jml_sks_program" => $this->input->post('sks_beban', true),
                "jml_sks_lulus" => $this->input->post('sks_lulus', true)
            );
            $this->akm->EditNilai($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_nilai');
        }
    }

    public function tambahKHS()
    {
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Input Nilai';
        $this->form_validation->set_rules('smt', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('sks_beban', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_nilai/tambah_khs');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $tambah = array(
                "semester" => $this->input->post('smt', true),
                "jml_matkul" => $this->input->post('jml_matkul', true),
                "jml_sks_program" => $this->input->post('sks_beban', true),
                "jml_sks_lulus" => $this->input->post('sks_lulus', true)
            );
            $this->akm->tambahKHS($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengunjung/pengaju_nilai');
        }
    }

    public function editKHS($id)
    {
        $data['data'] = $this->akm->getKHSById($id);
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Input Nilai';

        $this->form_validation->set_rules('smt', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('sks_beban', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_nilai/edit_khs', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $id = $this->input->post('id_nilai', true);
            $edit = array(
                "id_user" => $this->input->post('id_user', true),
                "semester" => $this->input->post('smt', true),
                "jml_matkul" => $this->input->post('jml_matkul', true),
                "jml_sks_program" => $this->input->post('sks_beban', true),
                "jml_sks_lulus" => $this->input->post('sks_lulus', true)
            );
            $this->akm->EditKHS($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_nilai');
        }
    }

    public function hapusKHS($id)
    {
        $this->akm->hapusKHS($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/pengaju_nilai');
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

    public function edit2($id)
    {
        $data['data'] = $this->akm->getMBKMById($id);
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Input MBKM';

        $this->form_validation->set_rules('kegmbkm', 'Kegiatan MBKM', 'required');
        $this->form_validation->set_rules('ketmbkm', 'Keterangan MBKM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_mbkm/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $id = $this->input->post('id_mbkm', true);
            $edit = array(
                "id_user" => $this->input->post('id_user', true),
                "kegiatan" => $this->input->post('kegmbkm', true),
                "keterangan" => $this->input->post('ketmbkm', true),
            );
            $this->akm->ubahMBKM($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_mbkm');
        }
    }
}
