<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pesan');
        $this->load->model('m_admin');
        $this->load->model('m_home');
    }
    public function chatting($id_pelanggan)
    {
        $this->form_validation->set_rules('pesan', 'Pesan', 'required', array(
            'pesan' => '%s Harus Diisii!!!'
        ));
        $data = array(
            'title' => 'Pesan Masuk',
            'chatting' => $this->m_pesan->chatting($id_pelanggan),
            'isi' => 'layout/backand/chatting/v_chatting'
        );
        $this->load->view('layout/backand/v_wrapper', $data);
    }
    public function send()
    {
        $data = array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'balas' => $this->input->post('pesan'),
            'isi_pelanggan' => '0'
        );
        $this->db->insert('chatting', $data);
        redirect('pesan/chatting/' . $data['id_pelanggan']);
    }
}
