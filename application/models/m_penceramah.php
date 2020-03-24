<?php
    class M_penceramah extends CI_Model{
        public function tampil_data(){
            return $this->db->get('PENCERAMAH');
        }
    
        public function input_data($data,$table){
            $this->db->insert($data,$table);  
        }
        public function hapus_data($where,$table){
            $this->db->where($where);  
            $this->db->delete($table); 
        }
    }
?>