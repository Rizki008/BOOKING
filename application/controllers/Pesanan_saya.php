<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_boking');
		$this->load->model('m_pembayaran');
		$this->load->model('m_home');
	}

	public function index()
	{
		$data = array(
			'title' => 'Boking',
			'boking' => $this->m_boking->boking(),
			'data_boking' => $this->m_pembayaran->data_boking(),
			'isi' => 'layout/frontend/boking/v_pesanan_saya'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function bayar($id_bayar)
	{
		$this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required|regex_match[/^([a-zA-Z]|\s)+$/]',  array('pesan' => '%s Mohon Untuk Diisi',));
		$this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('pesan' => '%s Mohon Untuk Diisi',));
		$this->form_validation->set_rules('no_rek', 'Nomor Rekening', 'required', array('pesan' => '%s Mohon Untuk Diisi',));
		$this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required', array('pesan' => '%s Mohon Untuk Diisi',));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/bukti_bayar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "bukti_bayar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Bayar Boking Servis',
					'bayar' => $this->m_pembayaran->detail_boking($id_bayar),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'layout/frontend/boking/v_bayar'
				);
				$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/bukti_bayar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_bayar' => $id_bayar,
					'atas_nama' => $this->input->post('atas_nama'),
					'nama_bank' => $this->input->post('nama_bank'),
					'no_rek' => $this->input->post('no_rek'),
					'jumlah_bayar' => $this->input->post('jumlah_bayar'),
					'status' => '3',
					'bukti_bayar' => $upload_data['uploads']['file_name'],
				);
				$this->m_pembayaran->upload_buktibayar($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Konfirmasi');
				redirect('pesanan_saya');
			}
		}
		$data = array(
			'title' => 'Pembayaran',
			'bayar' => $this->m_pembayaran->detail_boking($id_bayar),
			// 'rekening' => $this->m_boking->rekening(),
			'isi' => 'layout/frontend/boking/v_bayar'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function dibatalkan($id_bayar)
	{
		$data = array(
			'id_bayar' => $id_bayar,
			'status' => 5
		);
		$this->m_pembayaran->update_admin($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
		redirect('pesanan_saya');
	}

	public function cod($id_bayar)
	{
		$this->form_validation->set_rules('status', 'Status', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/bukti_bayar';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "bukti_bayar";
			if (!$this->upload->do_upload($field_name)) {
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/bukti_bayar' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_bayar' => $id_bayar,
					'status' => $this->input->post('status'),
					'bukti_bayar' => $upload_data['uploads']['file_name'],
				);
				$this->m_pembayaran->update_admin($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
				redirect('pesanan_saya');
			}
		}
	}

	public function detail_selesai($no_boking)
	{
		$this->form_validation->set_rules('isi', 'Catatan', 'required', array('required' => '%s Mohon untuk Diisi!!!'));
		$this->form_validation->set_rules('nama_pelanggan', 'Catatan', 'required', array('required' => '%s Mohon untuk Diisi!!!'));

		$data = array(
			'title' => 'Pesanan',
			'pesanan_detail' => $this->m_pembayaran->pesanan_detail($no_boking),
			'info' => $this->m_pembayaran->info($no_boking),
			'isi' =>  'layout/frontend/riview/v_riview'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function insert_riview()
	{
		$data['insert'] = $this->m_pembayaran->insert_riview();
		$this->session->set_flashdata('pesan', 'Berhasil Memberi Riview');
		redirect('pesanan_saya');
	}
}
