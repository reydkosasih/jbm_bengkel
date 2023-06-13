<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == false) {
            redirect('auth');
        }
        $this->load->model("sparepart_model");
        $this->load->model("laporan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Sparepart - JBM';
        $data['datserv'] = $this->laporan_model->data_sparepart();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kelola_sparepart', $data);
        $this->load->view('templates/footer');
    }

    function add_part()
    {
        $this->sparepart_model->add_data();
    }

    public function delete($id)
    {
        $this->db->delete("barang", array("id_barang" => $id));
        redirect(site_url('sparepart/index'));
    }

    public function edit_form($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Sparepart - JBM';
        $data['datpart'] = $this->sparepart_model->show_byid($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/edit_sparepart', $data);
        $this->load->view('templates/footer');
    }

    function edit_part($id)
    {
        $this->sparepart_model->edit_data($id);
    }
}
