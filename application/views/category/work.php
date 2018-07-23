<div id="content" class="container">
	<div class="container">
		<div class="col-md-10">
			<ol class="breadcrumb col-md-10">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Library</a></li>
			  <li class="active">Data</li>
			</ol>
		</div>
	</div>
	<div class="col-md-3 " id="left_content">
		<div id="left_manu">
			<h4>Հայտարարության տեսակը</h4>
			<div>
				<input id="an" type="checkbox" name="">
				<label for="an">Անհատական</label>
			</div>
			<div>
				<input id="gorc" type="checkbox" name="">
				<label for="gorc">Գործակալություն</label>
			</div>
			<div class="border"></div>
			<h4>Տարածաշրջան</h4>
			<select class="input-sm" name="" id="val">
				<option>Armenia</option>
			</select>
			<div class="border"></div>
			<h4>Կատեգորիաներ</h4>
		</div>
	</div>
	<div class="col-md-9" id="main_content">
		<div class="top_products">
			<h2>Տոպ հայտարարություններ</h2>
			
			<?php
				foreach ($tops as $val) {
					echo "<div class='work_list'><a href=".base_url('category/ads/'.$val['id']).">".$val['name']."</a></div>";
				}
			 ?>
		</div>
		<div class="ord_products">
			<h2>Սովորական  հայտարարություններ</h2>
			<?php
				foreach ($list as $val) {
					echo "<div class='work_list'><a href=".base_url('category/ads/'.$val['id']).">".$val['name']."</a></div>";
				}
			 ?>
			
			<div class="border"></div>
		</div>
	</div>
</div>
