<?php
class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['dashboard'] = $this->m_dashboard->tampil_data()->result(); // m_penceramah : nama model penceramah, tampil_data = u/mengambil data

        $this->load->view('template/header'); //u/ngeload view dari folder template
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}
