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
	public function my()
	{
		$this->load->view('header');
		$this->load->view('my');
		$this->load->view('footer');
	}
	public function messages()
	{
		$this->load->view('header');
		$this->load->view('messages');
		$this->load->view('footer');
	}
	public function wallet()
	{
		$this->load->view('header');
		$this->load->view('wallet');
		$this->load->view('footer');
	}
	public function profile()
	{
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function account()
	{
		$this->load->view('header');
		$this->load->view('account');
		$this->load->view('footer');
	}
	public function notific()
	{
		$this->load->view('header');
		$this->load->view('notific');
		$this->load->view('footer');
	}
	public function blocked_user()
	{
		$this->load->view('header');
		$this->load->view('blocked_user');
		$this->load->view('footer');
	}
	public function logout()
	{
		$this->load->view('header');
		$this->load->view('logout');
		$this->load->view('footer');
	}
}