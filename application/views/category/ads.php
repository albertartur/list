


<div id="content" class="container">
	<div class="container">	
		<ol class="breadcrumb col-md-10">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Library</a></li>
		  <li class="active">Data</li>
		</ol>
	</div>
	<div class="col-md-9" id="main_content_ads">
		<h2>Name ads</h2>
		<div>
      <span>price 360,000 ֏ </span> <span class="glyphicon glyphicon-globe">Երևան › Աջափնյակ</span>  
    </div>

    		<div id="img_ads">
          <img id="top_img" src=""> 
          <div class="text-center">
            <img id="prev" src="<?= base_url('img/prev.png'); ?>">
            <img class="zoom_img"  data-toggle="modal" data-target="#zoom_img" src="<?= base_url('img/zoom.png'); ?>"> 
             <img id="next" src="<?= base_url('img/next.png'); ?>">
          </div>
        </div>
        <div id="iiii">
          <img class="img_next" src="<?= base_url('img/h.jpg'); ?>">
          <img class="img_next" src="<?= base_url('img/r.jpg'); ?>">
          <img class="img_next" src="<?= base_url('img/e.jpg'); ?>">
          <img class="img_next" src="<?= base_url('img/k.jpg'); ?>">
          <img class="img_next" src="<?= base_url('img/j.jpg'); ?>">
        </div>
    <div>
  		<span>Վիճակ</span>
  		<h4>Նոր</h4>
    </div>
    <!-- ete bnakarannaaa
         -->    <div class="row">
                    <div class="col-md-3">
                        <span>Շինության տիպը</span>
                        <p class="text-b">11</p>
                    </div>
                    <div class="col-md-2">
                        <span>Սենյակներ</span>
                         <p class="text-b">11</p>
                    </div>
                    <div class="col-md-2">
                        <span>Մակերես</span>
                         <p class="text-b">11</p>
                    </div>
                    <div class="col-md-2">
                        <span>Հարկ Հարկը</span>
                         <p class="text-b">11</p>
                    </div>
                    <div class="col-md-3">
                        <span>Հարկերի քանակ</span>
                         <p class="text-b">11</p>
                    </div>
                </div>
		<div class="txt-ad">TXT Շատ հարմար գին ու շատ բարձր որակ, միայն մեզ մոտ ննջասենյակի կահույքի հավաքածուների մեծ տեսականի
			գունային տարբերակների առկայություն
			ապառիկ առանց կանխավճարի
			առաքում Երևանում անվճար</div>
		<span class="date_ads">Հայտարարության համարը: 7471954</span><span class="date_ads"> Ամսաթիվ: 22.04.2017 </span><span class="date_ads"> Թարմացվել է: 11.07.2018</span>

	</div>
	<div class="col-md-3 border-l" id="right_content_ads">
		<div class="text-center">
			<img width="54px;" src="<?= base_url('img/avatar.png'); ?>">
			<p><a href="">User	Name</a></p>
			<p>List.am-ում է` 23.02.2017</p>
			<button class="btn btn-primary"  data-toggle="modal" data-target="#mytel">Զանգահարել</button>
			<div class="border"></div>
			<button type="button" class="btn-a" data-toggle="modal" data-target="#mymsg">ՈՒղարկել նամակ</button>
				<div class="border"></div>
				<div class="row">
					<div data-toggle="modal" data-target="#top_mod" class="col-md-4">
						<img width="52px" src="<?= base_url('img/top.png'); ?>">
						<span text-right>Տոպ</span>
					</div>
					<div  data-toggle="modal" data-target="#home_mod" class="col-md-4">
						<img width="52px" src="<?= base_url('img/home.png'); ?>">
						<span>գլխավոր էջ</span>
					</div>
					<div  data-toggle="modal" data-target="#free_mod" class="col-md-4">
						<img width="52px" src="<?= base_url('img/free.png'); ?>">
						<span>Շտապ</span>
					</div>
				</div>
				<div class="border"></div>
				<div>
					<div>Նմանատիպ հայտարարություններ</div>
					<div>1</div>
					<div>2</div>
					<div>3</div>
					<div>4</div>
				</div>

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

<!-- Modal Home-->
<div id="home_mod" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Տեղադրել գլխավոր էջի վրա

</h4>
      </div>
      <p>Հայտարարությունը կտեղադրվի կայքի գլխավոր էջի վրա` այլ հայտարարությունների հետ պարբերական կրկնության սկզբունքով:</p>
      <div class="border"></div>
      <div class="modal-body ">
        <ol>
          <li>Առավելագույն քանակությամբ դիտումներ` կայքի ամենաբարձր այցելություն ունեցող էջում:</li>
          <li>Առաջինը, ինչ կտեսնեն կայքի այցելուները, դա գլխավոր էջում տեղադրված Ձեր հայտարարությունն է:</li>
          <li>Հայտարարությունը առանձնացված կլինի դեղին գույնով մինչ ժամկետի սպառվելը:</li>
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

<!-- Modal free-->
<div id="free_mod" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Դարձնել շտապ</h4>
      </div>
      <p>Հայտարարությունների ցանկում և որոնման արդյունքում Ձեր հայտարարութունը նշված կլինի Շտապ! նշանով:</p>
      <div class="border"></div>
      <div class="modal-body ">
        <ol>
          <li>"Շտապ!" նշանը պահպանվում է մինչև Ձեր հայտարարության ժամկետի սպառվելը:</li>
          <li>"Շտապ!" հայտարարությունները կայքի այցելուներից ստանում են ավելի շատ արձագանքներ:</li>
          <li>Իդեալական հնարավորություն է գրավել ավելի մեծ քանակով այցելուների ուշադրությունը Ձեր հայտարարության նկատմամբ:</li>
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
<!-- Modal zoom_img-->
<div id="zoom_img" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">name ads</h4>
      </div>
      <div class="modal-body">
        <img id="zoom_img_ads" src="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>