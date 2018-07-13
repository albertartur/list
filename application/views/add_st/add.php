<div class="main">
	<div class=" container bot">
		<div class='col-md-7'>
			<span>What type of posting would you like to add</span>
		</div>
		<div class="col-md-1">
			<center><div class="klor hov">1</div>
			<span> Բաժին</span></center>
		</div>
		<div class="col-md-2 text-center">
			<div class="klor">2</div>
			<span> Հայտարարություն</span>
		</div>
		<div class="col-md-1">
			<center><div class="klor">3</div>
			<span> Դիտում</span></center>
		</div>	
		<div class="col-md-1">
			<div class="klor">4</div>
			<span> Ավելացնել</span>
		</div>

	</div>
	<div class="container  content-sm" id="view_2">
		<div id='mm' class="form-group" >
			
				<div class="row">
					<div class="col-md-3 text-right pad"><label for='loc'>Location</label>
					</div>
						<div class="col-md-8">
							<select class="inp inp-m" id='loc'>
								<option value="0" selected="selected">Please select</option>
								<optgroup label="Yerevan">
									<option value="2">Ajapnyak</option>
									<option value="3">Arabkir</option>
									<option value="4">Avan</option>
									<option value="5">Davitashen</option>
									<option value="6">Erebuni</option>
									<option value="7">Kanaker-Zeytun</option>
									<option value="8">Kentron</option>
									<option value="9">Malatia-Sebastia</option>
									<option value="10">Nor Nork</option>
									<option value="11">Nork-Marash</option>
									<option value="12">Nubarashen</option>
									<option value="13">Shengavit</option>
								</optgroup>
								<optgroup label="Aragatsotn">
									<option value="15">Aparan</option>
									<option value="16">Aragats</option>
									<option value="73">Aruch</option>
									<option value="17">Ashtarak</option>
									<option value="92">Kosh</option>
									<option value="18">Talin</option>
									<option value="72">Ujan</option>
								</optgroup>
								<optgroup label="Ararat">
									<option value="20">Ararat</option>
									<option value="21">Artashat</option>
									<option value="80">Geghanist</option>
									<option value="22">Masis</option>
									<option value="86">Vedi</option>
								</optgroup>
								<optgroup label="Armavir">
									<option value="24">Armavir</option>
									<option value="25">Echmiadzin</option>
									<option value="26">Metsamor</option>
								</optgroup>
								<optgroup label="Artsakh">
									<option value="29">Askeran</option>
									<option value="30">Hadrut</option>
									<option value="87">Kashatagh</option>
									<option value="31">Lachin</option>
									<option value="32">Mardakert</option>
									<option value="33">Martuni</option>
									<option value="88">Shaumian</option>
									<option value="34">Shushi</option>
									<option value="28">Stepanakert</option>
								</optgroup>
								<optgroup label="Gegharkunik">
									<option value="71">Chambarak</option>
									<option value="36">Gavar</option>
									<option value="37">Martuni </option>
									<option value="38">Sevan</option>
									<option value="39">Vardenis</option>
								</optgroup>
								<optgroup label="Kotayk">
									<option value="41">Abovian</option>
									<option value="83">Aghveran</option>
									<option value="79">Argel</option>
									<option value="81">Arinj</option>
									<option value="93">Arzni</option>
									<option value="90">Bjni</option>
									<option value="76">Byureghavan</option>
									<option value="66">Charentsavan</option>
									<option value="89">Dzoraghbyur</option>
									<option value="77">Garni</option>
									<option value="42">Hrazdan</option>
									<option value="82">Jrvezh</option>
									<option value="84">Kanakeravan</option>
									<option value="85">Kasagh</option>
									<option value="75">Nor Hachen</option>
									<option value="94">Nurnus</option>
									<option value="91">Ptghni</option>
									<option value="43">Tsakhkadzor</option>
									<option value="67">Yeghvard</option>
									<option value="70">Zovuni</option>
								</optgroup>
								<optgroup label="Lorri">
									<option value="45">Alaverdi</option>
									<option value="46">Spitak</option>
									<option value="47">Stepanavan</option>
									<option value="69">Tashir</option>
									<option value="48">Vanadzor</option>
								</optgroup>
								<optgroup label="Shirak">
									<option value="50">Artik</option>
									<option value="51">Gyumri</option>
									<option value="78">Maralik</option>
								</optgroup>
								<optgroup label="Syunik">
									<option value="53">Goris</option>
									<option value="74">Kajaran</option>
									<option value="54">Kapan</option>
									<option value="55">Meghri</option>
									<option value="56">Sisian</option>
								</optgroup>
								<optgroup label="Tavush">
									<option value="59">Berd</option>
									<option value="58">Dilijan</option>
									<option value="60">Ijevan</option>
									<option value="68">Noyemberyan</option>
								</optgroup>
								<optgroup label="Vayots Dzor">
									<option value="65">Jermuk</option>
									<option value="62">Vayk</option>
									<option value="63">Yeghegnadzor</option>
								</optgroup>
								<option value="64">International</option>
							</select>
						</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3">
					</div>
						<div class="col-md-8">
							<span class="rad">
								<input name="ad_type" id="ad_type_0" type="radio" value="Offered" checked="">
								<label for="ad_type_0">Offered</label>
							</span>
							<span class="rad">
								<input name="ad_type" id="ad_type_1" type="radio" value="Exchange">
								<label for="ad_type_1">Exchange</label>
							</span>
							<span class="rad">
								<input name="ad_type" id="ad_type_2" type="radio" value="Wanted">
								<label for="ad_type_2">Wanted</label>
							</span>
						</div>
				</div>
				<div class='borderdot'></div>
				<!-- address -->
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_address'>Address</label>
					</div>
					<div class="col-md-8">
						<input maxlength="200" class="inp inp-xl" name="address" id="id_address" type="text" placeholder="Enter a location" autocomplete="off">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_constype'>Construction Type</label>
					</div>
					<div class="col-md-8">
						<select class="dummy inp inp-sm" id='id_constype'>
							<option value="" selected="selected">Please select</option>
							<option value="1">Stone</option>
							<option value="2">Panels</option>
							<option value="3">Monolith</option>
							<option value="4">Bricks</option>
							<option value="5">Cassette</option>
							<option value="6">Wooden</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_rooms'>Rooms</label>
					</div>
					<div class="col-md-8">
						<select class="dummy inp inp-sm" id='id_rooms'>
							<option value="" selected="selected">Please select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8+</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_livingspace'>Living Space</label>
					</div>
					<div class="col-md-8">
						<input class="dummy inp inp-sm" id='id_livingspace'><span>m2</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_floor'>Floor</label>
					</div>
					<div class="col-md-8">
						<select class="dummy inp inp-sm" id='id_floor'>
							<option value="" selected="selected">Please select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32+</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_floorbuild'>Floors in the Building</label>
					</div>
					<div class="col-md-8">
						<select class="dummy inp inp-sm" id='id_floorbuild'>
							<option value="" selected="selected">Please select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32+</option>
						</select>
					</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_price'>Price</label>
					</div>
					<div class="col-md-8">
						<input maxlength="12" name="price" id="_idprice" type="text" class='inp inp-sm'>
						<select name="currency" id="_idcurrency" class='inp-xs'>
							<option value="0" selected="selected">AMD</option>
							<option value="1">USD</option>
							<option value="2">EUR</option>
							<option value="3">RUB</option>
						</select>
					</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_title'>Title</label>
					</div>
					<div class="col-md-8">
						<input maxlength="200" class="inp inp-xl" name="title" id="id_title" type="text" placeholder="Enter a Title" autocomplete="off">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<label for='id_desc'>Description</label>
					</div>
					<div class="col-md-8">
						<input maxlength="200" class="inp inp-xxl" name="desc" id="id_desc" type="text" placeholder="Detailed Description of your item or offering..." autocomplete="off">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<span>Photos</span>
					</div>
					<div class="col-md-7 bord">
						<label for='id_photos'> <div class="btn btn-primary"> ADD PHOTO</div></label>
						<input style="display:none;" maxlength="200" class="inp inp-ml" name="photos" id="id_photos" type='file'>
					</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3 text-right pad"></div>
					<div class="col-md-8 pad">
						<div class="radio">
							<label for="id_status0"><input type="radio" name="status" value="Owner" id="id_status0">Owner</label>
						</div>
						<div>
							<label for="id_status0">If you are offering your own property and you are its owner.</label>
						</div>
						<div class="radio">
							<label for="id_status1"><input type="radio" name="status" value="Agency" id="id_status1">Agency</label>
						</div>
						<div>
							<label for="id_status1">If you are a real estate broker or represent a real estate agency.</label>
						</div>
					</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3 text-right pad">
						<span>Contact information</span>
					</div>
					<div class="col-md-8 pad">
						<input type="checkbox" id="client_id" value="client_id" name="contact_information" checked="checked">
						<label for="client_id">(095) 32-20-64</label>
					</div>
				</div>
				<div class='borderdot'></div>
				<div class="row">
					<div class="col-md-3 text-right pad">
					</div>
					<div class="col-md-8 pad">
						<button id="add_preview" class="btn btn-primary">Preview</button>
					</div>
				</div>
		</div>
	</div>
		


			<div style="display: none;"  id="view_3">
				<div id="content" class="container">
						<div class="col-md-9" id="main_content_ads">
						<h2 id="name_ads">Name ads</h2>
						<span id="price_ads">price 360,000 ֏ </span> <span id="country_ads" class="glyphicon glyphicon-globe">Երևան › Աջափնյակ</span>
						<div id="img_ads"><img src=""></div>
						<span>Վիճակ</span>
						<h4 id="new_ads">Նոր</h4>
						<div id="txt_ads" class="txt-ad">TXT Շատ հարմար գին ու շատ բարձր որակ, միայն մեզ մոտ ննջասենյակի կահույքի հավաքածուների մեծ տեսականի
							գունային տարբերակների առկայություն
							ապառիկ առանց կանխավճարի
							առաքում Երևանում անվճար</div>
					</div>
					<div class="col-md-3 border-l" id="right_content_ads">
						<div class="text-center">
							<img width="54px;" src="<?= base_url('img/avatar.png'); ?>">
							<p><a href="" id="user_ads"></a></p>
							<p>List.am-ում է` 23.02.2017</p>
							<button class="btn btn-primary"  data-toggle="modal" data-target="#mytel">Զանգահարել</button>
							<div class="border"></div>
									<button type="button" class="btn-a" data-toggle="modal" data-target="#mymsg">ՈՒղարկել նամակ</button>
							<div class="border"></div>
						</div>
					</div>
				</div>

				<!-- Modal  Msg -->
				<div id="mymsg" class="modal fade" role="dialog">
				  <div class="modal-dialog ">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">ՈՒղարկել նամակ</h4>
				      </div>
				      <p>username</p>
				      <div class="border"></div>
				      <div class="modal-body">
				      	<p>Ձեր հաղորդագրությունը</p>
				        <textarea  name="" id="" cols="30" rows="10"></textarea>
				        <div>
				        	
				        	<span>Անվտանգության կոդ</span>
				        	<input class="input-sm" type="text">
				        </div>
				      	<div class="border"></div>
				      	<div class="text-center">
				      		<button class="btn-a">Ուղարկել</button>
				      		
				      	</div>



				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>


				<!-- Modal Tel-->
				<div id="mytel" class="modal fade" role="dialog">
				  <div class="modal-dialog ">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Զանգահարել</h4>
				      </div>
				      <p>username</p>
				      <div class="border"></div>
				      <div class="modal-body text-center">
				      	<h3><a href="tel:+37455555555">+37455555555</a></h3>
				      	<div class="border"></div>
				      	<div class="text-center">
				      		<p>Խնդիրներ ունեք հայտարարության հետ կապված:
				Տեղյակ պահեք մեզ:</p>      		
				      	</div>



				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>

				<!-- Modal Top-->
				<div id="top_mod" class="modal fade" role="dialog">
				  <div class="modal-dialog ">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Տեղադրել Տոպ-ում
				</h4>
				      </div>
				      <p>Հայտարարությունը կտեղադրվի "Տոպ Հայտարարություններ" -ի ցուցակում` համապատասխան բաժնի էջի սկզբնամասում:</p>
				      <div class="border"></div>
				      <div class="modal-body ">
				      	<ol>
				      		<li>Դիտողների քանակի զգալի ավելացում:</li>
				      		<li>Որոնման արդյունքում առաջնահերթ ցուցադրում:</li>
				      		<li>Մինչ ժամկետի սպառվելը` հայատարարության նշում դեղին գույնով:</li>
				      	</ol>
				      	<div class="border"></div>
				      	<div class="text-center">
				      		<p><a href="">Մանրամասներ >></a></p>      		
				      	</div>



				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>	
			</div>


		
	
</div>