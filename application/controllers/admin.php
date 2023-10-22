<?php

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_admin();
    }

    public function index()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tittle'] = 'Dashboard';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('temp_admin/footer');
    }

    public function pengaju_skpi()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tittle'] = 'Data Pengajuan SKPI';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/pengaju_skpi/index');
        $this->load->view('temp_admin/footer');
    }

    public function cetak_skpi()
    {
        is_logged_out();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tittle'] = 'Cetak SKPI';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/cetak_skpi/index');
        $this->load->view('temp_admin/footer');
    }

    public function berita()
    {
        $this->load->model('berita_model', 'berita');
        is_logged_out();
        $data['user'] = get_user();
        $data['tittle'] = 'Berita';
        $config['base_url'] = 'http://localhost/ci3-test/admin/berita';
        $config['num_links'] = 5;

        $config['total_rows'] = $this->berita->countAllBerita();
        $config['per_page'] = 2;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['konten'] = $this->berita->getBeritaPage($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['konten'] = $this->berita->cariBerita();
        }
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('temp_admin/footer');
    }
}
