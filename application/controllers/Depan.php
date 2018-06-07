<?php
class Depan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_products');
	}

	public function index()
	{
		//$data['products'] = $this->model_products->all();
		$this->load->view('home');
	}
}
 ?>
