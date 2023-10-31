<?php
class mata_kuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mata_kuliah_m', 'mk');
    }

    public function index()
    {
        $data['data'] = $this->mk->getMataKuliah();
        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mata Kuliah';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Mata Kuliah';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/mata_kuliah/index');
        $this->load->view('temp_admin/footer');
    }

    public function tambahMataKuliah()
    {
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mata Kuliah';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Mata Kuliah';
        $this->form_validation->set_rules('mata_kuliah', 'Mata kuliah', 'required');
        $this->form_validation->set_rules('semester', 'Mata kuliah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/mata_kuliah/tambah', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $tambah = array(
                "mata_kuliah" => $this->input->post('mata_kuliah', true),
                "semester" => $this->input->post('semester', true),
            );
            $this->mk->tambahMatkul($tambah);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mata_kuliah');
        }
    }

    public function editMataKuliah($id)
    {
        $data['user'] = get_user();
        $data['data'] = $this->mk->getMKById($id);
        $data['title'] = 'Master Data Mata Kuliah';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Mata Kuliah';

        $this->form_validation->set_rules('mata_kuliah', 'Mata kuliah', 'required');
        $this->form_validation->set_rules('semester', 'Mata kuliah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/mata_kuliah/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $edit = array(
                "mata_kuliah" => $this->input->post('mata_kuliah', true),
                "semester" => $this->input->post('semester', true),
            );
            $this->mk->editMatkul($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mata_kuliah');
        }
    }

    public function hapusMataKuliah($id)
    {
        $this->mk->hapusMatkul($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mata_kuliah');
    }

    public function simpanNilai()
    {
        $matkul = $this->input->post('matkul');
        $nilai = $this->input->post('nilaimatkul');
        for ($i = 0; $i < count($matkul); $i++) {
            $data = [
                'matkul' => $matkul[$i],
                'nilai' => $nilai[$i]
            ];
            $this->mk->insertNilai($data);
        }
        redirect('NilaiMatkul');
    }
}
