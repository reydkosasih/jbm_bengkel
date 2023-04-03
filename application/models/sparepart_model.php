<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart_model extends CI_Model
{
    function show_sparepart()
    {
        return $this->db->get("tbl_sparepart")->result();
    }
}
