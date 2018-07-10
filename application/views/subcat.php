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
	print_r( $parts);
	?>
	<input type="hidden" name="" id="cat_id" value=<?php echo "$cat_id"; ?> >
	<input type="text" name="" id='name'>
	<select>
	<?php 
	foreach ($parts[0] as $value) {
		echo "<option> $value </option>";
	}
	?>
	<option >jkhg</option>	
	</select>
	<input type="text" name="" id='part'>
	<button id='add'>ADD</button>

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
				<td contenteditable="true" class="id"><?php echo $value['id'];?></td>
				<td  contenteditable="true" class="name"><?php echo $value['name'];?></td>
				<td  contenteditable="true" class="section"><?php echo $value['cat_id'];?></td>
				<td  contenteditable="true" class="section"><?php echo $value['bajin'];?></td>
				<td><input type="button" class="update" value="Update"></td>
				<td><input type="button" class="delete" value="Delete"></td>
				<!-- <td><a href="<?=base_url("Admin/subcat/".$value['id'].'"')?>"><input type="button" class="show" value="Show"></a></td> -->
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
<?php
echo "dfh";
//print_r($data['all']);