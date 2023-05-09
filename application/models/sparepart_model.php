<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart_model extends CI_Model
{
    function show_sparepart()
    {
        return $this->db->get("tbl_sparepart")->result();
    }

    function add_data()
    {
        $this->db->trans_start();

        $insert = [
            'kode_barang' => $this->input->post('kode_barang', true),
            'nama_barang' => $this->input->post('nama_barang', true),
            'stok' => $this->input->post('stok', true),
            'harga' => $this->input->post('harga', true),
        ];
        $this->db->insert('barang', $insert);

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            echo 'gagallll';
        } else {
            // echo 'berhasilll WOW';
            redirect('sparepart');
        }
    }
}
