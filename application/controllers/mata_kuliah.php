<?php

class mata_kuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mata_kuliah_m', 'mk');
        $this->load->library('form_validation');
    }

    public function set_rulesMataKuliah()
    {
        $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
    }

    public function tambahMatkulAdmin()
    {
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mata Kuliah';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Data Mata Kuliah';

        $this->set_rulesMataKuliah();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/mata_kuliah/tambah', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $mata_kuliah = $this->input->post('mata_kuliah', true);
            $semester = $this->input->post('semester', true);
            $tambah = array(
                "mata_kuliah" => $mata_kuliah,
                "semester" => $semester,
            );
            $this->mk->tambahMatkul($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/mata_kuliah');
        }
    }

    public function editMatkulAdmin($id)
    {
        $data['data'] = $this->mk->getMatkulByIdAdmin($id);
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mata Kuliah';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Data Mata Kuliah';

        $this->set_rulesMataKuliah();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/mata_kuliah/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $mata_kuliah = $this->input->post('mata_kuliah', true);
            $semester = $this->input->post('semester', true);
            $edit = array(
                "mata_kuliah" => $mata_kuliah,
                "semester" => $semester,
            );
            $this->mk->EditMatkul($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/mata_kuliah');
        }
    }

    public function hapusMatkulAdmin($id)
    {
        $this->mk->hapusMatkul($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/mata_kuliah');
    }
}
