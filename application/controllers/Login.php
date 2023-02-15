<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('auth/login');
	}


	public function verify(){


		$info = array(

				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				
		);

		echo json_encode($info);
	}
}
