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
	</div>
	<div class="container content-sm user-my">
			
		<div id="user-info">
		</div>		
	</div>
</div>