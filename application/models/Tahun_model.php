<?php
class Tahun_model extends CI_Model
{
    public function getTahunById()
    {
        $id = $this->uri->segment(4);
        return $this->db->get_where('tb_tahunajaran', ['id_tahun' => $id])->row_array();
    }
    public function ambiltahun()
    {
        $this->db->select('*');
        $this->db->from('tb_tahunajaran');
        $this->db->order_by('nama');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function ubahTahun()
    {
        $data = [
            "nama" => $this->input->post('judultahun', true),
            "semester" => $this->input->post('semester', true),
            "shared" => $this->input->post('shared', true),
            "status" => $this->input->post('status', true)
        ];
        $this->db->update('tb_tahunajaran', ['status' => '0']);
        $this->db->where('id_tahun', $this->input->post('id'));
        $this->db->update('tb_tahunajaran', $data);
    }

    public function tambahTahun()
    {
        $data_ganjil = array(
            'nama'         => $this->input->post('nama', TRUE),
            'semester'     => 'Ganjil'
        );

        $data_genap = array(
            'nama'         => $this->input->post('nama', TRUE),
            'semester'     => 'Genap'
        );

        $this->db->insert('tb_tahunajaran', $data_ganjil);
        $this->db->insert('tb_tahunajaran', $data_genap);
    }

    public function tahunaktif()
    {
        $data = $this->db->get('tb_tahunajaran')->num_rows();
        if ($data > 0) {
            $this->db->order_by('nama', 'desc');
            return $this->db->get_where('tb_tahunajaran', ['status' => '1'])->row_array();
        } else {
            return NULL;
        }
    }
}
