<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_lokasi extends CI_Model
{
    // List all your items
    public function provinsi()
    {
        $this->db->select('*');
        $this->db->from('provinsi');
        // $this->db->order_by('id_provinsi', 'desc');
        return $this->db->get()->result();
    }

    // crud provinsi
    public function add($data)
    {
        $this->db->insert('provinsi', $data);
    }
    public function update($data)
    {
        $this->db->where('id_provinsi', $data['id_provinsi']);
        $this->db->update('provinsi', $data);
    }
    public function delete($data)
    {
        $this->db->where('id_provinsi', $data['id_provinsi']);
        $this->db->delete('provinsi', $data);
    }


    public function kabupaten()
    {
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
        // $this->db->join('kabupaten', 'kabupaten.id_kabupaten = kabupaten.id_kabupaten', 'left');
        // $this->db->join('kecamatan', 'kabupaten.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->order_by('id_kabupaten', 'desc');
        return $this->db->get()->result();
    }
    public function detail($id_kabupaten)
    {
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->join('provinsi', 'provinsi.id_provinsi = kabupaten.id_provinsi', 'left');
        $this->db->where('id_kabupaten', $id_kabupaten);
        return $this->db->get()->row();
    }
    // crud kabupaten
    public function add_kabupaten($data)
    {
        $this->db->insert('kabupaten', $data);
    }
    public function update_kabupaten($data)
    {
        $this->db->where('id_kabupaten', $data['id_kabupaten']);
        $this->db->update('kabupaten', $data);
    }
    public function delete_kabupaten($data)
    {
        $this->db->where('id_kabupaten', $data['id_kabupaten']);
        $this->db->delete('kabupaten', $data);
    }

    public function kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        // $this->db->join('provinsi', 'kecamatan.id_provinsi = provinsi.id_provinsi', 'left');
        $this->db->join('kabupaten', 'kecamatan.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->order_by('id_kecamatan', 'desc');
        return $this->db->get()->result();
    }
    public function detail_kecamatan($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        // $this->db->join('provinsi', 'provinsi.id_provinsi = kecamatan.id_provinsi', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kabupaten = kecamatan.id_kabupaten', 'left');
        $this->db->where('id_kecamatan', $id_kecamatan);
        return $this->db->get()->row();
    }
    // crud kecamatan
    public function add_kecamatan($data)
    {
        $this->db->insert('kecamatan', $data);
    }
    public function update_kecamatan($data)
    {
        $this->db->where('id_kecamatan', $data['id_kecamatan']);
        $this->db->update('kecamatan', $data);
    }
    public function delete_kecamatan($data)
    {
        $this->db->where('id_kecamatan', $data['id_kecamatan']);
        $this->db->delete('kecamatan', $data);
    }



    public function desa()
    {
        $this->db->select('*');
        $this->db->from('desa');
        // $this->db->join('provinsi', 'desa.id_provinsi = provinsi.id_provinsi', 'left');
        // $this->db->join('kabupaten', 'desa.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->order_by('id_desa', 'desc');
        return $this->db->get()->result();
    }
    public function detail_desa($id_desa)
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->where('id_desa', $id_desa);
        return $this->db->get()->row();
    }
    // crud desa
    public function add_desa($data)
    {
        $this->db->insert('desa', $data);
    }
    public function update_desa($data)
    {
        $this->db->where('id_desa', $data['id_desa']);
        $this->db->update('desa', $data);
    }
    public function delete_desa($data)
    {
        $this->db->where('id_desa', $data['id_desa']);
        $this->db->delete('desa', $data);
    }
}

/* End of file M_lokasi.php */
