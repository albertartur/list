<div id="content" class="container">
	<div class="col-md-3" id="left_content">
		<div id="left_manu">
			<ul>
				<?php
					$k='';

					foreach ($cats as  $value) {
						$k=$k."<li data-id={$value['id']} class='li' >".$value['name']."
								<ul class='ulul'></ul>
							</li>";
						}
						echo $k;
				?>
				<li class='li' data-id=12>Services
					<ul class='ulul'></ul>
				</li>
				<li class='li' data-id=13>Jobs
					<ul class='ulul'></ul>
				</li>
			</ul>
			<div id="left_reclame">
				<span>Reclame</span>
			<div class="border"></div>
				<img src="<?= base_url('img/111.jpg'); ?>">
			</div>
		</div>
		<div style="min-height: 3vh;"></div>
	</div>
		<div class="text-center" id="main_reclame">
			<img src="<?= base_url('img/reklam_main.gif'); ?>">
		</div>
	<div class="col-md-9" id="main_content">
		<div class="top_products">
			<h3> Top Ads</h3>
		<?php
				foreach ($top as $val) {
			if (intval($val['sub_id']) < 103) {
							$info = unserialize($val['info_array']);
							if (!empty($info['photos'][0])) {
								$img = 'ob_img_ads';
								$img_url = 'uploads/'.$info['photos'][0];
							}
							else{
								$img = '';
								$img_url = 'uploads/noimage.jpg';
							}
							echo "<div class = 'top_products_grid ".$info['type']."'>
							<div class='img_list'>
								<a href='".base_url('category/ads/'.$val['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
							</div>
							<div class='name_list'><a href='".base_url('category/ads/'.$val['id'])."'> ".$val['name']."</a></div>
								<div class='price'>".$info['price'].' '.$info['currency']."</div>
							</div>";
				}
				
			}
		?>
		</div>
	</div>
</div>