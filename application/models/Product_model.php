<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	
	}

	public function getAllProduct($url = FALSE)
	{
		// $query = $this->db->get('produk');
		// return $query->result_array();
		if($url === FALSE){
			$query = $this->db->get('produk');
			return $query->result_array();
		}

			$query = $this->db->get_where('produk', array('url' => $url));
			return $query->row_array();
	}


	public function get_product_id($id = FALSE)
	{
	    $query = $this->db->get_where('produk', array('id_produk' => $id));
	    return $query->row_array();
	}

	public function set_product()
	{
		$this->load->helper('url');

		$config = array(
			'upload_path' 	=> './assets/img/produk/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size'		=> 2000,
			'overwrite'		=> TRUE,
		);
		
		$this->load->library('upload',$config);

		if($this->upload->do_upload('foto')){

			$url = url_title($this->input->post('nama'), 'dash', true);

			$data = array(

				'nama_produk' => $this->input->post('nama'),
				'kategori_produk' => $this->input->post('kategori'),
				'harga_produk' => $this->input->post('harga'),
				'foto_produk' => $this->upload->data('file_name'),
				'tag_produk' => $this->input->post('tag'),
				'url' => $url
			);

			return $this->db->insert('produk',$data);
			
		}
		else 
		{
			echo $this->upload->display_errors();
			exit();
		}
		
	}

	public function update_product($id)
	{
		
		$this->load->helper('url');

	    $slug = url_title($this->input->post('nama_produk'), 'dash', TRUE);

	    $data = array(
	      	'nama_produk' => $this->input->post('nama'),
			'kategori_produk' => $this->input->post('kategori'),
			'harga_produk' => $this->input->post('harga'),
			'foto_produk' => $this->input->post('foto'),
			'tag_produk' => $this->input->post('tag'),
			'url' => $url
	    );

    	$this->db->where('id_produk', $id);
    	return $this->db->update('produk', $data);
	}

	public function delete_product($id)
	{

		return $this->db->delete('produk', array('id_produk'=>$id));
	
	}


	// public function getProductLimit($page){

	// 	//$this->db->limit(5,(5*($page-1)));
	// 	// $this->db->limit(5,3);
	// 	$query = $this->db->get('product',3,5);

	// 	$data = $query->result();
	// 	return $data;
	// }

}

