<?php

class mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_m', 'mhs');
        $this->load->model('akun_m', 'akn');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->mhs->getMahasiswa();

        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mahasiswa';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Data Mahasiswa';

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/mahasiswa/index', $data);
        $this->load->view('temp_admin/footer');
    }

    public function validasiMahasiswa($id)
    {
        $data['data'] = $this->mhs->getMahasiswaByAdmin($id);

        is_logged_out();
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mahasiswa';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Data Mahasiswa';

        $this->form_validation->set_rules('validasi', 'Validasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('admin/mahasiswa/edit', $data);
            $this->load->view('temp_admin/footer');
        } else {
            $edit = array(
                "validasi" => $this->input->post('validasi', true)
            );
            $this->akn->editAktivasi($id, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa');
        }
    }

    public function editMahasiswa($username)
    {
        $data['mhs'] = $this->mhs->getMahasiswaByUsername($username);
        $data['user'] = get_user();
        $data['title'] = 'Master Data Mahasiswa';
        $data['sub_title'] = 'Master Data';
        $data['deskripsi'] = 'Data Mahasiswa';
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor handphone', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('temp_pengunjung/header', $data);
            $this->load->view('temp_pengunjung/sidebar', $data);
            $this->load->view('pengunjung/lock_menu/index', $data);
            $this->load->view('temp_pengunjung/footer');
        } else {
            $config['upload_path'] = './uploads/MAHASISWA/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 5024;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('temp_pengunjung/header', $data);
                $this->load->view('temp_pengunjung/sidebar', $data);
                $this->load->view('pengunjung/lock_menu/index', $data);
                $this->load->view('temp_pengunjung/footer');
            } else {
                $data = $this->upload->data();
                $file_name = $data['file_name'];
                $file_path = $config['upload_path'] . $file_name;
            }

            $nim = $this->input->post('nim', true);
            $angkatan = $this->input->post('angkatan', true);
            $nama = $this->input->post('nama', true);
            $tempat_lahir = $this->input->post('tempat_lahir', true);
            $tgl_lahir = $this->input->post('tgl_lahir', true);
            $no_hp = $this->input->post('no_hp', true);
            $email = $this->input->post('email', true);
            $kelamin = $this->input->post('kelamin', true);
            $agama = $this->input->post('agama', true);
            $nik = $this->input->post('nik', true);
            $alamat_asal = $this->input->post('alamat_asal', true);
            $alamat_pky = $this->input->post('alamat_pky', true);
            $ayah = $this->input->post('ayah', true);
            $ibu = $this->input->post('ibu', true);
            $tgl_masuk = $this->input->post('tgl_masuk', true);
            $prodi = $this->input->post('prodi', true);
            $dosen_pa = $this->input->post('dosen_pa', true);
            if (!empty($file_name)) {
                $edit = array(
                    "nim" => $nim,
                    "angkatan" => $angkatan,
                    "nama" => $nama,
                    "tgl_lahir" => $tgl_lahir,
                    "tempat_lahir" => $tempat_lahir,
                    "no_hp" => $no_hp,
                    "email" => $email,
                    "kelamin" => $kelamin,
                    "agama" => $agama,
                    "nik" => $nik,
                    "alamat_pky" => $alamat_pky,
                    "alamat_asal" => $alamat_asal,
                    "ayah" => $ayah,
                    "ibu" => $ibu,
                    "tgl_masuk" => $tgl_masuk,
                    "prodi" => $prodi,
                    "dosen_pa" => $dosen_pa,
                    "foto" => $file_name,
                    "path_foto" => $file_path
                );
            } else {
                $edit = array(
                    "nim" => $nim,
                    "angkatan" => $angkatan,
                    "nama" => $nama,
                    "tgl_lahir" => $tgl_lahir,
                    "tempat_lahir" => $tempat_lahir,
                    "no_hp" => $no_hp,
                    "email" => $email,
                    "kelamin" => $kelamin,
                    "agama" => $agama,
                    "nik" => $nik,
                    "alamat_pky" => $alamat_pky,
                    "alamat_asal" => $alamat_asal,
                    "ayah" => $ayah,
                    "ibu" => $ibu,
                    "tgl_masuk" => $tgl_masuk,
                    "prodi" => $prodi,
                    "dosen_pa" => $dosen_pa,
                );
            }
            $this->mhs->EditMahasiswa($username, $edit);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pengunjung/index/' . $username);
        }
    }
}
