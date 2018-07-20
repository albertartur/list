<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_st extends CI_Controller {
	public function __construct(){
		parent::__Construct();
		$this->load->model('UsersModel');
		$this->load->model('admin/admin_model');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('add_st/index');
		$this->load->view('footer');
	}
	public function add($x)
	{	
		$data['inputs']=$this->UsersModel->get_inputs($x);
		foreach ($data['inputs'] as $key => $value) {
			$arr['inputs'][]=$data['inputs'][$key]['sub_input'];
		}
		$arr1['all']=$arr['inputs'];
		$this->load->view('header');
		$this->load->view("add_st/add",$arr1);
		$this->load->view('footer');

	}
	public function getfrom_sec(){
		$sec_id=$this->input->post('id');
		$data['all']=$this->UsersModel->get_cats($sec_id);
		print_r( json_encode($data['all']));
	}
	public function getfrom_cat(){
		$cat_id=$this->input->post('id');
		$data['all']=$this->UsersModel->get_subcats($cat_id);
		print_r( json_encode($data['all']));
	}
	public function add_statement(){
		$sub_id=$this->input->post('sub_id');
	 	$arr=$this->input->post('assoc');
	 	$arr_serializ=serialize($arr);
	 	// $loc=$this->input->post('loc');
	 	// $title=$this->input->post('title');
	 	// $desc=$this->input->post('desc');
		 //print_r(json_decode($arr, true));
		 //echo $arr_serializ;
		// echo $sub_id;
	 $this->UsersModel->add_statement($sub_id,$arr_serializ);

	}
	// public function get_inp($x){
	// 	$data['inputs']=$this->UsersModel->get_inputs($x);
	// 	foreach ($data['inputs'] as $key => $value) {
	// 		$arr['inputs'][]=$data['inputs'][$key]['sub_input'];
	// 	}
	// 	//print_r( json_encode($arr));
	// 	echo ($arr['inputs'][0]);
	// }

}