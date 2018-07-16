	

 		
<div class="main">
	
	<div class="container content-sm user-my">
			
		<div id="user-info">
<form method="post" action="<?= base_url('UsersController/edit_profil'); ?>?profil=Պրոֆիլ" enctype="multipart/form-data">
			<div class="col-md-9 border-l">
				<div class="row">	
					<label class="col-md-5" for="us-mail"> Ձեր Էլ. փոստի հասցեն</label>
					<input  class="col-md-2 input-sm" type="text" placeholder="mail" id="us-mail" value="<?= $this->session->userdata('my_session'); ?>">
				</div>
				<div class="row">
					<label  class="col-md-5" for="us-name">Ձեր անունը</label>
					<input  class="col-md-2 input-sm" value="<?= $profil[0]['user_name']; ?>" type="text" id="us-name" name="user_name">
				</div>
				<div  class="row">	
					<label  class="col-md-5" for="city"> Տարածաշրջան</label>
					<select  class="col-md-2 input-sm"  name="location" id="on">
						<option value="Խնդրում ենք ընտրել" >Խնդրում ենք ընտրել</option>

<optgroup label="Երևան">
<option value="Աջափնյակ"  >Աջափնյակ</option>
<option value="Արաբկիր" >Արաբկիր</option>
<option value="Ավան">Ավան</option>
<option value="Դավիթաշեն">Դավիթաշեն</option>
<option value="Էրեբունի">Էրեբունի</option>
<option value="Քանաքեռ Զեյթուն">Քանաքեռ Զեյթուն</option>
<option value="Կենտրոն">Կենտրոն</option>
<option value="Մալաթիա Սեբաստիա">Մալաթիա Սեբաստիա</option>
<option value="Նոր Նորք">Նոր Նորք</option>
<option value="Նորք Մարաշ">Նորք Մարաշ</option>
<option value="Նուբարաշեն">Նուբարաշեն</option>
<option value="Շենգավիթ">Շենգավիթ</option>

</optgroup><optgroup label="Արագածոտն">
<option value="Ապարան">Ապարան</option>
<option value="Արագած">Արագած</option>
<option value="Արուճ">Արուճ</option>
<option value="Աշտարակ">Աշտարակ</option>
<option value="Կոշ">Կոշ</option>
<option value="Թալին">Թալին</option>
<option value="Ուջան">Ուջան</option>

</optgroup><optgroup label="Արարատ">
<option value="Արարատ">Արարատ</option>
<option value="Արտաշատ">Արտաշատ</option>
<option value="Գեղանիստ">Գեղանիստ</option>
<option value="Մասիս">Մասիս</option>
<option value="Վեդի">Վեդի</option>

</optgroup><optgroup label="Արմավիր">
<option value="Արմավիր">Արմավիր</option>
<option value="Էջմիածին">Էջմիածին</option>
<option value="Մեծամոր">Մեծամոր</option>

</optgroup><optgroup label="Արցախ">
<option value="Ասկերան">Ասկերան</option>
<option value="Հադրութ">Հադրութ</option>
<option value="Քաշաթաղ">Քաշաթաղ</option>
<option value="Լաչին">Լաչին</option>
<option value="Մարտակերտ">Մարտակերտ</option>
<option value="Մարտունի">Մարտունի</option>
<option value="Շահումյան">Շահումյան</option>
<option value="Շուշի">Շուշի</option>
<option value="Ստեփանակերտ">Ստեփանակերտ</option>

</optgroup><optgroup label="Գեղարքունիք">
<option value="Ճամբարակ">Ճամբարակ</option>
<option value="Գավառ">Գավառ</option>
<option value="Մարտունի">Մարտունի </option>
<option value="Սևան">Սևան</option>
<option value="Վարդենիս">Վարդենիս</option>

</optgroup><optgroup label="Կոտայք">
<option value="Աբովյան">Աբովյան</option>
<option value="Աղվերան">Աղվերան</option>
<option value="Արգել">Արգել</option>
<option value="Առինջ">Առինջ</option>
<option value="Արզնի">Արզնի</option>
<option value="Բջնի">Բջնի</option>
<option value="Բյուրեղավան">Բյուրեղավան</option>
<option value="Չարենցավան">Չարենցավան</option>
<option value="Ձորաղբյուր">Ձորաղբյուր</option>
<option value="Գառնի">Գառնի</option>
<option value="Հրազդան">Հրազդան</option>
<option value="Ջրվեժ">Ջրվեժ</option>
<option value="Քանաքեռավան">Քանաքեռավան</option>
<option value="Քասախ">Քասախ</option>
<option value="Նոր Հաճըն">Նոր Հաճըն</option>
<option value="Նուռնուս">Նուռնուս</option>
<option value="Պտղնի">Պտղնի</option>
<option value="Ծաղկաձոր">Ծաղկաձոր</option>
<option value="Եղվարդ">Եղվարդ</option>
<option value="Զովունի">Զովունի</option>

</optgroup><optgroup label="Լոռի">
<option value="Ալավերդի">Ալավերդի</option>
<option value="Սպիտակ">Սպիտակ</option>
<option value="Ստեփանավան">Ստեփանավան</option>
<option value="Տաշիր">Տաշիր</option>
<option value="Վանաձոր">Վանաձոր</option>

</optgroup><optgroup label="Շիրակ">
<option value="Արթիկ">Արթիկ</option>
<option value="Գյումրի">Գյումրի</option>
<option value="Մարալիկ">Մարալիկ</option>

</optgroup><optgroup label="Սյունիք">
<option value="Գորիս">Գորիս</option>
<option value="Քաջարան">Քաջարան</option>
<option value="Կապան">Կապան</option>
<option value="Մեղրի">Մեղրի</option>
<option value="Սիսիան">Սիսիան</option>

</optgroup><optgroup label="Տավուշ">
<option value="Բերդ">Բերդ</option>
<option value="Դիլիջան">Դիլիջան</option>
<option value="Իջևան">Իջևան</option>
<option value="Նոյեմբերյան">Նոյեմբերյան</option>

</optgroup><optgroup label="Վայոց Ձոր">
<option value="Ջերմուկ">Ջերմուկ</option>
<option value="Վայք">Վայք</option>
<option value="Եղեգնաձոր">Եղեգնաձոր</option>
</optgroup><option value="Հայաստանից դուրս">Հայաստանից դուրս</option>
					</select>
				</div>
				<div class="border"></div><span>Ձեր ավատարը</span>	
				<div style="margin-left: 50%;">
					
					<div class="row">
						<input  type="radio" id="us-avatar1" name="img">
						<label  for="us-avatar1"> <img width="32px"  src="<?= base_url('uploads/').$profil[0]['image'];?>"></label>
						<label for="load-photo">Վերբեռնել</label>
						<input style="display: none;" id="load-photo" name="img" type="file">
					</div>
				</div>	
				<div class="border"></div>
				<div class="row text-center">
					<button class="btn-a">Պահպանել</button>
				</div>
rest-api     </form>
			</div>
		</div>		
	</div>
</div>






<script type="text/javascript">
	 var location_user="<?= $profil[0]['location_user']; ?>"
</script>

<script type="text/javascript">
	
	$("select option").each(function(){
  if ($(this).text() == location_user)
    $(this).attr("selected","selected");
});
</script>