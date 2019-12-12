<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data['main_view']="galeri";
		$this->load->view('template', $data);		
	}

}
?>