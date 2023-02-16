<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_up extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
