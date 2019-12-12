<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

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

	public function tambah($foto)
	{
		$data = array(
				'kode_barang' 	=> $this->input->post('kode_barang'),
				'nama_barang' 	=> $this->input->post('nama_barang'),
				'id_kat'		=> $this->input->post('kategori'),
				'stok'			=> $this->input->post('stok'),
				'harga'			=> $this->input->post('harga'),
				'foto'			=> $foto['file_name']
			);

		$this->db->insert('barang', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah()
	{
		$data = array(
				'kode_barang' 	=> $this->input->post('ubah_kode_barang'),
				'nama_barang' 	=> $this->input->post('ubah_nama_barang'),
				'id_kat'		=> $this->input->post('ubah_kategori'),
				'stok'			=> $this->input->post('ubah_stok'),
				'harga'			=> $this->input->post('ubah_harga')
			);

		$this->db->where('id_barang', $this->input->post('ubah_id_barang'))
				 ->update('barang', $data);
		
		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapus()
	{
		$this->db->where('id_barang', $this->input->post('hapus_id_barang'))
				 ->delete('barang');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */