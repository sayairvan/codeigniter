<?php
class M_dashboard extends CI_Model
{
    public function tampil_data()
    {

        $this->db->select('*'); //untuk menampilkan semua data kedua tabel
        $this->db->from('acara');
        $this->db->join('penceramah', 'acara.ID_PENCERAMAH = penceramah.ID_PENCERAMAH'); //join untuk menggabungkan tabel
        // $this->db->join('admin', 'admin.ID_ADMIN = acara.ID_ADMIN'); //join untuk menggabungkan tabel
        // $this->db->join('bilal', 'bilal.ID_BILAL = acara.ID_BILAL'); //join untuk menggabungkan tabel
        // $this->db->join('template_pesan', 'template_pesan.ID_TEMPLATE = acara.ID_TEMPLATE'); //join untuk menggabungkan tabel
        $query = $this->db->get();
        return $query;
    }
}
