   <?php
    class Kelas_model extends CI_Model
    {
        public function ambilkelas()
        {
            $this->db->select('*');
            $this->db->from('tb_kelas');
            $this->db->order_by('kelas');
            $query = $this->db->get();
            return $query->result_array();
        }
    }
