<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{  
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/admin_model');
    if ( ! $this->migration->current())
{
  show_error($this->migration->error_string());
}
	}
   public function index(){
   	$this->load->view('admin/login');
   }

   public function check_admin(){
   	 $log=$this->input->post('login');
   	 $pass=$this->input->post('password');///create an object of admin_model name is admin_model
     if($this->admin_model->check_admin($pass,$log)){
    	redirect (base_url('admin/home'));///its go to home method of admin class
     }
    else {
     	redirect('admin/Admin/index');
    }
   }
   public function home(){
   	$data['all']=$this->admin_model->get_categories();
     $this->load->view('admin/home',$data);
   }
   public function Add_categorie(){
   	$name=$this->input->post('name');
   	$section=$this->input->post('section');
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
   public function subcat($id){
    $data['all']=$this->admin_model->get_subcat($id);
    $data['parts']=$this->admin_model->get_parts();
    $this->load->view('admin/subcat',$data);
   }
   public function add_subcat(){
    $n=$this->input->post('name');
    $p=$this->input->post('part');
    $i=$this->input->post('cat_id');
    $this->admin_model->insert_subcat($n,$p,$i);
   }
   public function Delete_subcategorie(){
    $sub_id=$this->input->post('id');
    $this->admin_model->delete_subcategorie($sub_id);
   }
   public function Update_subcategorie(){
    $sub_id=$this->input->post('id');
    $cat_id=$this->input->post('cat_id');
    $name=$this->input->post('name');
    $section=$this->input->post('section');
    $this->admin_model->update_subcategorie($sub_id,$cat_id,$name,$section);
   }
   public function Add_subcat_inputs(){
    $sub_id=$this->input->post('sub_id');
    $name=$this->input->post('name');
    $this->admin_model->insert_subcat_input($sub_id,$name);
   }
   public function subcat_inputs($sub_id){
    $data['all']=$this->admin_model->get_subcat_inputs($sub_id);
    $this->load->view('admin/subcat_inputs',$data);
   
   }
   public function Delete_subcat_input(){
    $sub_id=$this->input->post('sub_id');
    $input_name=$this->input->post('name');
    $this->admin_model->delete_subcat_input($sub_id,$input_name);
   }
    public function show_wait_statement(){
    $data['wait_statement']=$this->admin_model->show_wait_statement();
    $this->load->view('admin/wait_statement',$data);
    }
    public function add_product(){
      $id=$this->input->post('id');
      $sub_id=$this->input->post('sub_id');
      $use_id=$this->input->post('use_id');
      $data_of_put=$this->input->post('data_of_put');
      $info_array=$this->input->post('info_array');
      $info_array=unserialize($info_array);
      $arr=json_decode($info_array,true);
      // print_r($arr);
      $location=$arr['location'];    
      $name=$arr['name'];    
      $desc=$arr['description'];   
      unset($arr['location']);
      unset($arr['name']);
      unset($arr['description']);
      // print_r($arr);
      // echo $name;
      $arr=serialize($arr);
      $this->admin_model->add_to_product($id, $sub_id, $use_id, $data_of_put, $arr, $location, $name, $desc);
  }
}