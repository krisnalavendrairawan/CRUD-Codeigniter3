<?php 
class Dashboard extends CI_Controller{
	public function index(){

		$this->load->model('Produk_model');

		$data = [
			'produk_count' => $this->Produk_model->count()
		];

		$this->load->view('admin/dashboard', $data);
	}
}
?>
