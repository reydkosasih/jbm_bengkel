<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == false) {
            redirect('auth');
        }
        $this->load->model("laporan_model");
        $this->load->library('form_validation');
    }

    public function transaksi()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Transaksi';

        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_transaksi', $data);
        $this->load->view('templates/footer');
    }
    public function transaksi_owner()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Transaksi';

        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/o_sidebar', $data);
        $this->load->view('laporan/lap_transaksi', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_trans()
    {
        $data['title'] = 'Laporan Transaksi';
        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('laporan/print_transaksi', $data);
    }

    public function service()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Servis';

        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_service', $data);
        $this->load->view('templates/footer');
    }
    public function service_owner()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Servis';

        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/o_sidebar', $data);
        $this->load->view('laporan/lap_service', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_servis()
    {
        $data['title'] = 'Laporan Transaksi';
        $data['datserv'] = $this->laporan_model->transaksi_detail();

        $this->load->view('laporan/print_service', $data);
    }

    public function sparepart()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Sparepart';

        $data['datserv'] = $this->laporan_model->data_sparepart();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_sparepart', $data);
        $this->load->view('templates/footer');
    }
    public function sparepart_owner()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Sparepart';

        $data['datserv'] = $this->laporan_model->data_sparepart();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/o_sidebar', $data);
        $this->load->view('laporan/lap_sparepart', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_part()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Sparepart';

        $data['datserv'] = $this->laporan_model->data_sparepart();

        $this->load->view('laporan/print_sparepart', $data);
    }
}
