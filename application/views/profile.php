 		<?php
		
			if ($_SERVER['PATH_INFO'] === '/profile') {
				$x = '-hover';
			}
		?>
<div class="main">
	<div class=" container">
		<a href="<?= base_url('my'); ?>" class="user-top-manu-li col-md-2">Հայտարարություններ</a>
			<a href="<?= base_url('messages'); ?>" class="user-top-manu-li col-md-2">Հաղորդագրություններ</a>
			<a href="<?= base_url('wallet'); ?>" class="user-top-manu-li col-md-2">Դրամապանակ</a>
			<a href="<?= base_url('profile'); ?>" class="user-top-manu-li<?= $x;?> col-md-2">Կարգավորումներ</a>
			<div class="col-md-4 text-right">user@mail.ru <span class="glyphicon glyphicon-log-out"></span></div>

	</div>
	<div class="container content-sm user-my">
			
		<div id="user-info">
			<div class="col-md-3">
				<a class="a-manu" href="">Պրոֆիլ</a>
				<a class="a-manu" href="">Կոնտակտային տվյալներ</a>
				<a class="a-manu" href="">Ծանուցում</a>
				<a class="a-manu" href="">Արգելափակված օգտատերեր</a>
				<a class="a-manu" href="">Հաշիվ</a>
			</div>
			<div class="col-md-9 border-l">
				<div class="row">	
					<label class="col-md-5" for="us-mail"> Ձեր Էլ. փոստի հասցեն</label>
					<input  class="col-md-2 input-sm" type="text" placeholder="mail" id="us-mail" name="">
				</div>
				<div class="row">
					<label  class="col-md-5" for="us-name">Ձեր անունը</label>
					<input  class="col-md-2 input-sm" value="name" type="text" id="us-name" name="">
				</div>
				<div  class="row">	
					<label  class="col-md-5" for="city"> Տարածաշրջան</label>
					<select  class="col-md-2 input-sm" name="" id="city">
						<option>Yerevan</option>
					</select>
				</div>
				<div class="border"></div><span>Ձեր ավատարը</span>	
				<div style="margin-left: 50%;">
					<div class="row">
						
						<input  type="radio"  id="us-avatar" name="img">
						<label  for="us-avatar"> <img width="32px"  src="<?= base_url('img/avatar.png'); ?>"></label>
					</div>
					<div class="row">
						<input  type="radio" id="us-avatar1" name="img">
						<label  for="us-avatar1"> <img width="32px"  src="<?= base_url('img/avatar.png'); ?>"></label>
						<label for="load-photo">Վերբեռնել</label>
						<input style="display: none;" id="load-photo" type="file">
					</div>
				</div>	
				<div class="border"></div>
				<div class="row text-center">
					<button class="btn-a">Պահպանել</button>
				</div>
rest-api
			</div>
		</div>		
	</div>
</div>