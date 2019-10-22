<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mtagihan');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mtagihan->tampil_mahasiswa();
		$this->load->view('vtagihan',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'telpon' => $this->input->post("telpon"),
			'nama' => $this->input->post("nama"),
			'harga' => $this->input->post("harga"),
		);
		$this->Mtagihan->tambah_data($insert);
		redirect('Tagihan/tampil');
	}


	public function edit_data($id){
		$data['dat'] = $this->Mtagihan->tampil_pemain_satuan($id);
		$this->load->view('vedit_data', $data);
	}

	public function edit_data_action(){
		$update = array(
			'id' => $this->input->post("id"),
			'telpon' => $this->input->post("telpon"),
			'nama' => $this->input->post("nama"),
			'harga' => $this->input->post("harga"),
		);
		$this->Mtagihan->edit_data($update);
		
		redirect('Tagihan/tampil');
	}

	public function delete_data($telpon){
		$this->Mtagihan->delete_data($telpon);
		redirect('Tagihan/tampil');
	}
}
