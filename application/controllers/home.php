<?php
require_once 'base_controller.php';

class Home extends Base_Controller{
	public function __construct(){
		parent::__construct();
	}
		
	public function index()
	{
		$this->load->view("home");
	}	
}


