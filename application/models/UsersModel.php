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
    public function edit_profil_model($user_name,$location_user,$file_name,$user_id){
    	
      

         $data = array(
        'image' => $file_name,
        'user_name' => $user_name,
        'location_user' => $location_user    
                      );

         $this->db->where('id', $user_id);
         $this->db->update('users', $data);
    
    } 

    // edit contact_information
    public function edit_contact_inf_model($serialize,$user_id)
    {
         $data = array('contact_information' => $serialize);

         $this->db->where('id', $user_id);
         $this->db->update('users', $data);
    }

   //contact_information_model
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
   	    else{echo 'Xndrum enq chisht mutqagreq dzer  gaxtanabr@';}	  
   }


   public function delete_my_profil_model($password,$user_id)
   {
   	  
   	 $delete = $this->db->query("delete from users where id='$user_id' && password='$password' ");
   
  
     if ($this->db->affected_rows() > 0) {
           redirect(base_url('UsersController/logout'));
        }
        echo 'Xndrum enq chisht mutqagreq dzer  gaxtanabr@';

        // if($this->db->affected_rows())
   	    // {
   	    // 	 redirect(base_url('UsersController/logout'));
   	    // }
   	    // else{echo 'Xndrum enq chisht mutqagreq dzer  gaxtanabr@';}	  

   	} 	  

}