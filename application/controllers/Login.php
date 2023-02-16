<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $users_table = 'users';
	
	public function index()
	{
		$this->load->view('auth/login');
	}


	public function verify(){


		$where = array(

				'username' => $this->input->post('username'),
				// 'password' => $this->input->post('password'),
				
		);

		
	$pass = $this->input->post('password');
    $verify = $this->CountModel->count1($this->users_table,$where);

     
    if ($verify > 0) {

      		$data['response'] = true ; 
    
            $user = $this->GetModel->get($this->users_table,$where)[0];
            $x = password_verify($pass,$user['password']); 
            if ($x) {
                      $data['res'] = true;
                      $data['message'] = 'Success';
                      // $this->session->set_userdata($user);

            }else {

                      $data['res'] = false; 
                      $data['message'] = 'Invalid Password'; 
            }
       		
       	}else {

 
       		$data['response'] = false ;
          	$data['message'] = 'Username Not Found'; 

       	}

       	echo json_encode($data);




	}
}
