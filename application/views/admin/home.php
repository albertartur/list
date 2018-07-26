<?php if($this->session->userdata('admin_session') ){ ?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>base_url="<?=base_url()?>"</script>

<script src="<?=base_url('js/script.js')?>"></script>
</head>
<body>
	<a href="<?=base_url("admin/Admin/logout")?>"><input type="button" value="Logout" style="margin-left: 89%;"></a>

	<h1>Welcome to Admin page</h1>
	<a href="<?=base_url("admin/Admin/show_wait_statement")?>"><input type="button" value="Show_wait_statement" style="margin-left: 89%;"></a>
	<br>
	Name:<input type="text" id="cat_name">
	Section:<input type="number" id="cat_section">
	<input type="button" id="add_cat" value="ADD">
	
	<br><br>
	<table border="1" cellpadding="13">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Section</th>
			<th>Update</th>
			<th>Delete</th>
			<th>Show</th>
		</tr>
		<?php foreach ($all as $value) :?>
			<tr>
				<td contenteditable="true" class="id"><?php echo $value['id'];?></td>
				<td  contenteditable="true" class="name"><?php echo $value['name'];?></td>
				<td  contenteditable="true" class="section"><?php echo $value['glob'];?></td>
				<td><input type="button" class="update" value="Update"></td>
				<td><input type="button" class="delete" value="Delete"></td>
				<td><a href="<?=base_url("admin/Admin/subcat/".$value['id'].'"')?>"><input type="button" class="show" value="Show"></a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>

<?php }
else{
  redirect(base_url('admin/login'));
}
 ?>
