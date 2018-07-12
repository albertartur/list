<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('category/index');
		$this->load->view('footer');
	}
		public function ads()
	{
		$this->load->view('header');
		$this->load->view('category/ads');
		$this->load->view('footer');
	}
}