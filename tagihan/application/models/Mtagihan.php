<?php

class Mtagihan extends CI_Model{

	public function tampil_mahasiswa(){
		$query = $this->db->get("tagihan");
		return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("tagihan",$data);
	}

	public function delete_data($telpon){
		$this->db->where("telpon",$telpon);
		$this->db->delete("tagihan");
	}

	public function tampil_pemain_satuan($id) {
		$query = $this->db->get_where("tagihan", array('id'=>$id));
		return $query->row();
	}

	public function edit_data($data){
		$this->db->where('id', $data['id']);
		$this->db->update("tagihan",$data);
	}

}
