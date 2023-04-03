<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sparepart_model");
    }

    public function index()
    {
        $data['title'] = 'Kelola Sparepart - JBM';
        $data['datpart'] = $this->sparepart_model->show_sparepart();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kelola_sparepart', $data);
        $this->load->view('templates/footer');
    }
}
