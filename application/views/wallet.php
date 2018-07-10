		<?php
		
			if ($_SERVER['PATH_INFO'] === '/wallet') {
				$x = '-hover';
			}
		?>
	
<div class="main">	
	<div class=" container">
			<a href="<?= base_url('my'); ?>" class="user-top-manu-li col-md-2">Հայտարարություններ</a>
			<a href="<?= base_url('messages'); ?>" class="user-top-manu-li col-md-2">Հաղորդագրություններ</a>
			<a href="<?= base_url('wallet'); ?>" class="user-top-manu-li<?= $x;?> col-md-2">Դրամապանակ</a>
			<a href="<?= base_url('profile'); ?>" class="user-top-manu-li col-md-2">Կարգավորումներ</a>
	</div>
	<div class="container content-sm">
		<div id="user-info">
			<div class="col-md-3">
				<h3>Դրամապանակում</h3>
				<h2>200 դրամ</h2>
				<p>Դրամապանակի համարը 583962
Դրամապանակը List.am-ում վճարումներ կատարելու հարմար և արդյունավետ միջոց է:

Դրամապանակի միջոցով Դուք կարող եք խնայել մեր ծառայությունների արժեքի մինչև 10%:</p>
			</div>
			<div class="col-md-8 border-l">
				<h3>Լիցքավորել դրամապանակը</h3>
				<input  class="vallet" type="radio" checked="" name="t" id="telcell">
				<label for="telcell"><img src="<?= base_url('/img/po_telcell.png'); ?>"> </label>
				<input  class="vallet" type="radio" name="t" id="easypay">
				<label for="easypay"><img src="<?= base_url('/img/po_easypay.png'); ?>"> </label>
				<div class="border"></div>
				<div id="wallet-bg" class="col-md-3">
					
				</div>
				<div id="wallet-txt" class="col-md-8">
					<h5>Վճարում Telcell տերմինալների միջոցով</h5>
					<ol>
						<li>Telcell տերմինալի ցանկում ընտրեք "Այլ", "Այլ ծառայություններ"</li>
						<li>Ընտրեք List.am</li>
						<li>Մուտքագրեք Ձեր դրամապանակի համարը 583962</li>
						<li>Մուտքագրեք գումարը և սեղմեք "Վճարել"</li>
					</ol>
					Գումարը կհաշվեգրվի Ձեր List.am-ի դրամապանակ ըստ գործող զեղչերի:
					<p>
						40,000 դրամ և ավելի վճարման դեպքում Դուք կստանաք 5% զեղչ
						60,000 դրամ վճարման դեպքում` 10% զեղչ:
						Օրինակ, եթե Դուք վճարեք 60,000 դրամ, Ձեր դրամապանակում կավելանա 66,000 դրամ:
					</p>
				</div>
			</div>
		</div>		
	</div>
</div>