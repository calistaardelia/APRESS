<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi_model');
	}

	public function index()
	{
	// var_dump($_SESSION);die;
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'transaksi_view';

			//get_cart_content
			$data['cart_transaksi'] = $this->Transaksi_model->get_cart();
			$this->load->view('template', $data);

		} else {
			redirect('login/index');
		}
	}

	public function cari_barang()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->Transaksi_model->cari_barang() == TRUE)
			{
				redirect('transaksi/index');
			} else {
				$this->session->set_flashdata('notif', 'Data barang tidak ditemukan atau stok sudah habis!');
				redirect('transaksi/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function hapus_item_cart()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->Transaksi_model->hapus_item_cart() == TRUE)
			{
				redirect('transaksi/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus item cart gagal');
				redirect('transaksi/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function ubah_jumlah_cart()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->Transaksi_model->ubah_jumlah_cart() == TRUE){
				echo json_encode(1);
			} else {
				echo json_encode(0);
			}
		} else {
			redirect('login/index');
		}
	}

	public function get_total_belanja()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$total_belanja['total'] = $this->Transaksi_model->get_total_belanja();
			echo json_encode($total_belanja);

		} else {
			redirect('login/index');
		}
	}

	public function bayar()
	{
		if($this->session->userdata('logged_in') == TRUE){

			//insert ke tabel transaksi dulu
			if($this->Transaksi_model->tambah_transaksi() == TRUE)
			{
				$this->session->set_flashdata('notif', 'Proses pembelian berhasil');
				redirect('transaksi/index');

			} else {
				$this->session->set_flashdata('notif', 'Proses pembelian gagal');
				redirect('transaksi/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function getPoin()
	{
		header('Content-Type: application/json');
		$query = $this->db->get_where('user', ['id' => $this->input->post('id')])->result_array();
		echo json_encode($query);
	}

	public function riwayat()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'riwayat_transaksi_view';
			$data['riwayat'] = $this->Transaksi_model->get_riwayat_transaksi();

			$this->load->view('template', $data);
		} else {
			redirect('login/index');
		}
	}

	public function get_detail_transaksi_by_id($id)
	{
		if($this->session->userdata('logged_in') == TRUE){
			$detail_transaksi = $this->Transaksi_model->get_transaksi_by_id($id);
			$data['show_detail'] = "";
			$total = 0;
			$no = 1;
			$data['show_detail'] .= '<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Nama Barang</th>
										<th>Harga</th>
										<th>Jumlah</th>
										<th>Sub Total</th>
									</tr>';

			foreach ($detail_transaksi as $d) {
				$data['show_detail'] .= '<tr>
									<td>'.$no.'</td>
									<td>'.$d->nama_barang.'</td>
									<td>'.$d->harga.'</td>
									<td>'.$d->jumlah.'</td>
									<td>'.$d->harga*$d->jumlah.'</td>
								</tr>';

				$no++;
				$total += $d->harga*$d->jumlah;
			}
			$data['show_detail'] .= '</table>';
			$data['show_detail'] .= '<h3><p class="text-right">Total Belanja:</p></h3>
									<h2><p class="text-right">Rp '.$total.',- </p></h2>';
			echo json_encode($data);
			
	

		} else {
			redirect('login/index');
		}
	}

	public function cetak_nota()
	{
		$this->load->view('cetak_nota_view');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */
