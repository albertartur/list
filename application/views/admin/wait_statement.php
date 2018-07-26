<?php if($this->session->userdata('admin_session') ){ ?>
	<a href="<?=base_url("admin/Admin/logout")?>"><input type="button" value="Logout" style="margin-left: 89%;"></a><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>base_url="<?=base_url()?>"</script>

<script src="<?=base_url('js/script.js')?>"></script>
<?php
echo "<table border=1 cellpadding=12>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Subcategorie_id</th>";
echo "<th>User_id</th>";
echo "<th>data_of_put</th>";
echo "<th>info_array</th>";
echo "<th>done</th>";
echo "<th>Add_toProduct</th>";
echo "</tr>";
for ($i=0; $i<count($wait_statement); $i++) { 
		echo "<tr class='tr'>";
	foreach ($wait_statement[$i] as $key => $value) {
		echo "<td>".$wait_statement[$i][$key]."</td>";
	}
	echo "<td><input type='button' value='ADD_toProduct' class='add_product'></td>";
	echo "</tr>";
}



 }
else{
  redirect(base_url('admin/login'));
}
 
