<script type="text/javascript">
	 var base_url="<?= base_url(); ?>"
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url('js/user_script.js'); ?>"></script>

<a href="<?= base_url('UsersController/logout'); ?>">Logout</a>
<?php if($this->session->userdata('my_session')){ ?>
<?= $this->session->userdata('my_session'); ?>


<!-- pagetab --->  
<?php $this->load->view('show_inc/pagetab'); ?>
<!-- pagetab ---> 

 
 <!--  tabmenu menu -->
<?php  if(!empty($_GET['settings']) || !empty($_GET['profil']) || !empty($_GET['contact_information']) )
   { $this->load->view('show_inc/tabmenu'); } 
?>


 <!-- profil -->
<?php
  if(!empty($_GET['profil']) and $_GET['profil']=='Պրոֆիլ')
       { $this->load->view('show_inc/profil'); }
?>



  <!-- Contact Information -->
<?php
 if(!empty($_GET['contact_information']) and $_GET['contact_information']=='Կոնտակտային_տվյալներ')
       { $this->load->view('show_inc/contact_info'); }
 ?>

 <!-- notifications -->
 <?php
 if(!empty($_GET['notifications']) and $_GET['notifications']=='Ծանուցում')
       { $this->load->view('show_inc/notifications'); }
 ?>

  <!-- Blocked Users -->
 <?php
 if(!empty($_GET['blocked_users']) and $_GET['blocked_users']=='Արգելափակված_օգտատերեր')
       { $this->load->view('show_inc/blocked_users'); }
 ?>


 <!-- account -->
 <?php
 if(!empty($_GET['account']) and $_GET['account']=='Հաշիվ')
       { $this->load->view('show_inc/account'); }
 ?>


<?php }else{redirect(base_url('UsersController/index'));} ?>
