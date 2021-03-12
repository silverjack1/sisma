<?php
class Pelajaran_model extends CI_Model
{
    public function ambilpelajaran()
    {
        $this->db->select('*');
        $this->db->from('tb_matapelajaran');
        $this->db->order_by('level');
        $this->db->order_by('nama_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }
}
