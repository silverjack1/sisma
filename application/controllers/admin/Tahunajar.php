<?php
class Tahunajar extends CI_Controller
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
        $data['title'] = "Tahun Pelajaran";
        $data['tahunajaran'] = $this->Tahun_model->ambiltahun();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/tahun/tahunajaran', $data);
        $this->load->view('templates/footer');
    }

    public function hapustahun($id)
    {
        $this->db->delete('tb_tahunajaran', array('id_tahun' => $id));
        redirect('admin/tahunajar');
    }

    public function ubahtahun()
    {
        $nilai = $this->uri->segment(4);
        if (!$nilai) {
            redirect('admin/tahunajar');
        }
        $data['title'] = "Ubah Tahun Pelajaran";
        $data['ubahtahun'] = $this->Tahun_model->getTahunById();
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/tahun/ubahtahun', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tahun_model->ubahTahun();
            redirect('admin/tahunajar');
        }
    }
    public function tambahtahun()
    {
        $data['title'] = "Tambah Tahun Pelajaran";
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/tahun/tambahtahun', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tahun_model->tambahTahun();
            redirect('admin/tahunajar');
        }
    }
}
