<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{  
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
   public function index(){
   	$this->load->view('login');
   }

   public function check_admin(){
   	$log=$this->input->post('login');
   	$pass=$this->input->post('password');
    $this->load->model('admin_model');///create an object of admin_model name is admin_model
     if($this->admin_model->check_admin($pass,$log)){
    	redirect('Admin/home');///its go to home method of admin class
     }
    else {
     	redirect('Admin/index');
    }
   }
   public function home(){
   	$this->load->model('admin_model');
   	$data['all']=$this->admin_model->get_categories();
     $this->load->view('home',$data);
   }
   public function Add_categorie(){
   	$name=$this->input->post('name');
   	$section=$this->input->post('section');
   	$this->load->model('admin_model');
   	$this->admin_model->insert_categorie($name,$section);

   	
   }
   public function Delete_categorie(){
   	$id=$this->input->post('id');
   	$this->load->model('admin_model');///admin modelo object
   	$this->admin_model->delete_categorie($id);
   }
   public function Update_categorie(){
   	$id=$this->input->post('id');
   	$name=$this->input->post('name');
   	$section=$this->input->post('section');
   	$this->admin_model->update_categorie($id,$name,$section);
   }

}