<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'barang_view';
			$data['barang'] = $this->Barang_model->get_barang();

			//get_kategori untuk dropdown tambah/edit barang
			$data['kategori'] = $this->Barang_model->get_kategori();
			$this->load->view('template', $data);

		} else {
			redirect('login/index');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$this->form_validation->set_rules('kode_barang', 'Kode', 'trim|required');
			$this->form_validation->set_rules('nama_barang', 'Nama', 'trim|required');
			$this->form_validation->set_rules('stok', 'Stok', 'trim|required|numeric');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
			$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				//upload file
				$config['upload_path'] = './assets/foto/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2000000000';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('foto')){
					if($this->Barang_model->tambah($this->upload->data()) == TRUE)
					{
						$this->session->set_flashdata('notif', 'Tambah barang berhasil');
						redirect('barang/index');
					} else {
						$this->session->set_flashdata('notif', 'Tambah barang gagal');
						redirect('barang/index');
					}
				} else {
					$this->session->set_flashdata('notif', $this->upload->display_errors());
					redirect('barang/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('barang/index');
			}
		} else {
			redirect('login/index');
		}
	}

	public function ubah()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$this->form_validation->set_rules('ubah_kode_barang', 'Kode Barang', 'trim|required');
			$this->form_validation->set_rules('ubah_nama_barang', 'Nama Barang', 'trim|required');
			$this->form_validation->set_rules('ubah_stok', 'Stok', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_harga', 'Harga', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_kategori', 'Kategori', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Barang_model->ubah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah barang berhasil');
					redirect('barang/index');
				} else {
					$this->session->set_flashdata('notif', 'Ubah barang gagal');
					redirect('barang/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('barang/index');
			}


		} else {
			redirect('login/index');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->Barang_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus barang Berhasil');
				redirect('barang/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus barang gagal');
				redirect('barang/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function get_data_barang_by_id($id)
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data = $this->Barang_model->get_data_barang_by_id($id);
			echo json_encode($data);

		} else {
			redirect('login/index');
		}
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */