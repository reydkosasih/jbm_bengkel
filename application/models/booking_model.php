<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    public function show_idbook()
    {
        $this->db->select('booking_id');
        $this->db->from('tbl_booking');
        $this->db->limit(1);
        $this->db->order_by('booking_id', 'desc');
        $query = $this->db->get()->row();
        return $query;
    }

    public function riwayat_book($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->join('tbl_user', 'tbl_user.id = tbl_booking.customer_id');
        $this->db->where('tbl_booking.customer_id', $id);
        $query = $this->db->get()->result();
        return $query;
    }

    function input_booking()
    {
        $this->db->trans_start();

        $inbooking = [
            'customer_id' => $this->input->post('customer_id', true),
            'tgl_servis' => $this->input->post('tgl_servis', true),
            'jam_servis' => $this->input->post('jam_servis', true),
            'email_customer' => $this->input->post('email_customer', true),
            'nama_customer' => $this->input->post('nama_customer', true),
            'no_telp' => $this->input->post('no_telp', true),
            'nama_mobil' => $this->input->post('nama_mobil', true),
            'merk_mobil' => $this->input->post('merk_mobil', true),
            'transmisi' => $this->input->post('transmisi', true),
            'plat_no' => $this->input->post('plat_no', true),
            'layanan_servis' => $this->input->post('layanan_servis', true),
            'keluhan' => $this->input->post('keluhan', true),
        ];
        $this->db->insert('tbl_booking', $inbooking);

        $inservis = [
            'booking_id' => $this->input->post('booking_id', true),
            'customer_id' => $this->input->post('customer_id', true),
        ];
        $this->db->insert('tbl_service', $inservis);

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            echo 'gagallll';
        } else {
            // echo 'berhasilll WOW';
            redirect('user');
        }
    }
}
