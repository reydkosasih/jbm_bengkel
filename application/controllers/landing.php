<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Jaya Battery Motor Official Website';
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/navbar', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('user/landing_page', $data);
        // $this->load->view('templates/footer');
    }
}
