<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller{



		function index(){
			$this->load->model('product_model');
			$data['products'] = $this->product_model->getAllProduct();
			$this->load->view('template/templateadmin',$data);
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




		



	}




