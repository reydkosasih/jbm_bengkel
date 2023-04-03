<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("service_model");
    }
    public function index()
    {
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kelola_servis', $data);
        $this->load->view('templates/footer');
    }
}
