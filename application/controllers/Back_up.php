<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_up extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Back Up Database';
		$this->load->view('admin/back_up_database/back_up',$data);
	}


	public function save(){

		
	}
}
