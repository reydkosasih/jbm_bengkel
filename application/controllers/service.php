<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == false) {
            redirect('auth');
        }
        $this->load->model("service_model");
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service();

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kelola_servis', $data);
        $this->load->view('templates/footer');
    }

    public function detail_service($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/detail_servis', $data);
        $this->load->view('templates/footer');
    }
}
