<form method="post" action="<?= base_url('UsersController/check'); ?>">
    <input type="email" name="email">
	<input type="password" name="password">
	<input type="submit" >
</form>
<a href="<?= base_url('UsersController/reset_password'); ?>">Reset password</a>
<a href="<?= base_url('UsersController/register'); ?>">Register</a>


<?php 

 ?>

