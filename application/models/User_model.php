<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{


	public function __construct()
	{
		parent::__construct();

	
	}

	public function insert_user()
	{
		$this->load->helper('string');

		$_SESSION['token'] = random_string('alnum',16);
		
		$data = array(

				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				//'password' => ($this->input->post('password'), PASSWORD_DEFAULT),
				'telepon' => $this->input->post('telepon'),
				'address' => $this->input->post('alamat'),
				'token' => $_SESSION['token']
			);
		return $this->db->insert('auth',$data);
			
	}

	public function get_user($key, $value)
	{
		$query = $this->db->get_where('auth',array($key => $value));
		if(!empty($query->row_array())){
			return $query->row_array();
		}

		return false;
	}

	public function update_role($user_id, $role_nr)
	{
		$data = array('role' => $role_nr);
		$this->db->where('id_user', $user_id);
		return $this->db->update('auth', $data);

	}

	public function is_LoggedIn()
	{
		if(!isset($_SESSION['logged_in'])) {

			return false;

		}

			return true;
	}

	public function checkPassword($email, $password)
	{
		
		$md5 = $this->get_user('email', $email)['password'];

			// print_r($hash);

			// echo "<br>";

			// print_r(md5($password));

			// echo "<br>";
		 
		 
			if (md5($password) == $md5) {

				 return true;

				}

				return false;
	}
}