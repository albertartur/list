

<!--  tabmenu menu -->
<?php  if(!empty($_GET['settings']) || !empty($_GET['profil']) || !empty($_GET['contact_information']) )
   { $this->load->view('user/show_inc/settings/tabmenu'); } 
?>


<!-- profil -->
<?php
  if(!empty($_GET['profil']) and $_GET['profil']=='Պրոֆիլ')
       { $this->load->view('user/show_inc/settings/profil'); }
?>


<!-- Contact Information -->
<?php
 if(!empty($_GET['contact_information']) and $_GET['contact_information']=='Կոնտակտային_տվյալներ')
       { $this->load->view('user/show_inc/settings/contact_info'); }
 ?>


 <!-- notifications -->
 <?php
 if(!empty($_GET['notifications']) and $_GET['notifications']=='Ծանուցում')
       { $this->load->view('user/show_inc/settings/notifications'); }
 ?>


 <!-- Blocked Users -->
 <?php
 if(!empty($_GET['blocked_users']) and $_GET['blocked_users']=='Արգելափակված_օգտատերեր')
       { $this->load->view('user/show_inc/settings/blocked_users'); }
 ?>

 <!-- account -->
 <?php
 if(!empty($_GET['account']) and $_GET['account']=='Հաշիվ')
       { $this->load->view('user/show_inc/settings/account'); }

 ?>

