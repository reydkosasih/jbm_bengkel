<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        if ($this->session->userdata('username') == false) {
            redirect('auth');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'User Dashboard - JBM';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('user/booking_page', $data);
        $this->load->view('templates/footer');
    }

    public function riwayat()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Riwayat Servis Mobil - JBM';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('user/riwayat_page', $data);
        $this->load->view('templates/footer');
    }
}
