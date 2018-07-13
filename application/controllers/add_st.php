<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_st extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('add_st/index');
		$this->load->view('footer');
	}
	public function add($x)
	{
		$x=1;
		$this->load->view('header');
		$this->load->view("add_st/add");
		$this->load->view('footer');
	}

}