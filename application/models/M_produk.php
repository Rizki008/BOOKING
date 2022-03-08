<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{

    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->order_by('id_produk', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('produk', $data);
    }

    public function update($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('produk', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('produk');
    }
}
