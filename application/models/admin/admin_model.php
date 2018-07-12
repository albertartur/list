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
}