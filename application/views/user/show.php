
<script src="<?= base_url('js/js/user_script.js'); ?>"></script>

<a href="<?= base_url('UsersController/logout'); ?>">Logout</a>
<?php if($this->session->userdata('my_session') ){ ?>
<?= $this->session->userdata('my_session'); ?>


<!-- pagetab --->  
<?php $this->load->view('user/show_inc/pagetab'); ?>
<!-- pagetab ---> 

 <!-- settings ---> 
<?php  $this->load->view('user/show_inc/settings'); ?>
 <!-- settings ---> 


       <!-- ads ---> 
<?php
     if(!empty($_GET['my_profil']) && $_GET['my_profil']=='Հայտարարություններ')
     { $this->load->view('user/show_inc/ads');  }
?>
       <!-- ads ---> 




      <!-- messages ---> 
<?php
     if(!empty($_GET['my_profil']) && $_GET['my_profil']=='Հաղորդագրություններ')
     { $this->load->view('user/show_inc/messages'); }
?>
     <!-- messages ---> 


      <!-- wallet ---> 
<?php
     if(!empty($_GET['my_profil']) && $_GET['my_profil']=='Դրամապանակ')
     { $this->load->view('user/show_inc/wallet'); }
?>
       <!-- wallet --->        


<?php }else{redirect(base_url('UsersController/index'));}    $this->load->view('footer');?>


