<div id="content" class="container">
	<div class="container">
		<div class="col-md-10">
			<ol class="breadcrumb col-md-10">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Library</a></li>
			  <li class="active">Data</li>
			</ol>
		</div>
		<div class="col-md-2">
			<img class="iconc" id="list" src="<?= base_url('img/list.png'); ?>">
			<img class="iconc" id="grid" src="<?= base_url('img/grid.png'); ?>">
		</div>
	</div>
	<div class="col-md-3" id="left_content">
		<div id="left_manu">
			<div class="l_m">
			<?php
				 $num =	$_SERVER['PATH_INFO'];
				 $num = preg_replace("/[^0-9]/", '', $num);

				if ($num < 101) {
					echo ' <h4>Show Only</h4>
										<div id="sea_ads">
											<div>
												<input class="menu_check" id="Offered" type="radio" name="aaa">
												<label for="Offered">Offered</label>
											</div>
											<div>
												<input class="menu_check" id="Exchange" type="radio" name="aaa">
												<label for="Exchange">Exchange</label>
											</div>
											<div>
												<input class="menu_check"  id="Wanted" type="radio" name="aaa">
												<label for="Wanted">Wanted</label>
											</div>
										</div>
										<div class="border"></div>';
				
				}	
			?>
				<div id="photos">
					<input id="img_load" type="checkbox">
					<label for="img_load">Ads with photos</label>
				</div>
				
				<?php
					if ($num < 101) {
						echo '<div class="border"></div><h4>Price</h4>
										<input class="input-sm" id="search_price_1" type="number">-<input class="input-sm " type="number" id="search_price_n" name=""> <img width="20px" src="'. base_url("img/se.png").'" id="search_price" alt="">
										<span>Currency</span>
										<select class="input-sm" name="" id="currency">
											<option selected="">All</option>
											<option>AMD</option>
											<option>EUR</option>
											<option>RUB</option>
											<option>USD</option>
										</select>';
					}

				  ?>
				<div class="border"></div>
				<label for="val">Location</label>
				<select class="input-sm" name="" id="val">
					<option>Armenia</option>
				</select>
				<div class="border"></div>
				<h4>Categories</h4>
			</div>
		</div>
	</div>
	<div class="col-md-9" id="main_content">
		<div class="top_products">
			<h2>Top Ads</h2>
			<?php
				foreach ($top as $value0) {
					if (intval($value0['sub_id']) < 101) {
						$info0 = unserialize($value0['info_array']);
						if (!empty($info0['photos'][0])) {
							$img = 'ob_img_ads';
							$img_url = $info0['photos'][0];
						}
						else{
							$img = '';
							$img_url = 'img/noimage.jpg';
						}
						echo "<div class = 'top_products_grid ".$info0['type']."'>
									<div class='img_list'>
										<a href='".base_url('category/ads/'.$value0['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
									</div>
									<div class='name_list'><a href='".base_url('category/ads/'.$value0['id'])."'> ".$value0['name']."</a></div>
										<span class='price'>".$info0['price']." </span><span class='currency'> ".$info0['currency']."</span>
									</div>";
					}
					else{
						$info0 = unserialize($value0['info_array']);
						if (!empty($info0['photos'][0])) {
							$img = 'ob_img_ads';
							$img_url = $info0['photos'][0];
						}
						else{
							$img = '';
							$img_url = 'img/noimage.jpg';
						}
						echo "<div class = 'top_products_grid'>
									<div class='img_list'>
										<a href='".base_url('category/ads/'.$value0['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
									</div>
									<div class='name_list'><a href='".base_url('category/ads/'.$value0['id'])."'> ".$value0['name']."</a></div>
									</div>";
					}
			}
			?>

		</div>
		<div class="ord_products">
			<h2>Regular Ads</h2>
			<?php
				foreach ($all as $val) {
					if (intval($val['sub_id']) < 101) {
									$info = unserialize($val['info_array']);
									if (!empty($info['photos'][0])) {
										$img = 'ob_img_ads';
										$img_url = $info['photos'][0];
									}
									else{
										$img = '';
										$img_url = 'img/noimage.jpg';
									}
									echo "<div class = 'ord_products_grid ".$info['type']."'>
									<div class='img_list'>
										<a href='".base_url('category/ads/'.$val['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
									</div>
									<div class='name_list'><a href='".base_url('category/ads/'.$val['id'])."'> ".$val['name']."</a></div>
										<span class='price'>".$info['price']." </span><span class='currency'> ".$info['currency']."</span>
									</div>";
					}
					else{
						$info0 = unserialize($value0['info_array']);
							if (!empty($info0['photos'][0])) {
								$img = 'ob_img_ads';
								$img_url = $info0['photos'][0];
							}
							else{
								$img = '';
									$img_url = 'img/noimage.jpg';
								}
								echo "<div class = 'top_products_grid'>
									<div class='img_list'>
										<a href='".base_url('category/ads/'.$value0['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
									</div>
									<div class='name_list'><a href='".base_url('category/ads/'.$value0['id'])."'> ".$value0['name']."</a></div>
									</div>";
						}
				}

			?>
			<div class="border"></div>
		</div>
	</div>
</div>
