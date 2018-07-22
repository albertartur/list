<?php  
    $p=json_encode($all);
    ?>
<script type="text/javascript"> 
    $(document).ready(function(){
    	let  k=JSON.parse('<?=$p?>');
    console.log(k);
    let zangvac=k;
    let a=[];
    div=$('.ip');
    console.log(div);
    for(let i=0;i<div.length;i++){
    	let k=0;
    	a[i]=$(div[i]).attr('id');
    	for (let key in zangvac) {
    		if(a[i]==zangvac[key])
    		k=1;
    	}
    	if(k==0)
    	$(div[i]).remove();
    }
    })
    
</script>
<div class="main">
    <div class=" container bot">
        <div class='col-md-7'>
            <span>What type of posting would you like to add</span>
        </div>
        <div class="col-md-1">
            <center>
                <div id="1" class="klor">1</div>
                <span> Բաժին</span>
            </center>
        </div>
        <div class="col-md-2 text-center">
            <div id="2" class="hov">2</div>
            <span> Հայտարարություն</span>
        </div>
        <div class="col-md-1">
            <center>
                <div id="3" class="klor">3</div>
                <span> Դիտում</span>
            </center>
        </div>
        <div class="col-md-1">
            <div id="4" class="klor">4</div>
            <span> Ավելացնել</span>
        </div>
    </div>
    <div class="container  content-sm" id="view_2">
        <div id='mm' class="form-group" >
            <div class="row ip" id='location'>
                <div class="col-md-3 text-right pad"><label for='id_location'>Location</label></div>
                <div class="col-md-8">
                    <select class="inp inp-m" id='id_location'>
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
            <div class="row ip" id='type'>
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <span>
                    <input name="types2" id="id_type0" type="radio" value="Offered" checked="">
                    <label for="ad_type_0">Offered</label>
                    </span>
                    <span class="rad">
                    <input name="types2" id="id_type1" type="radio" value="Exchange">
                    <label for="ad_type_1">Exchange</label>
                    </span>
                    <span class="rad">
                    <input name="types2" id="id_type2" type="radio" value="Wanted">
                    <label for="ad_type_2">Wanted</label>
                    </span>
                </div>
            </div>
            <div class="row ip" id='typemin'>
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <span>
                    <input name="typemin" id="id_typemin0" type="radio" value="Offered" checked="">
                    <label for="id_typemin0">Offered</label>
                    </span>
                    <span class="rad">
                    <input name="typemin" id="id_typemin1" type="radio" value="Wanted">
                    <label for="id_typemin1">Wanted</label>
                    </span>
                </div>
            </div>
            <div class="row ip" id='type_agr'>
                <div class="col-md-3"></div>
                <div class="col-md-8">
                    <span>
                    <input name="type_agr" id="id_type_agr0" type="radio" value="Offered" checked="">
                    <label for="id_type_agr0">Offered</label>
                    </span>
                    <span class="rad">
                    <input name="type_agr" id="id_type_agr1" type="radio" value="For_rent">
                    <label for="id_type_agr1">For Rent</label>
                    </span>
                    <span class="rad">
                    <input name="type_agr" id="id_type_agr2" type="radio" value="Exchange">
                    <label for="id_type_agr2">Exchange</label>
                    </span>
                    <span class="rad">
                    <input name="type_agr" id="id_type_agr3" type="radio" value="Wanted">
                    <label for="id_type_agr3">Wanted</label>
                    </span>
                </div>
            </div>
            <div class='borderdot'></div>
            <!-- address -->
            <div class="row ip" id='address'>
                <div class="col-md-3 text-right pad">
                    <label for='id_address'>Address</label>
                </div>
                <div class="col-md-8">
                    <input maxlength="200" class="inp inp-xl" name="address" id="id_address" type="text" placeholder="Enter a location" autocomplete="off">
                </div>
            </div>
            <div class="row ip" id='constype'>
                <div class="col-md-3 text-right pad">
                    <label for='id_constype'>Construction Type</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_constype'>
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
            <div class="row ip" id='rooms'>
                <div class="col-md-3 text-right pad">
                    <label for='id_rooms'>Rooms</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_rooms'>
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
            <div class="row ip" id='livingspace'>
                <div class="col-md-3 text-right pad">
                    <label for='id_livingspace'>Living Space</label>
                </div>
                <div class="col-md-8">
                    <input class="inp inp-sm" id='id_livingspace'><span>m2</span>
                </div>
            </div>
            <div class="row ip" id='land'>
                <div class="col-md-3 text-right pad">
                    <label for='id_land'>Land Size</label>
                </div>
                <div class="col-md-8">
                    <input class="inp inp-sm" id='id_land'><span>m2</span>
                </div>
            </div>
            <div class="row ip" id='floor'>
                <div class="col-md-3 text-right pad">
                    <label for='id_floor'>Floor</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_floor'>
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
            <div class="row ip" id='floorbuild'>
                <div class="col-md-3 text-right pad">
                    <label for='id_floorbuild'>Floors in the Building</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_floorbuild'>
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
            <div class="row ip" id='size'>
                <div class="col-md-3 text-right pad">
                    <label for='id_size'>Size</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_size'>
                        <option value="" selected="selected">Please select</option>
                        <option value="11">R11</option>
                        <option value="12">R12</option>
                        <option value="13">R13</option>
                        <option value="14">R14</option>
                        <option value="15">R15</option>
                        <option value="16">R16</option>
                        <option value="17">R17</option>
                        <option value="18">R18</option>
                        <option value="19">R19</option>
                        <option value="20">R20</option>
                        <option value="21">R21</option>
                        <option value="22">R22</option>
                        <option value="23">R23</option>
                        <option value="24">R24</option>
                        <option value="25">R25</option>
                        <option value="26">R26</option>
                        <option value="27">R27</option>
                        <option value="28">R28</option>
                        <option value="29">R29</option>
                        <option value="30">R30</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='condition'>
                <div class="col-md-3 text-right pad">
                    <label for='id_condition'>Condition</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_condition'>
                        <option value="0" selected="selected">Please select</option>
                        <option value="1">Used</option>
                        <option value="2">New</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='make'>
                <div class="col-md-3 text-right pad"><label for='id_make'>Make</label></div>
                <div class="col-md-8">
                    <select class="inp inp-m" id='id_make'>
                        <option value="0" selected="selected">Please select</option>
                        <option value="1">Acura</option>
                        <option value="2">Alfa Romeo</option>
                        <option value="3">Asia Motors</option>
                        <option value="4">Aston Martin</option>
                        <option value="5">Audi</option>
                        <option value="7">BMW</option>
                        <option value="9">BYD</option>
                        <option value="6">Bentley</option>
                        <option value="88">Bugatti</option>
                        <option value="8">Buick</option>
                        <option value="10">Cadillac</option>
                        <option value="93">Chery</option>
                        <option value="11">Chevrolet</option>
                        <option value="12">Chrysler</option>
                        <option value="13">Citroen</option>
                        <option value="14">Dacia</option>
                        <option value="16">Daewoo</option>
                        <option value="17">Daihatsu</option>
                        <option value="18">Dodge</option>
                        <option value="89">Dong Feng</option>
                        <option value="19">ErAZ</option>
                        <option value="20">Ferrari</option>
                        <option value="21">Fiat</option>
                        <option value="22">Ford</option>
                        <option value="92">Foton</option>
                        <option value="23">GAZ / ГАЗ</option>
                        <option value="25">GMC</option>
                        <option value="24">Geely</option>
                        <option value="26">Great Wall</option>
                        <option value="27">Honda</option>
                        <option value="28">Hongxing</option>
                        <option value="29">Huanghai</option>
                        <option value="30">Hummer</option>
                        <option value="31">Hyundai</option>
                        <option value="35">IZH / ИЖ</option>
                        <option value="32">Ikco Iran</option>
                        <option value="33">Infiniti</option>
                        <option value="34">Isuzu</option>
                        <option value="36">Jaguar</option>
                        <option value="37">Jeep</option>
                        <option value="38">Kia</option>
                        <option value="39">Lamborghini</option>
                        <option value="40">Lancia</option>
                        <option value="41">Land Rover</option>
                        <option value="42">Lexus</option>
                        <option value="43">Lincoln</option>
                        <option value="44">Lotus</option>
                        <option value="51">MG</option>
                        <option value="52">MINI</option>
                        <option value="45">Mahindra</option>
                        <option value="46">Maserati</option>
                        <option value="47">Maybach</option>
                        <option value="48">Mazda</option>
                        <option value="49">Mercedes-Benz</option>
                        <option value="50">Mercury</option>
                        <option value="53">Mitsubishi</option>
                        <option value="54">Moskvich / Москвич</option>
                        <option value="55">Nissan</option>
                        <option value="56">Niva / Нива</option>
                        <option value="57">OKA</option>
                        <option value="58">Oldsmobile</option>
                        <option value="59">Opel</option>
                        <option value="60">Peugeot</option>
                        <option value="61">Plymouth</option>
                        <option value="62">Pontiac</option>
                        <option value="63">Porsche</option>
                        <option value="64">Renault</option>
                        <option value="65">Rolls Royce</option>
                        <option value="66">Rover</option>
                        <option value="67">Saab</option>
                        <option value="68">Saturn</option>
                        <option value="69">Scion</option>
                        <option value="70">Seat</option>
                        <option value="71">Skoda</option>
                        <option value="72">Smart</option>
                        <option value="73">Ssang-yong</option>
                        <option value="74">Subaru</option>
                        <option value="75">Suzuki</option>
                        <option value="86">Talbot</option>
                        <option value="87">Tata</option>
                        <option value="85">Tesla</option>
                        <option value="76">Toyota</option>
                        <option value="91">Trabant</option>
                        <option value="77">UAZ</option>
                        <option value="78">VAZ / ВАЗ / Lada</option>
                        <option value="79">Volkswagen</option>
                        <option value="80">Volvo</option>
                        <option value="90">Wartburg</option>
                        <option value="81">ZAZ / ЗАЗ</option>
                        <option value="83">ZIL / ЗИЛ</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='year'>
                <div class="col-md-3 text-right pad">
                    <label for='id_year'>Year</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_year'>
                        <option value="0" selected="selected">Please select</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='model'>
                <div class="col-md-3 text-right pad">
                    <label for='id_model'>Model</label>
                </div>
                <div class="col-md-8">
                    <input class="inp inp-sm" id='id_model'>
                </div>
            </div>
            <div class="row ip" id='mileage'>
                <div class="col-md-3 text-right pad">
                    <label for='id_mileage'>Mileage</label>
                </div>
                <div class="col-md-8">
                    <input class="inp inp-sm" id='id_mileage'><span>km</span>
                </div>
            </div>
            <div class="row ip" id='engine'>
                <div class="col-md-3 text-right pad">
                    <label for='id_engine'>Engine Type</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_engine'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Gasoline</option>
                        <option value="2">Diesel</option>
                        <option value="3">Natural Gas</option>
                        <option value="4">Hybrid</option>
                        <option value="5">Electric</option>
                        <option value="9">Other</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='transmission'>
                <div class="col-md-3 text-right pad">
                    <label for='id_transmission'>Transmission</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_transmission'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Manual</option>
                        <option value="2">Automatic</option>
                        <option value="3">Other</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='wheel'>
                <div class="col-md-3 text-right pad">
                    <label for='id_wheel'>Steering Wheel</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_wheel'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Left</option>
                        <option value="2">Right</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='customs'>
                <div class="col-md-3 text-right pad">
                    <label for='id_customs'>Cleared Customs</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_customs'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='emp_type'>
                <div class="col-md-3 text-right pad">
                    <label for='id_emp_type'>Employment Type</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_emp_type'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Permanent</option>
                        <option value="2">Temporary</option>
                        <option value="3">Internship</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='job_schedule'>
                <div class="col-md-3 text-right pad">
                    <label for='id_job_schedule'>Job_Schedule</label>
                </div>
                <div class="col-md-8">
                    <select class="inp inp-sm" id='id_job_schedule'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Full time</option>
                        <option value="2">Part time</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='salary'>
                <div class="col-md-3 text-right pad">
                    <label for='id_salary'>Salary From</label>
                </div>
                <div class="col-md-8">
                    <input maxlength="12" name="salary" id="id_salary" type="number" class='inp inp-sm'>
                    <select name="currency" id="id_currency" class='inp-xs'>
                        <option value="0" selected="selected">AMD</option>
                        <option value="1">USD</option>
                        <option value="2">EUR</option>
                        <option value="3">RUB</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='edu'>
                <div class="col-md-3 text-right pad"><label for='id_edu'>Education</label></div>
                <div class="col-md-8">
                    <select class="inp inp-m" id='id_edu'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">Higher education</option>
                        <option value="2">Incomplete higher education</option>
                        <option value="3">Secondary education</option>
                        <option value="4">Secondary special education</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='work_exp'>
                <div class="col-md-3 text-right pad"><label for='id_work_exp'>Work Experience</label></div>
                <div class="col-md-8">
                    <select class="inp inp-m" id='id_work_exp'>
                        <option value="" selected="selected">Please select</option>
                        <option value="1">no work experience</option>
                        <option value="2">less than a year</option>
                        <option value="3">1-3 years</option>
                        <option value="4">3-5 years</option>
                        <option value="5">5-10 years</option>
                        <option value="6">10-15 years</option>
                        <option value="7">15-20 years</option>
                        <option value="8">over 20 years</option>
                    </select>
                </div>
            </div>
            <div class='borderdot'></div>
            <div class="row ip" id='price'>
                <div class="col-md-3 text-right pad">
                    <label for='id_price'>Price</label>
                </div>
                <div class="col-md-8">
                    <input maxlength="12" name="price" id="id_price" type="text" class='inp inp-sm'>
                    <select name="currency" id="id_currency" class='inp-xs'>
                        <option value="0" selected="selected">AMD</option>
                        <option value="1">USD</option>
                        <option value="2">EUR</option>
                        <option value="3">RUB</option>
                    </select>
                </div>
            </div>
            <div class='borderdot'></div>
            <div class="row ip" id='type_veh'>
                <div class="col-md-3 text-right pad"><label for='id_type_veh'>Type</label></div>
                <div class="col-md-8">
                    <select class="inp inp-m" id='id_type_veh'>
                        <option value="0" selected="selected">Please select</option>
                        <option value="1">Car Engine</option>
                        <option value="2">Car Body</option>
                        <option value="3">Transmission</option>
                        <option value="4">Steering Systems</option>
                        <option value="5">Braking Systems</option>
                        <option value="6">Exhaust Systems</option>
                        <option value="7">Fuel Systems</option>
                        <option value="8">Suspension Systems</option>
                        <option value="9">Car Batteries</option>
                        <option value="10">Electrical Systems</option>
                        <option value="11">Lighting and Optics</option>
                        <option value="12">Car Interior</option>
                        <option value="13">Car Glass</option>
                        <option value="50">Everything Else</option>
                    </select>
                </div>
            </div>
            <div class="row ip" id='title'>
                <div class="col-md-3 text-right pad">
                    <label for='id_title'>Title</label>
                </div>
                <div class="col-md-8">
                    <input maxlength="200" class="inp inp-xl" name="title" id="id_title" type="text" placeholder="Enter a Title" autocomplete="off">
                </div>
            </div>
            <div class="row ip" id='description'>
                <div class="col-md-3 text-right pad">
                    <label for='id_description'>Description</label>
                </div>
                <div class="col-md-8">
                    <input maxlength="200" class="inp inp-xxl" name="desc" id="id_description" type="text" placeholder="Detailed Description of your item or offering..." autocomplete="off">
                </div>
            </div>
            <div class="row ip" id='photos'>
                <div class="col-md-3 text-right pad">
                    <span>Photos</span>
                </div>
                <div class="col-md-7 bord">
                    <label for='id_photos'>
                        <div class="btn btn-primary"> ADD PHOTO</div>
                    </label>
                    <input style="display:none;" maxlength="200" class="inp inp-ml" name="photos" id="id_photos" type='file' multiple="multipart/form-data">
                    <div id="list"></div>
                </div>
            </div>
            <div class='borderdot'></div>
            <div class="row ip" id='status_realest'>
                <div class="col-md-3 text-right pad"></div>
                <div class="col-md-8 pad">
                    <div class="radio">
                        <label for="id_stat_rel0"><input type="radio" name="status_realest" value="Owner" id="id_status0">Owner</label>
                    </div>
                    <div>
                        <label for="id_stat_rel0">If you are offering your own property and you are its owner.</label>
                    </div>
                    <div class="radio">
                        <label for="id_stat_rel1"><input type="radio" name="status_realest" value="Agency" id="id_status1">Agency</label>
                    </div>
                    <div>
                        <label for="id_stat_rel1">If you are a real estate broker or represent a real estate agency.</label>
                    </div>
                </div>
            </div>
            <div class="row ip" id='status_vehicles'>
                <div class="col-md-3 text-right pad"></div>
                <div class="col-md-8 pad">
                    <div class="radio">
                        <label for="id_stat_veh0"><input type="radio" name="status_vehicles" value="Owner" id="id_stat_veh0">Owner</label>
                    </div>
                    <div>
                        <label for="id_stat_veh0">If you are selling your personal vehicle and you are its owner.</label>
                    </div>
                    <div class="radio">
                        <label for="id_stat_veh1"><input type="radio" name="status_vehicles" value="Dealer" id="id_stat_veh1">Dealer</label>
                    </div>
                    <div>
                        <label for="id_stat_veh1">If you are a car broker, represent a dealership or selling a lot of cars.</label>
                    </div>
                </div>
            </div>
            <div class="row ip" id='status_jobs'>
                <div class="col-md-3 text-right pad"></div>
                <div class="col-md-8 pad">
                    <div class="radio">
                        <label for="id_stat_jobs0"><input type="radio" name="status_jobs" value="Owner" id="id_stat_jobs0">Company</label>
                    </div>
                    <div>
                        <label for="id_stat_jobs0">If you represent a company, store, restaurant, office or any other organization.</label>
                    </div>
                    <div class="radio">
                        <label for="id_stat_jobs1"><input type="radio" name="status_jobs" value="Dealer" id="id_stat_jobs1">Recruitment Agency</label>
                    </div>
                    <div>
                        <label for="id_stat_jobs1">If you are a head hunter, recruiter or represent a recruiting agency.</label>
                    </div>
                    <div class="radio">
                        <label for="id_stat_jobs2"><input type="radio" name="status_jobs" value="Dealer" id="id_stat_jobs2">Individual</label>
                    </div>
                    <div>
                        <label for="id_stat_jobs2">If you are a sole proprietor or an individual.</label>
                    </div>
                </div>
            </div>
            <div class='borderdot'></div>
            <div class="row ip" id='tel'>
                <div class="col-md-3 text-right pad">
                    <span>Contact information</span>
                </div>
                <div class="col-md-8 pad">
                    <input type="checkbox" id="client_id" value="client_id" name="contact_information" checked="checked">
                    <label for="client_id">(095) 32-20-64</label>
                </div>
            </div>
            <div class='borderdot'></div>
            <div>
                <div class="col-md-3 text-right pad"></div>
                <div class="col-md-8 pad">
                    <button id="add_preview" class="btn btn-primary">Preview</button>
                </div>
            </div>
        </div>
    </div>
    <div id='asd'></div>
    <div style="display: none;"  id="view_3">
        <div id="content" class="container">
            <div class="col-md-9" id="main_content_ads">
                <h2 id="name_ads">  </h2>
                <div id="sp">	
                    <span id="price_ads">  </span><span id="Exchange"> </span> <span id="country_ads" class="glyphicon glyphicon-globe"> </span>
                </div>
                <div id="img_ads_d"> </div>
                <div class="row" id='info'>							
                </div>
                <div id="txt_ads" class="txt-ad"> </div>
                <div class="row" id="control_ads">
                    <div class="col-md-2">
                        <button id="post_ads" class="btn-a">Ավելացնել</button>		
                    </div>
                    <div class="col-md-2">
                        <button id="update_ads" class="btn-a">Փոփոխել</button>		
                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('UsersController/show?my_profil=%D5%80%D5%A1%D5%B5%D5%BF%D5%A1%D6%80%D5%A1%D6%80%D5%B8%D6%82%D5%A9%D5%B5%D5%B8%D6%82%D5%B6%D5%B6%D5%A5%D6%80'); ?>" id="delet_ads" class="btn btn-warning">Ընդհատել</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-l" id="right_content_ads">
                <div class="text-center">
                    <?php 
                        if (empty($user['image'])) {
                            $user_img = 'img/avatar.png';
                        }
                        else{
                            $user_img = 'uploads/'.$user['image'];
                        }
                    ?>
                    <img width="150px;" src="<?= base_url($user_img); ?>">
                    <p><a href=""><?= $user['user_name']; ?></a></p>
                    <div class="border">My Ads</div>
                    <?php
			            foreach ($my_ads as $v) {
			                 if (intval($v['sub_id']) < 103) {
			                     $info = unserialize($v['info_array']);
			                     if (!empty($info['photos'][0])) {
			                        $img = 'ob_img_ads';
			                        $img_url = $info['photos'][0];
			                    }
			                     else{
			                        $img = '';
			                        $img_url = 'img/noimage.jpg';
			                    }
			                    echo "<div class = 'rand_list ".$info['type']."'>
			                            <div class='img_list'>
			                                <a href='".base_url('category/ads/'.$v['id'])."'><img class='".$img."' src='".base_url($img_url)."'></a>
			                            </div>
			                            <div class='name_list'><a href='".base_url('category/ads/'.$v['id'])."'> ".$v['name']."</a></div>
			                                <div class='price'>".$info['price']."</div>
			                            </div>";
			                }
			            }
			        ?>
                    <div class="border"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    function handleFileSelect(evt) {
        var files = evt.target.files; 
        for (var i = 0, f; f = files[i]; i++) {
          if (!f.type.match('image.*')) {
            continue;
          }
          var reader = new FileReader();
          reader.onload = (function(theFile) {
            return function(e) {
              var span = document.createElement('span');
              span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
              document.getElementById('list').insertBefore(span, null);
            };
          })(f);
          reader.readAsDataURL(f);
        }
      }
     document.getElementById('id_photos').addEventListener('change', handleFileSelect, false);
</script>