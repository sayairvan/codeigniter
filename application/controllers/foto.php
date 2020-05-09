<?php
class Acara extends CI_Controller
{
    public function index()
    { }
    public function kajian($kajian)
    {
        $data['title'] = 'Dokumentasi';
        $data['acara'] = $this->m_acara->tampil_kajian($kajian)->result(); // m_acara : nama model acara, tampil_data = u/mengambil data

        $data['foto'] = $this->m_foto->tampil_data()->result();

        // $data['bilal'] = $this->m_bilal->tampil_data()->result();

        $this->load->view('template/header', $data); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('foto', $data);
        $this->load->view('template/footer');
    }
    public function jumatan($jumatan)
    {
        $data['title'] = 'Dokumentasi';
        $data['acara'] = $this->m_acara->tampil_jumatan($jumatan)->result(); // m_acara : nama model acara, tampil_data = u/mengambil data

        $data['foto'] = $this->m_foto->tampil_data()->result();

        // $data['bilal'] = $this->m_bilal->tampil_data()->result();

        $this->load->view('template/header', $data); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('foto', $data);
        $this->load->view('template/footer');
    }
    public function haribesarislam($haribesarislam)
    {
        $data['acara'] = $this->m_acara->tampil_hbi($haribesarislam)->result(); // m_acara : nama model acara, tampil_data = u/mengambil data

        $data['foto'] = $this->m_foto->tampil_data()->result();
        // $data['bilal'] = $this->m_bilal->tampil_data()->result();

        $this->load->view('template/header', $data); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('foto', $data);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $ID_FOTO = $this->input->post('ID_FOTO');
        $FOTO = $this->input->post('FOTO');
        $PAMFLET_ACARA = $this->input->post('PAMFLET_ACARA');
        $VIDEO_ACARA = $this->input->post('VIDEO_ACARA');

        $data = array(
            'ID_FOTO' => $ID_FOTO,
            'FOTO' => $FOTO,
            'PAMFLET_ACARA' =>  $PAMFLET_ACARA,
            'VIDEO_ACARA'  =>  $VIDEO_ACARA

        );

        $this->m_foto->input_data($data, 'foto');
        redirect('foto/index');
    }
    public function hapus($ID_FOTO)
    {
        $where = array('ID_FOTO' => $ID_FOTO);

        $this->m_foto->hapus_data($where, 'foto');
        redirect('foto/index');
    }
    public function edit($ID_FOTO)
    {
        $where = array('ID_FOTO' => $ID_FOTO); //id yg ada di tabel acara dijadikan array

        //membuat function yg digunakan dimodal
        $data['foto'] = $this->m_foto->edit_data($where, 'foto')->result(); //m_foto = nama modalnya, masukkan nma function edit_data

        $this->load->view('template/header'); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('edit_foto', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $ID_FOTO = $this->input->post('ID_FOTO');
        $JENIS_ACARA = $this->input->post('JENIS_ACARA');
        $NAMA_ACARA = $this->input->post('NAMA_ACARA');
        $FOTO = $this->input->post('FOTO');
        $PAMFLET_ACARA = $this->input->post('PAMFLET_ACARA');
        $VIDEO_ACARA = $this->input->post('VIDEO_ACARA');


        $data = array(
            'ID_FOTO' => $ID_FOTO,
            'JENIS_ACARA' =>  $JENIS_ACARA,
            'NAMA_ACARA' =>  $NAMA_ACARA,
            'FOTO' => $FOTO,
            'PAMFLET_ACARA' =>  $PAMFLET_ACARA,
            'VIDEO_ACARA'  =>  $VIDEO_ACARA
        );
        $where = array('ID_FOTO' => $ID_FOTO);
        $this->m_foto->update_data($where, $data, 'foto');
        redirect('foto/index');
    }
}
