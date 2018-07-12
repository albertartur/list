<form method="post" action="<?= base_url('UsersController/reset_password'); ?>">
<input type="text" name="email">
<input type="submit">
</form>

<a href="<?= base_url('UsersController/register'); ?>">Register</a>
<a href="<?= base_url('UsersController/index'); ?>">Login</a>


