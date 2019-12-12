<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang1_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'barang1_view';
			$data['barang'] = $this->Barang1_model->get_barang();

			//get_kategori untuk dropdown tambah/edit barang
			$data['kategori'] = $this->Barang1_model->get_kategori();
			$this->load->view('template', $data);

		} else {
			redirect('login/index');
		}
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
