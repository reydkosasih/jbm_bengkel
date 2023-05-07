<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
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

    public function pembayaran($id)
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
        $this->load->view('user/bayar_page', $data);
        $this->load->view('templates/footer');
    }

    public function cek_pembayaran($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pembayaran - JBM';
        $data['datserv'] = $this->service_model->show_service_detail($id);
        $data['detailserv'] = $this->service_model->transaksi_detail_inside($id);
        $data['totalhrg'] = $this->service_model->get_totalharga($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/bayar_page', $data);
        $this->load->view('templates/footer');
    }


    public function transfer($id)
    {
        $this->db->trans_start();

        $data['tbl_booking'] = $this->db->get_where('tbl_booking', ['booking_id' => $this->session->userdata('booking_id')])->row_array();
        $booking_id = $this->input->post('booking_id');
        // $judgement = $this->input->post('judgement');

        // cek upload gambar
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/buktipay/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '7168';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['tbl_booking']['gambar'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/buktipay/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('transaksi/pembayaran/' . $booking_id);
            }
        }

        $this->db->where('booking_id', $booking_id);
        // $this->db->set('judgement', $judgement);
        $this->db->update('tbl_booking');
        $this->db->trans_complete();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile successfully updated! </div>');
        redirect('transaksi/pembayaran/' . $booking_id);
    }
}
