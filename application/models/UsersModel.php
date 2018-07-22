<?php
class UsersModel extends CI_Model
{
  

  public function check_model($email,$password){
   $query = $this->db->get_where('users', array('mail' => $email,'password'=>$password));
   if($query->num_rows()>0){
    return true;     
   }
    return false;
  }

  
  public function reset_password($email,$security_code)
  {
          $this->db->set('password', $security_code);
          $this->db->where('mail', $email);
          $this->db->update('users');
  }

    //register_model
  public function register_model($email,$password)
  {
       $this->db->query("insert into users(mail,password) values('$email','$password')");
  }


  // edit_profil_model
    public function edit_profil_model($user_name,$location_user,$file_name,$user_id,$wallet_number){
         

     $data = array(
            'image' => $file_name,
            'user_name' => $user_name,
            'location_user' => $location_user,
            'wallet_number'=> $wallet_number   
                      );

         $this->db->where('id', $user_id);
         $this->db->update('users', $data);

       
    
    } 

    // select profil data
    public function select_profil_model($user_id)
    {
        $query = $this->db->query("select user_name,image,location_user from users where id='$user_id'");
        return  $query->result_array();
    }


    // edit contact_information
    public function edit_contact_inf_model($serialize,$user_id)
    {
      $this->select_profil_model($user_id);
         $data = array('contact_information' => $serialize);

         $this->db->where('id', $user_id);
         $this->db->update('users', $data);
    }

   //select contact_information_model  data
   public function contact_information_model($user_id)
   {

      $query = $this->db->query("select contact_information from users where id='$user_id'");
      return  $query->result_array();

   }

   // edit_password_model
   public function edit_password_model($old_password,$new_password,$user_id)
   {
       $data = array('password' => $new_password);
       $query = $this->db->update('users',$data,array('id'=>$user_id,'password'=>$old_password));
        if($this->db->affected_rows())
        {
          echo 'Dzer popoxutyun@ katarvace';
        }
        else{echo 'Xndrum enq chisht mutqagreq dzer hin gaxtanabr@';}    

   }
   
   // edit email
   public function edit_email_model($new_email,$password,$user_id)
   {
       $data = array('mail' => $new_email);
       $query = $this->db->update('users',$data,array('id'=>$user_id,'password'=>$password));
        if($this->db->affected_rows())
        {
          echo 'Dzer popoxutyun@ katarvace';
        }
        else{
          echo 'Xndrum enq chisht mutqagreq dzer  gaxtanabr@';}   
   }


   public function delete_my_profil_model($password,$user_id)
   {
      
     $delete = $this->db->query("delete from users where id='$user_id' && password='$password' ");
   
  
     if ($this->db->affected_rows() > 0) {
          // redirect(base_url('UsersController/logout'));
      echo 'your profil is deleteed';
        }

      else{
          echo 'Xndrum enq chisht mutqagreq dzer  gaxtanabr@';
      }
       
    }     
    public function get_cats($sec_id){
      $query=$this->db->get_where('categories',array('glob'=>$sec_id))->result_array();
      return $query;
    } 
    public function get_subcats($cat_id){
      $query=$this->db->get_where('subcategories',array('cat_id'=>$cat_id))->result_array();
      return $query;
    }
    public function get_inputs($sub_id){
      $this->db->select('sub_input');
      $query=$this->db->get_where('subcat_inputs',array('sub_id'=>$sub_id))->result_array();
      return $query;
    }
    ///////////////////////////////////////////////////////////////
    public function add_statement($sub_id,$arr_serializ,$user_id){
        $data=array(
            'id'=>Null,
            'sub_id'=>$sub_id,
            'us_id'=>$user_id,
            'data_of_put'=>Null,
            'info_array'=>$arr_serializ
            );
        $this->db->insert('statement',$data);

      }
    public function get_pro($id){
        $query=$this->db->get_where('products',array('sub_id'=>$id))->result_array();
        return $query;
    }
    
    public function get_pro_ads($id){
        $query=$this->db->get_where('products',array('id'=>$id))->result_array();
        return $query;
    }
    public function get_all_pro(){
      $x = rand(0,3);
        $query=$this->db->get('products',20,$x)->result_array();
        return $query;
    }
    public function get_rand_ads($id){
        $this->db->select('sub_id');
        $sub_id=$this->db->get_where('products',array('id'=>$id))->row();
        $query = $this->db->get_where('products',array('sub_id'=>$sub_id->sub_id),2)->result_array();
        return $query;
    }
    public function get_user_ads($id){
        $this->db->select('us_id');
        $us_id = $this->db->get_where('products',array('id'=>$id))->row();
        $query = $this->db->get_where('users',array('id'=>$us_id->us_id))->result_array()[0];
        return $query;
    }
    public function get_my_user_ads($id){
        $query = $this->db->get_where('users',array('id'=>$id))->result_array();
        return $query[0];
    }
    public function get_my_ads($id){
        if ($id) {   
            $query = $this->db->get_where('products',array('us_id'=>$id),4)->result_array();
            return $query;
        }
        else{
            header('Location:'.base_url('UsersController/index'));
        }
    }
    public function search_el(){
        $this->db->select('id,name,description');
        $query=$this->db->get('products')->result_array();
        return $query;
    }
    public function get_top_pro($id){
        $query=$this->db->get_where('products',array('sub_id'=>$id),3)->result_array();
        return $query;
    }

}