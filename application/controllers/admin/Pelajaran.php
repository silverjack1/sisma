<?php
class Pelajaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajaran_model');
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
        $data['title'] = "Daftar Mata Pelajaran";
        $data['pelajaran'] = $this->Pelajaran_model->ambilpelajaran();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/pelajaran/daftarpelajaran', $data);
        $this->load->view('templates/footer');
    }
}
