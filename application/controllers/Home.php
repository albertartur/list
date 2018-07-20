<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__Construct();
		$this->load->model('UsersModel');
	}
	public function index()
	{	
		$data['cats']=$this->UsersModel->get_cats(1);
		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
}