<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_c extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('user_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['product'] = $this->product_model->getAllProduct();

		$this->load->view('template/header');
		$this->load->view('product/index',$data);
		$this->load->view('template/footer');
	}

     public function register()
     {

	     //$this->load->helper('form');
	     //$this->load->library('form_validation');

	     $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
	     $this->form_validation->set_rules('email', 'Email', 'required', array('required'=>'*Email mohon di isi'));
	     $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array('required'=>'*Password mohon di isi'));
	     $this->form_validation->set_rules('telepon', 'No. Telepon', 'required', array('required'=>'*Nomor Telepon mohon di isi'));
	     $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required'=>'*Alamat mohon di isi'));

		      if($this->form_validation->run() === FALSE){

		        $this->load->view('template/header');
		        $this->load->view('user/form_registrasi');
		        $this->load->view('template/footer');

		      }else{

		        $this->user_model->set_users();
		        redirect('user/login');  
		      }
    
    	}

	public function login()
	{
		 $this->load->helper('form');
	     $this->load->library('form_validation');

	     $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
	     $this->form_validation->set_rules('email', 'Email', 'required', array('required'=>'*Email mohon di isi'));
	     $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array('required'=>'*Password mohon di isi'));
	     $this->form_validation->set_rules('telepon', 'No. Telepon', 'required', array('required'=>'*Nomor Telepon mohon di isi'));
	     $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required'=>'*Alamat mohon di isi'));

		      if($this->form_validation->run() === FALSE){

		        $this->load->view('template/header');
		        $this->load->view('user/form_login');
		        $this->load->view('template/footer');

		      }else{

		        $this->user_model->set_users();
		        redirect('product');  
		      }
    
    	}


	public function delete($id)
	{
		// return $this->product_model->delete_product($id);
		// redirect('product');
	}
}


        //         $this->load->helper(array('form', 'url'));

        //         $this->load->library('form_validation');

        //         $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
        //         $this->form_validation->set_rules('password', 'Password', 'required');
        //         $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        //         $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

        //         if ($this->form_validation->run() == FALSE)
        //         {
        //                 $this->load->view('myform');
        //         }
        //         else
        //         {
        //                 $this->load->view('formsuccess');
        //         }
        // }

        // public function username_check($str)
        // {
        //         if ($str == 'test')
        //         {
        //                 $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
        //                 return FALSE;
        //         }
        //         else
        //         {
        //                 return TRUE;
        //         }
		
 

