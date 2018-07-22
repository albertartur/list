<?php
//////////////////////M//////////////////////////
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct(){
		parent::__Construct();
		$this->load->model('UsersModel');
	}
	public function index($id)
	{
		if ($id < 127) {
			$data['all'] = $this->UsersModel->get_pro($id);
			$data['top'] = $this->UsersModel->get_top_pro($id);
		}
		else{
			header('location:'.base_url('category/work/'.$id));
		}
		$this->load->view('header');
		$this->load->view('category/index',$data);
		$this->load->view('footer');
	}
	public function ads($id)
	{
		$this->load->view('header');
		$data['all'] = $this->UsersModel->get_pro_ads($id);
		$data['rand'] = $this->UsersModel->get_rand_ads($id);
		$data['user'] = $this->UsersModel->get_user_ads($id);
		$this->load->view('category/ads',$data);
		$this->load->view('footer');
	}
	public function work($id)
	{
		if ($id < 127) {
			header('location:'.base_url('category/index/'.$id));
		}
		$data['list'] = $this->UsersModel->get_pro($id);
		$data['tops'] = $this->UsersModel->get_top_pro($id);
		$this->load->view('header');
		$this->load->view('category/work',$data);
		$this->load->view('footer');
	}
	public function search()
	{
		$search = $this->input->post('search');
		$list = $this->UsersModel->search_el();

		$json = [];
		foreach ($list as $val) {
			$str =  $val['name'];
			$desc = $val['description'];
			$str1 = explode(' ', $str);
			$desc1 = explode(' ', $desc);
			if (array_search($search, $str1) || array_search($search, $desc1)) {
				$arr = [$val['name'],$val['id']];
				array_push($json, $arr);
			}
			if ($search === $val['name'] || $search === $val['description']) {
				$arr = [$val['name'],$val['id']];
				array_push($json, $arr);
			}
		}
		echo json_encode($json);

	}
}