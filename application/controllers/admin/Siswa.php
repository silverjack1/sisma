<?php
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tahun_model');
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
        $data['title'] = "Daftar Siswa";
        $data['siswa'] = $this->Siswa_model->ambilsiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/siswa/daftarsiswa', $data);
        $this->load->view('templates/footer');
    }
    public function tambahsiswa()
    {
        $data['title'] = "Tambah Siswa";
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/siswa/tambahsiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tahun_model->tambahTahun();
            redirect('admin/tahunajar');
        }
    }

    public function pesertadidik()
    {
        $data['title'] = "Data Peserta Didik";
        $data['tahun'] = $this->Tahun_model->tahunaktif();
        $data['kelas'] = $this->Siswa_model->ambilkelas();
        $data['pesdik'] = $this->Siswa_model->getpesdik();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/siswa/pesertadidik', $data);
        $this->load->view('templates/footer');
    }
}
