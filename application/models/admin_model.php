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
		$this->db->delete('categories',array('id'=>$id));
	}
	public function update_categorie($id,$name,$section){
		$data=array(
		         'name'=>$name,
		          'glob'=>$section);
		$this->db->where('id',$id);
		$this->db->update('categories',$data);
	}
}