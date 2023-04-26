<?php 

class Produk extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Produk_model');
	}

	public function index(){
		$data['produk'] = $this->Produk_model->get();
		if(count($data['produk']) <= 0){
			$this->load->view('admin/produk_empty.php', $data);
		}else{

			$this->load->view('admin/produk', $data);
		}
	}

	public function create(){
		$this->load->view('admin/produk_create');
	}

	public function store(){
		$harga = $this->input->post('harga');
		$qty = $this->input->post('qty');
		$total = $harga * $qty;
			$produk = [
				'nama_produk' => $this->input->post('nama_produk'),
				'desc_barang' => $this->input->post('desc_barang'),
				'qty' => $this->input->post('qty'),
				'harga' => $this->input->post('harga'),
				'total' => $total,
			];
			
			//total harga
			
			

			$saved = $this->Produk_model->insert($produk);
			redirect('admin/produk');
			$this->session->set_flashdata('message', 'Data berhasil disimpan');
		
	}

	public function edit($id){	
		$data['produk'] = $this->Produk_model->getById($id);
		$this->load->view('admin/produk_edit', $data);
	}

	public function update(){
		$harga = $this->input->post('harga');
		$qty = $this->input->post('qty');
		$total = $harga * $qty;
		$produk = [
			'id' => $this->input->post('id'),
			'nama_produk' => $this->input->post('nama_produk'),
			'desc_barang' => $this->input->post('desc_barang'),
			'qty' => $this->input->post('qty'),
			'harga' => $this->input->post('harga'),
			'total' => $total,
			'update_at' => date('Y-m-d H:i:s'),
		];

		$updated = $this->Produk_model->update($produk);
		if($updated){
			$this->session->set_flashdata('message', 'Data berhasil diupdate');
			redirect('admin/produk');
		}else{
			$this->session->set_flashdata('error', 'Data gagal diupdate');
		}
	}

	public function delete($id){
		$deleted = $this->Produk_model->delete($id);
		if($deleted){
			$this->session->set_flashdata('message', 'Data berhasil dihapus');
			redirect('admin/produk');
		}else{
			$this->session->set_flashdata('error', 'Data gagal dihapus');
		}
	}
}

?>
