<?php
class Admin_model extends CI_Model{

	public function check_admin($pass,$log){
		$query=$this->db->get_where('admin',array('password'=>$pass,'login'=>$log))->num_rows();
		return $query;
 }
	public function get_categories(){
		$query=$this->db->get('categories')->result_array();
		return $query;
	}
	public function insert_categorie($name,$section){
		$this->db->insert('categories',array('id'=>Null,'name'=> $name,'glob'=>$section));
	}
	public function delete_categorie($id){
		$this->db->delete('subcategories',array('cat_id'=>$id));
		$this->db->delete('categories',array('id'=>$id));
	}
	public function update_categorie($id,$name,$section){
		$data=array(
		         'name'=>$name,
		          'glob'=>$section);
		$this->db->where('id',$id);
		$this->db->update('categories',$data);
	}
	public function get_subcat($id){
		$query=$this->db->get_where('subcategories',array('cat_id'=>$id))->result_array();
		return $query;
	}
	public function insert_subcat($name,$part,$cat_id){
		$this->db->insert('subcategories',array('id'=>Null,'name'=> $name,'bajin'=>$part, 'cat_id'=>$cat_id));
	}
	public function get_parts(){
		$this->db->distinct();
		$this->db->select('bajin');
		$query = $this->db->get('subcategories')->result_array();
		return $query;
	}
	public function delete_subcategorie($sub_id){
		$this->db->delete('subcategories',array('id'=>$sub_id));
	}
	public function update_subcategorie($sub_id,$cat_id,$name,$section){
		$data=array(
			     'cat_id'=>$cat_id,
		         'name'=>$name,
		          'bajin'=>$section);
		$this->db->where('id',$sub_id);
		$this->db->update('subcategories',$data);
	}
	public function get_subcat_inputs($sub_id){
		$query=$this->db->get_where('subcat_inputs',array('sub_id'=>$sub_id))->result_array();
		return $query;
	}
	public function insert_subcat_input($sub_id,$name){
		$this->db->insert('subcat_inputs',array('sub_id'=>$sub_id,'sub_input'=> $name));
	}
	public function delete_subcat_input($sub_id,$input_name){
		$this->db->delete('subcat_inputs',array('sub_id'=>$sub_id,'sub_input'=>$input_name));
	}
	public function show_wait_statement(){
		$query=$this->db->get('statement')->result_array();
		return $query;
	}
	public function add_to_product($id,$sub_id,$use_id,$data_of_put,$arr,$location,$name,$desc){
		$data=array(
		       'name'=>$name,
		        'sub_id'=>$sub_id,
		        'description'=>$desc,
		        'location'=>$location,
		        'data_of_put'=>$data_of_put,
		         'data_of_update'=>Null,
		         'info_array'=>$arr,
		          'us_id'=>$use_id
		      );
		$this->db->insert('products',$data);
		print_r($this->db->last_query());
		$this->db->delete('statement',array('id'=>$id));
	}

}