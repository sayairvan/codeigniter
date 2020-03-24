<?php
    class Penceramah extends CI_Controller{
        public function index(){
            $data['penceramah'] = $this->m_penceramah->tampil_data()->
            result(); // m_penceramah : nama model penceramah, tampil_data = u/mengambil data

            $this->load->view('template/header'); //u/ngeload view dari folder template
            $this->load->view('template/sidebar');
            $this->load->view('penceramah', $data);
            $this->load->view('template/footer');
        }
        public function tambah_aksi(){
            $nama_penceramah = $this->input->post('nama_penceramah');
            $no_telp = $this->input->post('no_telp');
            $alamat_penceramah = $this->input->post('alamat_penceramah');

            $data = array(
                'nama_penceramah' =>  $nama_penceramah,
                'no_telp' =>  $no_telp,
                'alamat_penceramah' =>  $alamat_penceramah
            );

            $this->m_penceramah->input_data($data,'penceramah');
            redirect('penceramah/index');
        }
        public function hapus($id_penceramah){
            $where = array('ID_PENCERAMAH' => $id_penceramah );

            $this->m_penceramah->hapus_data($where,'PENCERAMAH');
            redirect('penceramah/index');
        }
    }

?>