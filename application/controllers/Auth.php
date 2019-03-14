<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('user_model');
	
	}

	public function register()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
	    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[auth.email]');
	    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
	    $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]|min_length[4]');
	    $this->form_validation->set_rules('telepon', 'Number Telephone', 'required');
	    $this->form_validation->set_rules('alamat', 'Address', 'required');

		if ($this->form_validation->run() === FALSE){

			//$this->load->view('layouts/header');
			$this->load->view('auth/register');

		    }else{

		    	$this->user_model->insert_user();

		    	$this->send_email_verification($this->input->post('email'),$_SESSION['token']);
		 
		    	redirect('login');
		       
		    }

	}

	public function send_email_verification($email,$token)
	{
		$this->load->library('email');
		$this->email->from('prodev.web18@gmail.com', 'Admin Fiki Hijab');
		$this->email->to($email);
		$this->email->subject('register aplikasi auth local');
		$this->email->message("Klik untuk konfirmasi pendaftaran <a href='http://localhost/toko/index.php/verify/$email/$token'>Konfirmasi Email</a>");
		$this->email->set_mailtype('html');
		$this->email->send();

	}

	public function verify_register($email,$token)
	{
		$user = $this->user_model->get_user('email',$email);


		//cek email ada atau tidak

		if(!$user)
			die('email not exist');

		if($user['token'] !== $token)
			die('token not match');

		//update role

		$this->user_model->update_role($user['id_user'], 1);


		//set session
		$_SESSION['user_id']	=	$user['id_user'];
		$_SESSION['logged_in']	=	true;


		//redirect profile
		redirect('profile');

	}

	public function login()
	{
		//$this->load->library('session');
		//$referred_from = $this->session->userdata('referred_from', current_url());
		//$this->load->library('user_agent');
		
		
		if($this->user_model->is_LoggedIn()) {

		 //	$referred_from = $this->session->userdata('referred_from');
		   // redirect($referred_from,'refresh');
			redirect('product');

			
			//redirect($test, 'refresh');
			//echo ($_SERVER['HTTP_REFERER']);
			
			

		}

	
	    $this->form_validation->set_rules('email', 'Email', 'required|callback_checkEmail|callback_checkRole');
	    $this->form_validation->set_rules('password', 'Password', 'required|callback_checkPassword');
	  

		if ($this->form_validation->run() === FALSE){

			//$this->load->view('layouts/header');
			
			//$this->load->view('auth/login');
			$data['redirect_to'] = $this->input->get('redirect_to');
			$this->load->view('auth/login',$data);

		    }else{

		    	$user = $this->user_model->get_user('email', $this->input->post('email'));
		    	
		    	//SAVE DATA IN SESSION
		    	//SET SESSION
		    	$_SESSION['user_id']	=	$user['id_user'];
				$_SESSION['logged_in']	=	true;

		
		    	redirect($this->input->post('redirect_to'));
		       
		    }

	}



	public function checkEmail($email)
	{
		if (!$this->user_model->get_user('email',$email)) {

			$this->form_validation->set_message('checkEmail','email is not on database');

			return false;
		}

		return true;
	}



	public function checkPassword($password)
	{
		$user = $this->user_model->get_user('email', $this->input->post('email'));

			if(!$this->user_model->checkPassword($user['email'], $password)) {

				$this->form_validation->set_message('checkPassword','Password is incorrect');

				return false;
		}

		return true;
	} 


	public function checkRole($email)
	{
		$user = $this->user_model->get_user('email', $email);

		if($user['role'] == 0) {

			$this->form_validation->set_message('checkRole','email is not actived yet');
			return false;
		}

		return true;
	}



	public function logout()
	{
		unset($_SESSION['user_id'],$_SESSION['logged_in']);

		redirect('product');
	}

	public function addToCart($id)
	{
		
		$redirect_to = site_url('product/detail/'. $id);
		redirect("login?redirect_to=$redirect_to");

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
		
 

