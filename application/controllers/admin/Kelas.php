<?php
class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Siswa_model');
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('message', 'Anda Belum Login!');
            redirect('login');
        }

        if ($this->session->userdata['level'] != 'admin') {
            $this->session->set_flashdata('message', 'Anda Belum Login!');
            redirect('login');
        }
    }
    public function index()
    {
        $data['title'] = "Daftar Kelas";
        $data['kelas'] = $this->Kelas_model->ambilkelas();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kelas/daftarkelas', $data);
        $this->load->view('templates/footer');
    }
}
