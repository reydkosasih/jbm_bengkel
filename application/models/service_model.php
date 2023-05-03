<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
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
}
