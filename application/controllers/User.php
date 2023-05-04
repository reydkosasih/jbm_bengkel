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
        $this->load->model('booking_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'User Dashboard - JBM';
        $data['idbook'] = $this->booking_model->show_idbook();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('user/booking_page', $data);
        $this->load->view('templates/footer');
    }

    public function riwayat($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Riwayat Servis Mobil - JBM';

        $data['mybook'] = $this->booking_model->riwayat_book($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('user/riwayat_page', $data);
        $this->load->view('templates/footer');
    }

    function saveBook()
    {
        $this->booking_model->input_booking();
    }
}
