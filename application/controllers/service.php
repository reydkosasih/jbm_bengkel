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
        $this->load->library('form_validation');
    }

    // ADMIN SESSION
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

    public function konfirmasi_service($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Konfirmasi Servis - JBM';

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/konfirmasi_servis', $data);
        $this->load->view('templates/footer');
    }

    // testing
    public function simpan_penjualan()
    {
        $kode_penjualan = $this->input->post('kode_penjualan');
        $total_harga = $this->input->post('total_harga');
        $tgl_penjualan = $this->input->post('tgl_penjualan');
        // $pelanggan = $this->input->post('pelanggan');

        foreach ($this->cart->contents() as $items) {
            $kode_barang = $items['id'];
            $qty = $items['qty'];
            $d = array(
                'kode_transaksi' => $kode_penjualan,
                'kode_barang' => $kode_barang,
                'qty' => $qty,
            );
            $this->db->insert('detail_transaksi', $d);
            //$this->db->query("UPDATE menu SET satuan=satuan-'$qty' WHERE kode_menu='$kode_barang'");
        }

        $data = array(
            //'nama_pelanggan' => $pelanggan,
            'kode_transaksi' => $kode_penjualan,
            'total_harga' => $total_harga,
            'tgl_transaksi' => $tgl_penjualan,
        );
        $this->db->insert('transaksi', $data);
        $this->cart->destroy();
        redirect('service/detail_service');
    }

    public function simpan_cart()
    {

        $data = array(
            'id'    => $this->input->post('kode_barang'),
            'qty'   => $this->input->post('jumlah'),
            'price' => $this->input->post('harga'),
            'name'  => $this->input->post('nabar'),
        );
        $this->cart->insert($data);
        redirect('service/tambah_penjualan');
    }

    public function hapus_cart($id)
    {

        $data = array(
            'rowid'    => $id,
            'qty'   => 0,
        );
        $this->cart->update($data);
        redirect('service/tambah_penjualan');
    }

    //testing

    // END ADMIN SESSION

    // USER SESSION
    public function detail_service_user($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('admin/detail_servis', $data);
        $this->load->view('templates/footer');
    }
}
