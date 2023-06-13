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
        $data['detailserv'] = $this->service_model->transaksi_detail($id);


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

        $data['datserv'] = $this->service_model->add_service($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/konfirmasi_servis', $data);
        $this->load->view('templates/footer');
    }

    public function detail_trans($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);
        $data['detailserv'] = $this->service_model->transaksi_detail_inside($id);
        $data['totalhrg'] = $this->service_model->get_totalharga($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/detail_servis_trans', $data);
        $this->load->view('templates/footer');
    }

    // testing
    public function simpan_penjualan()
    {
        $booking_id = $this->input->post('booking_id');
        $customer_id = $this->input->post('customer_id');
        $total_harga = $this->input->post('total_harga');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $status = $this->input->post('status');
        $jasa = $this->input->post('jasa');
        $biaya_jasa = $this->input->post('biaya_jasa');
        // $pelanggan = $this->input->post('pelanggan');

        foreach ($this->cart->contents() as $items) {
            $kode_barang = $items['id'];
            $qty = $items['qty'];
            $d = array(
                'booking_id' => $booking_id,
                'kode_barang' => $kode_barang,
                'qty' => $qty,
            );
            $this->db->insert('detail_transaksi', $d);
            //$this->db->query("UPDATE menu SET satuan=satuan-'$qty' WHERE kode_menu='$kode_barang'");
        }
        $data = array(
            // 'booking_id' => $booking_id,
            'status' => $status
        );
        $this->db->update('tbl_booking', $data);

        $data = array(
            //'nama_pelanggan' => $pelanggan,
            'booking_id' => $booking_id,
            'customer_id' => $customer_id,
            'total_harga' => $total_harga,
            'tgl_transaksi' => $tgl_transaksi,
            'jasa' => $jasa,
            'biaya_jasa' => $biaya_jasa,
        );
        $this->db->insert('tbl_transaksi', $data);


        $this->cart->destroy();
        redirect('service/detail_service/' . $data['booking_id']);
    }

    public function simpan_cart()
    {
        $data = array(
            'booking_id'    => $this->input->post('booking_id'),
            'id'    => $this->input->post('kode_barang'),
            'qty'   => $this->input->post('jumlah'),
            'price' => $this->input->post('harga'),
            'name'  => $this->input->post('nabar'),
        );
        $this->cart->insert($data);
        redirect('service/konfirmasi_service/' . $data['booking_id']);
    }

    public function simpan_cart_jasa()
    {
        $data = array(
            'booking_id' => $this->input->post('booking_id'),
            'jasa' => $this->input->post('jasa'),
            'biaya_jasa' => $this->input->post('biaya_jasa'),
        );
        $this->cart->insert($data);
        redirect('service/konfirmasi_service/' . $data['booking_id']);
    }

    public function hapus_cart($id)
    {
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $data = array(
            // 'booking_id'    => $id,
            'rowid'    => $id,
            'qty'   => 0,
        );
        $this->cart->update($data);
        redirect('service/konfirmasi_service/' . $uriSegments[5]);
    }

    public function cek_barang()
    {
        $kode_barang = $this->input->post('kode_barang');
        $cek = $this->db->query("SELECT * FROM barang WHERE kode_barang='$kode_barang'")->row();
        $data = array(
            'stok' => $cek->stok,
            'harga' => $cek->harga,
            'kode_barang' => $cek->kode_barang,
            'nama_barang' => $cek->nama_barang,
        );
        echo json_encode($data);
    }

    //testing

    // END ADMIN SESSION

    // USER SESSION
    public function detail_service_user($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);
        $data['detailserv'] = $this->service_model->transaksi_detail($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('admin/detail_servis', $data);
        $this->load->view('templates/footer');
    }

    public function detail_trans_user($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kelola Servis - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);
        $data['detailserv'] = $this->service_model->transaksi_detail_inside($id);
        $data['totalhrg'] = $this->service_model->get_totalharga($id);

        // View Page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/u_sidebar', $data);
        $this->load->view('admin/detail_servis_trans', $data);
        $this->load->view('templates/footer');
    }
}
