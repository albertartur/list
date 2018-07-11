 		<?php
			if ($_SERVER['PATH_INFO'] === '/my') {
				$x = '-hover';
			}
		?>	
<div class="main">	
	<div class=" container">
		<a href="<?= base_url('my'); ?>" class="user-top-manu-li<?= $x;?>  col-md-2">Հայտարարություններ</a>
				<a href="<?= base_url('messages'); ?>" class="user-top-manu-li col-md-2">Հաղորդագրություններ</a>
				<a href="<?= base_url('wallet'); ?>" class="user-top-manu-li col-md-2">Դրամապանակ</a>
				<a href="<?= base_url('profile'); ?>" class="user-top-manu-li col-md-2">Կարգավորումներ</a>
				<div class="col-md-4 text-right">user@mail.ru <span class="glyphicon glyphicon-log-out"></span></div>

	</div>
	<div class="container content-sm user-my">
		
		<div id="user-info">
			<h4>Այս պահին Դուք չունեք գործող հայտարարություններ:
			</h4>
			<a class="btn-a" href="">Ավելացնել հայտարարություն</a>
		</div>		
	</div>
</div>