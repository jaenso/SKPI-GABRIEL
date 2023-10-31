<?php
class MataKuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MataKuliah_model');
    }

    public function index()
    {
        $this->load->view('input_mata_kuliah');
    }

    public function tambahMataKuliah()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jumlah_mata_kuliah', 'Jumlah Mata Kuliah', 'required|integer');
        $this->load->model('mata_kuliah_m', 'mk');
        $data['matkul'] = $this->mk->getMataKuliah();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('input_mata_kuliah');
        } else {
            $jumlah_mata_kuliah = $this->input->post('jumlah_mata_kuliah');
            $data['jumlah_mata_kuliah'] = $jumlah_mata_kuliah;
            $this->load->view('input_mata_kuliah_form', $data);
        }
    }

    public function simpanMataKuliah()
    {
        $this->load->library('form_validation');
        $this->load->model('mata_kuliah_m', 'mk');
        $data['matkul'] = $this->mk->getMataKuliah();
        $this->form_validation->set_rules('mata_kuliah[]', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('nilai[]', 'Nilai', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('input_mata_kuliah_form', $data); // Kirim data mata kuliah ke view
        } else {
            $mata_kuliah = $this->input->post('mata_kuliah');
            $nilai = $this->input->post('nilai');

            for ($i = 0; $i < count($mata_kuliah); $i++) {
                $data = array(
                    'id_matkul' => $mata_kuliah[$i],
                    'nilai' => $nilai[$i]
                );
                $this->MataKuliah_model->insertMataKuliah($data);
            }

            $this->load->view('sukses');
        }
    }
}
