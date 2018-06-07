<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masak2 extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '3'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login1');
		}

		//load model -> model_products
	//	$this->load->model('model_orders');
	}

	public function index()
	{

		$this->load->view('backend/v_masak2');
	}

}
