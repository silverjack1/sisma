<?php
class Siswa_model extends CI_Model
{
    public function ambilsiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->order_by('nama');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function ambilkelas()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->order_by('kelas');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function ambilpesdik()
    {
        $kelas = $this->input->post('kelas');
        $tahun = $this->input->post('tahun');
        $this->db->select('*');
        $this->db->from('tb_datasiswa');
        $this->db->where('id_kelas', $kelas);
        $this->db->where('tahun_ajaran', $tahun);
        $this->db->order_by('id_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getpesdik()
    {
        $kelas = $this->input->post('kelas');
        $tahun = $this->input->post('tahun');
        $this->db->select('*');
        $this->db->from('tb_datasiswa');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_datasiswa.id_siswa', 'inner');
        $this->db->where('id_kelas', $kelas);
        $this->db->where('tahun_ajaran', $tahun);
        $query = $this->db->get();
        return $query->result_array();
    }
}
