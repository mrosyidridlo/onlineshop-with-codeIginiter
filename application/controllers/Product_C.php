<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_C extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['product'] = $this->product_model->getAllProduct();

		$this->load->view('template/header');
		$this->load->view('product/index',$data);
		$this->load->view('template/footer');
	}

	pubLic function dashboard()
	{

		$data['product'] = $this->product_model->getAllProduct();

		$this->load->view('template/header');
		$this->load->view('product/dashboard',$data);

		//$this->load->view('template/footer');		



	}


	public function detail($url = NULL)
	{

		$data['product'] = $this->product_model->getAllProduct($url);

		$this->load->view('template/header');
		$this->load->view('product/detail',$data);
		$this->load->view('template/footer');

	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Produk', 'required', array('required'=>'*Kolom nama produk mohon di isi'));
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required', array('required'=>'*Kolom kategori produk mohon di isi'));
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required',array('required'=>'*Kolom harga produk mohon di isi'));
		//$this->form_validation->set_rules('foto', 'Foto Produk', 'required', array('required'=>'*Kolom foto produk mohon di isi'));
		$this->form_validation->set_rules('tag', 'Tag Produk', 'required', array('required'=>'*Kolom tag produk mohon di isi'));

		if($this->form_validation->run() === FALSE){

		$this->load->view('template/header');
		$this->load->view('product/create');
		$this->load->view('template/footer');

		}else{
			$this->product_model->set_product();
			redirect('product');
		}
	}

	public function update($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('foto', 'Foto Produk', 'required');
		$this->form_validation->set_rules('tag', 'Tag Produk', 'required');

		if($this->form_validation->run() === FALSE){

		$data['product'] = $this->product_model->get_product_id($id);
		$this->load->view('template/header');
		$this->load->view('product/update',$data);
		$this->load->view('template/footer');

		}else{
			$this->product_model->update_product($id);
			redirect('product');
		}


	}	

	public function delete($id)
	{
		return $this->product_model->delete_product($id);
		redirect('product');
	}


	// public function product_pagination($page_param=1){

		
	// 	$dataProduct = $this->model->getProductLimit($page_param);

	// 	$dataView = array(

	// 		'dataViewProduct' => $dataProduct
		
	// 	);

	// 	$data = array(

	// 		'tittle' 	=> "list Product Pagination",
	// 		'content' 	=> $this->load->view('product/dashboard', $dataView, TRUE),
	// 	);

	// 	$this->view_template($data);
	// }
}

