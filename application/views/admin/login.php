<!DOCTYPE html>
<html>
<head>
	<title>login admin</title>
</head>
<body>
	<form action="<?=base_url('admin/Admin/check_admin')?>" method="post">
		<h2>Please LogIn</h2>
		<label>Login:<input type="text" name="login"></label><br><br>
		<label>Password:<input type="text" name="password"></label><br><br>
		<input type="submit" name="send" value="LogIn">
	</form>
</body>
</html>
