<?php
class matkul extends CI_Controller
{
    public function index()
    {
        $this->load->view('matakuliah_form');
    }

    public function generateForm()
    {
        $jumlah_matkul = $this->input->post('jumlah_matkul');
        $data['jumlah_matkul'] = $jumlah_matkul;
        $this->load->view('matakuliah_form', $data);
    }

    public function nilaiMataKuliah()
    {
        $this->load->model('mata_kuliah_m', 'mk');
        $data['matkul'] = $this->mk->getMataKuliah();
        $jumlah_matkul = $this->input->post('jumlah_matkul');
        $data['jumlah_matkul'] = $jumlah_matkul;
        $this->load->view('nilai_form', $data);
    }

    public function submitForm()
    {
        // Handle form submission here
        // Anda dapat mengakses data mata kuliah dan nilai dari $_POST
    }
}
