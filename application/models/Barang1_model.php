<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang1_model extends CI_Model {

	public function get_barang(){
		return $this->db->join('kategori','kategori.id_kat = barang.id_kat')
						->get('barang')
						->result();
	}

	public function get_kategori(){
		return $this->db->get('kategori')
						->result();
	}

	public function get_data_barang_by_id($id)
	{
		return $this->db->where('id_barang', $id)
						->get('barang')
						->row();
	}


}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */
