<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responsibility_center extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{   
        $data['title'] = 'Responsibility Center';
       
		$this->load->view('admin/responsibilty_center',$data);
	}


	public function add() {

		$data = array(

					'res_center_code' => $this->input->post('res_code'),
					'res_center_name' => $this->input->post('center_name'),
		);

		
	}
}
