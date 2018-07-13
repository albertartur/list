<?php

class UsersController extends CI_Controller
{
   public function __construct()
   {   
   	   parent::__construct();
       $this->load->model('UsersModel');
       $this->load->library('session');

   }

public function index()
	{  
		if($this->session->userdata('my_session') != true){
		$this->load->view('user/login');	                                                         }
	    else{
	    	return    redirect(base_url('UsersController/show'));
	    }                                                     
		                                             
	                                          
	}

	

	public function check(){
		$email    = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->UsersModel->check_model($email,$password)){
			$session_data =  array('my_session'=>$email);
	 	    $this->session->set_userdata($session_data);
			redirect(base_url('UsersController/show?my_profil=Հայտարարություններ'));
		}
		else{
			redirect(base_url('UsersController/index'));
		}

	}

	public function user_id()
	{
		 $session_name = $this->session->userdata('my_session');
		 $query = $this->db->query("select * from users  where mail='$session_name'");
         $row = $query->row_array();
         return $check_email = $row['id'];
	}


	public function logout(){
		$this->session->unset_userdata('my_session');
		redirect(base_url('UsersController/index'));
	}





	public function show()
	{
		 // $a = $this->session->userdata('my_session');
		 $this->load->view('user/show');
		 $this->user_id();
	}



	 public function security_code()
	 {
    	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        return $security_code = substr( str_shuffle( $chars ), 0, 8 );
     }


 


	public function reset_password()
	{
	     $email         = $this->input->post('email');
	     $security_code = $this->security_code();	

        $query = $this->db->query("select * from users  where mail='$email'");
        $row = $query->row_array();
        $check_email = $row['mail'];
        if(!empty($email) && $check_email ==  $email)
        {
        	$this->UsersModel->reset_password($email,$security_code);
        	$this->load->view('user/login');	
        }

        else{
             $this->load->view('user/reset_password');	
        }

	}


	public function register()
	{   
         $code = $this->input->post('agree');
         $email = $this->input->post('email');
         $password = $this->input->post('password');
         $repeat_password = $this->input->post('repeat_password');

         $query = $this->db->query("select * from users  where mail='$email'");
         $row = $query->row_array();
         $check_email = $row['mail'];

         if(!empty($password) && ($password == $repeat_password) && ($code=='on') && !empty($email) && ($email != $check_email) )
         {
              $this->UsersModel->register_model($email,$password);
              $this->check();
         }
         else{
             $this->load->view('user/register');
         }
		
	}




	public function edit_profil(){
		         
                $user_id = $this->user_id();
    	        $data['profil'] = $this->UsersModel->select_profil_model($user_id);
                $this->load->view('user/show',$data);
		        //  upload image
		        $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('img'))
                {
                        
                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

                    $error = array('error' => $this->upload->display_errors());

                    //$this->load->view('show', $error);
                }
                 else
                 {
                    // $data = array('upload_data' => $this->upload->data());
                    
                    // $this->load->view('show', $data);
                   
                    
                 $user_id = $this->user_id();
                 $file_name = $this->upload->data('file_name'); 
                 $user_name = $this->input->post('user_name');
                 $location_user  = $this->input->post('location');
                 $wallet_number=$user_id+100000;
                 $this->UsersModel->edit_profil_model($user_name,$location_user,$file_name,$user_id,$wallet_number);
                    
                }
                
                 
	
	}



     //  edit_contact_inf
	public function edit_contact_inf()
	{     
		 $number = $this->input->post('number');
		 $skype = $this->input->post('skype');
		 $viber = $this->input->post('viber');
		 $WhatsApp = $this->input->post('WhatsApp');
		 $user_id = $this->user_id();

		 $data = array(
          'number'=>$number,
          'skype' =>$skype,
          'viber' =>$viber,
          'WhatsApp'=>$WhatsApp

		    );
        $serialize =  serialize($data);
        $unserialize = unserialize($serialize);
      
		
		$this->UsersModel->edit_contact_inf_model($serialize,$user_id);

	}
    
    //  select contact_information
	public function contact_information()
	{
		$user_id = $this->user_id();
		$data['contact_information'] = $this->UsersModel->contact_information_model($user_id);
		$this->load->view('user/show',$data);
	}

   
     //reset password
	public function edit_password()
	{
		$user_id = $this->user_id();
		
		$old_password    = $this->input->post('old_password');
		$new_password    = $this->input->post('new_password');
        $repeat_password = $this->input->post('repeat_password');
        
       
        if($repeat_password == $new_password)
        {
        	$this->UsersModel->edit_password_model($old_password,$new_password,$user_id);
        }
        else
        {
        	echo "verji 2 dashter@ chisht mutqagreq";
        }
    }

    
    // edith email
    public function edit_email()
    {   
    	 $user_id = $this->user_id();
    	 $password  = $this->input->post('pass');
    	 $new_email = $this->input->post('email');

    	if(!empty($password) && !empty($new_email))
        {  
    		$this->UsersModel->edit_email_model($new_email,$password,$user_id);
    	}
    }


    // delete my profil
    public function delete_my_profil()
    {
    	$user_id  = $this->user_id();
        $password = $this->input->post('password_delete');
    	if(!empty($password))
    	{
    		$this->UsersModel->delete_my_profil_model($password,$user_id);
    	}
    }

 
}