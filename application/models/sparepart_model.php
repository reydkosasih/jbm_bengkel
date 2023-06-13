<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart_model extends CI_Model
{
    function show_sparepart()
    {
        return $this->db->get("tbl_sparepart")->result();
    }

    public function show_byid($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('barang.id_barang', $id);
        return $this->db->get()->row();
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

    function edit_data()
    {
        $this->db->trans_start();

        $insert = [
            'id_barang' => $this->input->post('id_barang', true),
            'kode_barang' => $this->input->post('kode_barang', true),
            'nama_barang' => $this->input->post('nama_barang', true),
            'stok' => $this->input->post('stok', true),
            'harga' => $this->input->post('harga', true),
        ];
        // $this->db->update('barang', $insert);
        $this->db->update('barang', $insert, array('id_barang' => $insert['id_barang']));

        $this->db->trans_complete();

        if ($this->db->trans_status() === false) {
            echo 'gagallll';
        } else {
            // echo 'berhasilll WOW';
            redirect('sparepart');
        }
    }
}
