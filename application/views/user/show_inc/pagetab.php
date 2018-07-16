
<div class="main">	
	<div class=" container">
		<a href="<?= base_url('UsersController/show'); ?>?my_profil=Հայտարարություններ" class="user-top-manu-li<?php if(!empty($_GET['my_profil'])&& $_GET['my_profil'] == 'Հայտարարություններ'){echo '-hover';}?>  col-md-2">Հայտարարություններ</a>
				
				<a href="<?= base_url('UsersController/show'); ?>?my_profil=Հաղորդագրություններ" class="user-top-manu-li<?php if(!empty($_GET['my_profil'])&& $_GET['my_profil'] == 'Հաղորդագրություններ'){echo '-hover';}?> col-md-2">Հաղորդագրություններ</a>

				<a href="<?= base_url('UsersController/show'); ?>?my_profil=Դրամապանակ" class="user-top-manu-li<?php if(!empty($_GET['my_profil'])&& $_GET['my_profil'] == 'Դրամապանակ'){echo '-hover';}?> col-md-2">Դրամապանակ</a>

				<a href="<?= base_url('UsersController/edit_profil'); ?>?settings=Կարգավորումներ&&profil=Պրոֆիլ" class="user-top-manu-li<?php if(!empty($_GET['settings'])&& $_GET['settings'] == 'Կարգավորումներ'){echo '-hover';}?> col-md-2">Կարգավորումներ</a>

				<div class="col-md-4 text-right"><?php if($this->session->userdata('my_session')){echo $this->session->userdata('my_session');}else{redirect(base_url('UsersController/logout'));} ?><a href="<?= base_url('UsersController/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span></a></div>

	</div>
	
</div>