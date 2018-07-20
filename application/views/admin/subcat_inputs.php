<!DOCTYPE html>
<html>
<head>
	<title>subcategories_inputs_type</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>base_url="<?=base_url()?>"</script>
    <script src="<?=base_url('js/script.js')?>"></script>
</head>
<body>
	<?php 
	 $arr=explode('/', $_SERVER['REQUEST_URI']);
	 $sub_id=$arr[count($arr)-1];
	?>
  <select class="inp inp-m" id='id_location'>
    <option value="0" selected="selected">Please select</option>
    <option value="1">location</option>
    <option value="2">type</option>
    <option value="3">typemin</option>
    <option value="4">price</option>
    <option value="4">price rent</option>
    <option value="5">title</option>
    <option value="6">description</option>
    <option value="7">photos</option>
    <optgroup label="Real Estate">
        <option value="8">address</option>
        <option value="9">constype</option>
        <option value="10">rooms</option>
        <option value="11">living space</option>
        <option value="12">floor</option>
        <option value="13">floorbuild</option>
        <option value="34">Land size</option>
        <option value="14">status_realest</option>
    </optgroup>
    <optgroup label="Vehicles">
        <option value="15">make</option>
        <option value="16">model</option>
        <option value="17">year</option>
        <option value="18">mileage</option>
        <option value="19">engine</option>
        <option value="20">transmission</option>
        <option value="21">wheel</option>
        <option value="22">customs</option>
        <option value="23">status_vehicles</option>
        <option value="24">type_veh</option>
        <option value="25">size</option>
        <option value="26">condition</option>
        <option value="27">type_car_part</option>
    </optgroup>
    <optgroup label="Jobs">
        <option value="28">emp_type</option>
        <option value="29">job_shcedule</option>
        <option value="30">salary_from</option>
        <option value="31">status_jobs</option>
        <option value="32">edu</option>
        <option value="33">work_exp</option>
    </optgroup>
     <option value="35">Shoes size</option>
</select>
    <input type="text"  id="sub_id" hidden="true" value="<?php echo $sub_id ?>">
    <input type="button" id="add_input_type" value="ADD_input_type">
<br><br>
    <table border="1" cellpadding="12">
    	<tr>
    		<th>Subcategorie_id</th>
    		<th>Input_name</th>
    		<th>Delete</th>
    	</tr>
    	<?php  foreach ($all as $value): ?>
    		<tr>
    			<td contenteditable="true" class="sub_id"><?php echo $value['sub_id'];  ?></td>
    			<td contenteditable="true" class="input_name"><?php echo $value['sub_input'];?></td>
    			<td><input type="button"  class="input_delete" value="Delete"></td>
    	    </tr>
    	 <?php endforeach;  ?>   
    </table>
</body>
</html>