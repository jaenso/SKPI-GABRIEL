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
        $data['title'] = 'Data Pengajuan Nilai';
        $data['sub_title'] = 'Data Pengajuan Input Nilai';
        $data['deskripsi'] = 'Pengajuan Input Nilai';
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
            $config['upload_path'] = './uploads/AKADEMIK/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_akademik')) {
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
                    "id_user" => $this->input->post('id_user'),
                    "semester" => $this->input->post('smt', true),
                    "jml_matkul" => $this->input->post('jml_matkul', true),
                    "jml_sks_program" => $this->input->post('sks_beban', true),
                    "jml_sks_lulus" => $this->input->post('sks_lulus', true),
                    "file_akademik" => $file_name,
                    "path_akademik" => $file_path
                );
                $this->akm->tambahKHS($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/pengaju_nilai');
            }
        }
    }

    public function editKHS($id)
    {
        $data['data'] = $this->akm->getKHSById($id);
        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan Nilai';
        $data['sub_title'] = 'Data Pengajuan Input Nilai';
        $data['deskripsi'] = 'Pengajuan Input Nilai';
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('jml_matkul', 'Jumlah Mata Kuliah', 'required|numeric');
        $this->form_validation->set_rules('jml_sks_program', 'Jumlah SKS yang Diprogramkan', 'required|numeric');
        $this->form_validation->set_rules('jml_sks_lulus', 'Jumlah SKS yang Lulus', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_nilai/edit_khs', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/AKADEMIK/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_akademik')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pengaju_mbkm/edit');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
            }

            $id_user = $this->input->post('id_user', true);
            $semester = $this->input->post('semester', true);
            $jml_matkul = $this->input->post('jml_matkul', true);
            $jml_sks_program = $this->input->post('jml_sks_program', true);
            $jml_sks_lulus = $this->input->post('jml_sks_lulus', true);
            if (!empty($file_name)) {
                $edit = array(
                    "id_user" => $id_user,
                    "semester" => $semester,
                    "jml_matkul" => $jml_matkul,
                    "jml_sks_program" => $jml_sks_program,
                    "jml_sks_lulus" => $jml_sks_lulus,
                    "file_akademik" => $file_name,
                    "path_akademik" => $file_path
                );
            } else {
                $edit = array(
                    "id_user" => $id_user,
                    "semester" => $semester,
                    "jml_matkul" => $jml_matkul,
                    "jml_sks_program" => $jml_sks_program,
                    "jml_sks_lulus" => $jml_sks_lulus
                );
            }
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

    public function tambahMBKM()
    {
        $data['user'] = get_user();
        $data['title'] = 'Kegiatan Merdeka Belajar Kampus Merdeka';
        $data['sub_title'] = 'MBKM';
        $data['deskripsi'] = 'Merdeka Belajar Kampus Merdeka';
        $this->form_validation->set_rules('kegmbkm', 'Kegiatan MBKM', 'required');
        $this->form_validation->set_rules('ketmbkm', 'Keterangan MBKM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_mbkm/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/AKADEMIK/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_akademik')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pengaju_mbkm/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
                $tambah = array(
                    "id_user" => $this->input->post('id_user'),
                    "kegiatan" => $this->input->post('kegmbkm', true),
                    "keterangan" => $this->input->post('ketmbkm', true),
                    "file_akademik" => $file_name,
                    "path_akademik" => $file_path
                );
                $this->akm->tambahMBKM($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/pengaju_mbkm');
            }
        }
    }

    public function editMBKM($id)
    {
        $data['data'] = $this->akm->getMBKMById($id);
        $data['user'] = get_user();
        $data['title'] = 'Kegiatan Merdeka Belajar Kampus Merdeka';
        $data['sub_title'] = 'MBKM';
        $data['deskripsi'] = 'Merdeka Belajar Kampus Merdeka';
        $this->form_validation->set_rules('kegmbkm', 'Kegiatan MBKM', 'required');
        $this->form_validation->set_rules('ketmbkm', 'Keterangan MBKM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_mbkm/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {

            $config['upload_path'] = './uploads/AKADEMIK/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_akademik')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pengaju_mbkm/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
            }

            $kegiatan = $this->input->post('kegmbkm', true);
            $keterangan = $this->input->post('ketmbkm', true);
            if (!empty($file_name)) {
                $edit = array(
                    "kegiatan" => $kegiatan,
                    "keterangan" => $keterangan,
                    "file_akademik" => $file_name,
                    "path_akademik" => $file_path
                );
            } else {
                $edit = array(
                    "kegiatan" => $kegiatan,
                    "keterangan" => $keterangan
                );
            }
            $this->akm->ubahMBKM($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_mbkm');
        }
    }

    public function hapusMBKM($id)
    {
        $this->akm->hapusMBKM($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/pengaju_mbkm');
    }
}
