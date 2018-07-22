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
		$all['top']=$this->UsersModel->get_all_pro();
		$this->load->view('header',$all);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	public function adv()
	{
		$this->load->view('header');
		$this->load->view('adv');
		$this->load->view('footer');
	}
	public function contact_us()
	{
		$this->load->view('header');
		$this->load->view('contact_us');
		$this->load->view('footer');
	}
	public function terms()
	{
		$this->load->view('header');
		$this->load->view('terms');
		$this->load->view('footer');
	}
}
