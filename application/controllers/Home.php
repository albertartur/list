<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function lostpwd()
	{
		$this->load->view('header');
		$this->load->view('lostpwd');
		$this->load->view('footer');
	}
		public function verification()
	{
		$this->load->view('header');
		$this->load->view('verification');
		$this->load->view('footer');
	}
}