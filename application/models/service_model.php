<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
{
    function show_service()
    {
        return $this->db->get("tbl_service")->result();
    }
}
