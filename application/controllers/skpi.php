<?php

class skpi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akademik_m', 'akm');
        $this->load->model('kegiatan_m', 'kgt');
        $this->load->model('mahasiswa_m', 'mhs');
        $this->load->model('skpi_m', 'skpi');
        $this->load->library('form_validation');
    }

    public function tambahSKPI($nim)
    {
        $data['khs'] = $this->akm->getKHS($nim);
        $data['mbkm'] = $this->akm->getMBKM($nim);
        $data['organisasi'] = $this->kgt->getKegiatan('organisasi', $nim);
        $data['prestasi'] = $this->kgt->getKegiatan('prestasi', $nim);
        $data['pertemuan'] = $this->kgt->getKegiatan('pertemuan', $nim);
        $data['pelatihan'] = $this->kgt->getKegiatan('pelatihan', $nim);
        $data['penunjang'] = $this->kgt->getKegiatan('penunjang', $nim);

        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $this->form_validation->set_rules('no_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('tgl_lulus', 'Tanggal Kelulusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = get_user();
            $data['title'] = 'Pengajuan SKPI';
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_skpi/tambah');
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/IJAZAH/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_ijazah')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pengaju_skpi/tambah');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
                $tambah = array(
                    "nim" => $nim,
                    "nomor_ijazah" => $this->input->post('no_ijazah', true),
                    "tanggal_lulus" => $this->input->post('tgl_lulus', true),
                    "file_ijazah" => $file_name,
                    "path_ijazah" => $file_path
                );
                $this->skpi->tambahSKPI($tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pengunjung/pengaju_skpi/' . $nim);
            }
        }
    }

    public function editSKPI($id, $nim)
    {
        $data['khs'] = $this->akm->getKHS($nim);
        $data['mbkm'] = $this->akm->getMBKM($nim);
        $data['organisasi'] = $this->kgt->getKegiatan('organisasi', $nim);
        $data['prestasi'] = $this->kgt->getKegiatan('prestasi', $nim);
        $data['pertemuan'] = $this->kgt->getKegiatan('pertemuan', $nim);
        $data['pelatihan'] = $this->kgt->getKegiatan('pelatihan', $nim);
        $data['penunjang'] = $this->kgt->getKegiatan('penunjang', $nim);

        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';
        $data['data'] = $this->skpi->getSKPIById($id);

        $this->form_validation->set_rules('no_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('tgl_lulus', 'Tanggal Kelulusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/pengaju_skpi/edit', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/IJAZAH/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_ijazah')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/pengaju_skpi/edit');
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
            }
            $nomor_ijazah = $this->input->post('no_ijazah', true);
            $tanggal_lulus = $this->input->post('tgl_lulus', true);
            if (!empty($file_name)) {
                $edit = array(
                    "nomor_ijazah" => $nomor_ijazah,
                    "tanggal_lulus" => $tanggal_lulus,
                    "file_ijazah" => $file_name,
                    "path_ijazah" => $file_path
                );
            } else {
                $edit = array(
                    "nomor_ijazah" => $nomor_ijazah,
                    "tanggal_lulus" => $tanggal_lulus,
                );
            }
            $this->skpi->EditSKPI($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/pengaju_skpi/' . $nim);
        }
    }

    public function hapusSKPI($id, $nim)
    {
        $this->skpi->hapusSKPI($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengunjung/pengaju_skpi/' . $nim);
    }
}
