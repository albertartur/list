
<form method="post" action="<?= base_url('UsersController/register'); ?>">
	
	<p><input type="email" name="email" placeholder="email"></p>
	<p><input type="password" name="password" placeholder="password"></p>
	<p><input type="password" name="repeat_password" placeholder="repeat_password"></p>
	<p><input type="checkbox" name="agree">Hamadzyan em</p>
	<p><input type="submit" ></p>

</form>

<a href="<?= base_url('UsersController/reset_password'); ?>">Reset password</a>
<a href="<?= base_url('UsersController/index'); ?>">Login</a>

