
<div class="main">
	<div class="container content-sm">
		<div class="col-md-6 text-center">
			<div id="fb-log">
				<span>Օգտվեք Facebook-ից, արագ և պարզ գրանցման համար </span>
				<button type="button" class="btn btn-primary btn-lg">Facebook</button>
			</div>

		<form method="post" action="<?= base_url('UsersController/register'); ?>">
			<div id="user_reg">
				<p>Կամ օգտագործեք Ձեր էլ. փոստի հասցեն
</p>
				<input class="input" name="email" id="reg_mail" placeholder="Ձեր Էլ. փոստի հասցեն" type="email">
				<input class="input" name="password" id="pass1" placeholder="Գաղտնաբառ" type="password">
				<input class="input" name="repeat_password" id="pass2" placeholder="Կրկնեք Գաղտնաբառը " type="password">
				<div>
				<!--<span> Անվտանգության կոդ</span><input type="text" class="input-sm"> -->
					<div  class="text-center">
						<input type="checkbox" name="agree" id="check_reg">
						<span>
							Ես համաձայն եմ հայտարարությունների հրապարակման կանոններին, նաև List.am կայքի օգտագործման համաձայնագրին:
						</span>
					</div>	
					<button id="title" class="btn btn-success text-left">Գրանցում</button>
				</div>
			</div>
		</form>
		</div>
		<div   class="register-info col-md-6 text-center">
			<p>Գրանցվելով, Դուք կստանաք հետևյալ առավելությունները.</p>
			<li>Ձեր բոլոր տեղադրված հայտարարությունները կղեկավարվեն մեկ գաղտնաբառով</li>
			<li>Դուք կկարողանաք խմբագրել, հեռացնել և թարմացնել հայտարարությունները Ձեր անձնական էջից</li>
			<li>List.am-ի դրամապանակից օգտվելու հնարավորություն</li>
			<li>Դիտել այլ օգտատերերի կողմից` Ձեր հայտատարություններին հղված պատասխանները</li>
			<li>Եվ շատ ուրիշ առավելություններ</li>
		</div>
	</div>
</div>

