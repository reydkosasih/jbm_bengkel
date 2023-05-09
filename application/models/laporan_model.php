<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    function show_service()
    {
        // return $this->db->get("tbl_booking")->result();
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->order_by('booking_id', 'desc');
        return $this->db->get()->result();
    }

    function show_service_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_booking');
        $this->db->where('booking_id', $id);
        return $this->db->get()->row();
    }

    public function transaksi_detail()
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_booking', 'tbl_booking.booking_id = tbl_transaksi.booking_id');
        // $this->db->where('tbl_transaksi.booking_id', $id);
        return $this->db->get()->result();
    }

    public function data_sparepart()
    {
        $this->db->select('*');
        $this->db->from('barang');
        return $this->db->get()->result();
    }

    public function get_totalharga($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('tbl_transaksi.booking_id', $id);
        return $this->db->get()->row();
    }

    public function transaksi_detail_inside($id)
    {
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('tbl_transaksi', 'detail_transaksi.booking_id = tbl_transaksi.booking_id');
        $this->db->join('barang', 'detail_transaksi.kode_barang = barang.kode_barang');
        $this->db->where('detail_transaksi.booking_id', $id);
        return $this->db->get()->result();
    }
}
