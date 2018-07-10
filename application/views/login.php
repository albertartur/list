<div class="main">
	<div class="container content-sm">
		<div class="col-md-6 text-center ">
			<div id="fb-log">
				<span>Արագ մուտք Facebook-ի միջոցով </span>
				<button type="button" class="btn btn-primary btn-lg">Facebook</button>
			</div>
			<div id="user_login">
				<p>Կամ մուտքագրեք Ձեր էլ. փոստի հասցեն և գաղտնաբառը</p>
				<input class="input" id="log_mail" placeholder="Ձեր Էլ. փոստի հասցեն" type="text">
				<input class="input" id="pass" placeholder="Գաղտնաբառ" type="password">
				<div>
					<button id="title" class="btn btn-success text-left">Մուտք</button>
				</div>
				<a class="text-right" href="<?= base_url('/lostpwd'); ?>">Մոռացել եք գաղտնաբառը?</a>
			</div>
		</div>
		<div  class="col-md-6 text-center">
			<h3>Դեռ գրանցված չե՞ք</h3>
			 <a class="btn-a" href="<?= base_url('/register'); ?>"> Գրանցում</a>

			<p class="txt">Գրանցումը տալիս է Ձեր հայտարարությունները անձնական էջից ղեկավարելու, դրամապանակից և շատ ուրիշ առավելություններից օգտվելու հնարավորություն:</p>
		</div>
	</div>
</div>