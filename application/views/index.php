<div id="content" class="container">
	<div class="col-md-3" id="left_content">
		<div id="left_manu">
			<div id='cat'>

				<ul style="display: inline;" id='off'>
					<?php
					$k='';
					foreach ($cats as  $value) {
						$k=$k."<li class='h' data-id={$value['id']} ><a href='#' >{$value['name']}</a></li>";
					}
					echo $k;
					?>
					<li><a href="#" data-id=12 class='a'>Services</a></li>
					<li><a href="#" data-id=13 class='a'>Jobs</a></li>
				</ul>
			</div>
		<!-- First section's categories div lev01 -->
		
			<div class='col-md-3' id='sub_cat_home'>
				<ul>
					<li><a href="#" data-id=2 class='a'>Services</a></li>
					<li><a href="#" data-id=3 class='a'>Jobs</a></li>
				</ul>
			</div>
		</div>
		<div id="left_reclame">
			<img src="<?= base_url('img/adwords-google2.png'); ?>">
		</div>
		<div style="min-height: 3vh;"></div>
	</div>
		<div class="text-center" id="main_reclame">
			<img src="<?= base_url('img/reklam_main.gif'); ?>">
		</div>
	<div class="col-md-9" id="main_content">
		<div class="top_products">
			Տոպ հայտարարություններ
		</div>
	</div>
</div>