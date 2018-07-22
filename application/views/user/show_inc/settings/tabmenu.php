	<div class="container content-sm user-my">
			
		<div id="user-info">

<div class="col-md-3">

				<a class="a-manu<?php if(!empty($_GET['profil'])&& $_GET['profil'] == 'Պրոֆիլ'){echo '-hover';}?>" href="<?= base_url('UsersController/edit_profil'); ?>?settings=Կարգավորումներ&&profil=Պրոֆիլ">Պրոֆիլ</a>


				<a class="a-manu<?php if(!empty($_GET['contact_information'])&& $_GET['contact_information'] == 'Կոնտակտային_տվյալներ'){echo '-hover';}?>" href="<?= base_url('UsersController/contact_information'); ?>?settings=Կարգավորումներ&&contact_information=Կոնտակտային_տվյալներ">Կոնտակտային տվյալներ</a>


				<a class="a-manu<?php if(!empty($_GET['notifications'])&& $_GET['notifications'] == 'Ծանուցում'){echo '-hover';}?>"  href="<?= base_url('UsersController/show'); ?>?settings=Կարգավորումներ&&notifications=Ծանուցում">Ծանուցում</a>


				<a class="a-manu<?php if(!empty($_GET['blocked_users'])&& $_GET['blocked_users'] == 'Արգելափակված_օգտատերեր'){echo '-hover';}?>"  href="<?= base_url('UsersController/show'); ?>?settings=կարգավորումներ&&blocked_users=Արգելափակված_օգտատերեր"">Արգելափակված օգտատերեր</a>

				<a class="a-manu<?php if(!empty($_GET['account'])&& $_GET['account'] == 'Հաշիվ'){echo '-hover';}?>"" href="<?= base_url('UsersController/show'); ?>?settings=Կարգավորումներ&&account
=Հաշիվ">Հաշիվ</a>
			</div>