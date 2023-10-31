<?php
require FCPATH . 'vendor/autoload.php';

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

    public function printSKPI($nim)
    {
        $data['khs'] = $this->akm->getKHS($nim);
        $data['mbkm'] = $this->akm->getMBKM($nim);
        $data['organisasi'] = $this->kgt->getKegiatan('organisasi', $nim);
        $data['prestasi'] = $this->kgt->getKegiatan('prestasi', $nim);
        $data['pertemuan'] = $this->kgt->getKegiatan('pertemuan', $nim);
        $data['pelatihan'] = $this->kgt->getKegiatan('pelatihan', $nim);
        $data['penunjang'] = $this->kgt->getKegiatan('penunjang', $nim);

        $html = $this->load->view('admin/cetak_skpi/File_SKPI_pdf', $data, true);

        $mpdf = new \Mpdf\Mpdf(['format' => 'A4-P']);

        $mpdf->WriteHTML($html);

        $mpdf->Output('Ijzah_SKPI.pdf', \Mpdf\Output\Destination::DOWNLOAD);
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

    public function editSKPIAdmin($id, $nim)
    {
        $data['khs'] = $this->akm->getKHS($nim);
        $data['mbkm'] = $this->akm->getMBKM($nim);
        $data['organisasi'] = $this->kgt->getKegiatan('organisasi', $nim);
        $data['prestasi'] = $this->kgt->getKegiatan('prestasi', $nim);
        $data['pertemuan'] = $this->kgt->getKegiatan('pertemuan', $nim);
        $data['pelatihan'] = $this->kgt->getKegiatan('pelatihan', $nim);
        $data['penunjang'] = $this->kgt->getKegiatan('penunjang', $nim);
        $data['data'] = $this->skpi->getSKPIByIdAdmin($id);

        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';

        $this->form_validation->set_rules('no_ijazah', 'Nomor Ijazah', 'required');
        $this->form_validation->set_rules('tgl_lulus', 'Tanggal Kelulusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/pengaju_skpi/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $config['upload_path'] = './uploads/IJAZAH/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_ijazah')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/pengaju_skpi/edit');
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
            }
            $validasi = $this->input->post('validasi', true);
            $ket_validasi = $this->input->post('ket_validasi', true);
            $nomor_ijazah = $this->input->post('no_ijazah', true);
            $tanggal_lulus = $this->input->post('tgl_lulus', true);
            if (!empty($file_name)) {
                $edit = array(
                    "nomor_ijazah" => $nomor_ijazah,
                    "tanggal_lulus" => $tanggal_lulus,
                    "file_ijazah" => $file_name,
                    "validasi" => $validasi,
                    "ket_validasi" => $ket_validasi,
                    "path_ijazah" => $file_path
                );
            } else {
                $edit = array(
                    "nomor_ijazah" => $nomor_ijazah,
                    "tanggal_lulus" => $tanggal_lulus,
                    "validasi" => $validasi,
                    "ket_validasi" => $ket_validasi,
                );
            }
            $this->skpi->EditSKPI($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/pengaju_skpi');
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
        $data['data'] = $this->skpi->getSKPIById($id);

        $data['user'] = get_user();
        $data['title'] = 'Data Pengajuan SKPI';
        $data['sub_title'] = 'Pengajuan SKPI';
        $data['deskripsi'] = 'Surat Keterangan Pengganti Ijazah';

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

    public function tambahFileSKPI()
    {
        $data['mhs'] = $this->mhs->getNamaDanNIM();
        $data['user'] = get_user();
        $data['title'] = 'Cetak SKPI';
        $data['sub_title'] = 'SKPI';
        $data['deskripsi'] = 'Cetak SKPI';

        $this->form_validation->set_rules('nama_file_skpi', 'Nama file', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/cetak_skpi/tambah');
            $this->load->view('temp_admin/footer');
        } else {
            $config['upload_path'] = './uploads/IJAZAH/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 5024;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_skpi')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_admin/header', $data);
                $this->load->view('temp_admin/sidebar', $data);
                $this->load->view('admin/cetak_skpi/tambah');
                $this->load->view('temp_admin/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
                $nim = $this->input->post('nim');
                $tambah = array(
                    "nama_file_skpi" => $this->input->post('nama_file_skpi', true),
                    "file_skpi" => $file_name,
                    "path_skpi" => $file_path
                );
                $this->skpi->TambahFileSKPI($nim, $tambah);
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('admin/cetak_skpi');
            }
        }
    }
}
