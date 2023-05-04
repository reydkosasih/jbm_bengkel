<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    function show_userdata($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    function input_booking()
    {
        $this->db->trans_start();

        $inbooking = [
            'booking_id' => $this->input->post('booking_id', true),
            'customer_id' => $this->input->post('customer_id', true),
            'tgl_servis' => $this->input->post('tgl_servis', true),
            'jam_servis' => $this->input->post('jam_servis', true),
            'email_customer' => $this->input->post('email_customer', true),
            'nama_customer' => $this->input->post('nama_customer', true),
            'no_telp' => $this->input->post('no_telp', true),
            'nama_mobil' => $this->input->post('nama_mobil', true),
            'merk_mobil' => $this->input->post('merk_mobil', true),
            'jenis_mobil' => $this->input->post('jenis_mobil', true),
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
    }
}
