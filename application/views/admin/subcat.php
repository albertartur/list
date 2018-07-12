<!DOCTYPE html>
<html>
<head>
	<title>Subcatecories</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>base_url="<?=base_url()?>"</script>

<script src="<?=base_url('js/script.js')?>"></script>
</head>
<body>
	<?php  $a=explode('/',$_SERVER['REQUEST_URI']);
	$cat_id=$a[count($a)-1];
	// print_r( $parts);
	?>
	<input type="hidden" name="" id="cat_id" value=<?php echo "$cat_id"; ?> >
	Name:<input type="text" name="" id='name'>
	<select>
	<?php 
	 for($i=0;$i<count($parts);$i++){
	foreach ($parts[$i] as $value) {
		echo "<option> $value </option>";
	}
    }
	?>
	<option >Other parts</option>	
	</select>
	Part:<input type="text" name="" id='part'>
	<button id='add'>ADD</button>
  <br><br>
  
	<table border="1" cellpadding="13">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Cat_id</th>
			<th>Bajin</th>
			<th>Update</th>
			<th>Delete</th>
			<th>Show</th>
		</tr>
		<?php foreach ($all as $value) :?>
			<tr>
				<td contenteditable="true" class="sub_id"><?php echo $value['id'];?></td>
				<td  contenteditable="true" class="sub_name"><?php echo $value['name'];?></td>
				<td  contenteditable="true" class="cat_id"><?php echo $value['cat_id'];?></td>
				<td  contenteditable="true" class="sub_section"><?php echo $value['bajin'];?></td>
				<td><input type="button" class="sub_update" value="Update"></td>
				<td><input type="button" class="sub_delete" value="Delete"></td>
				<td><input type="button" class="statement_show" value="Show"></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
