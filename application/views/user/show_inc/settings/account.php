
			<div class="col-md-9 border-l">
				<div class="row">
					<div class="col-md-10">
						<h4>Փոխել գաղտնաբառը</h4>
						<span>Դուք կարող եք փոխել ձեր գաղտնաբառը, մուտքագրելով հին գաղտնաբառը, այնուհետ մուտքագրելով եւ հաստատելով նոր գաղտնաբառը:</span>
					</div>
					<div class="ac_button" class="col-md-2">
						<button   data-toggle="modal" data-target="#pwd-r" class="btn-a">Փոփոխել</button>
					</div>		
				</div>
				<div class="border"></div>
				<div class="row">
					<div class="col-md-10">
						<h4>Փոփոխել էլ.փոստի հասցեն</h4>
						<span>Ձեր էլ. փոստի հասցեն փոխելու համար մուտքագրեք նոր էլ. փոստի հասցեն, որին կուղարկվի նամակ հաստատման համար:</span>
					</div>
					<div class="ac_button" class="col-md-2">
						<button data-toggle="modal" data-target="#mail-r" class="btn-a">Փոփոխել</button>
					</div>		
				</div>
				<div class="border"></div>
				<div class="row">
					<div class="col-md-10">
						<h4>Հեռացնել հաշիվը</h4>
						<span>Դուք կարող եք մշտապես հեռացնել ձեր հաշիվը: Ձեր հայտարարությունները եւ այլ տեղեկությունները կհեռացվեն, եւ դուք երբեք չեք կարողանա կրկին օգտագործել այս էլ. փոստի հասցեն List.am կայքում:</span>
					</div>
					<div class="ac_button" class="col-md-2">
						<button data-toggle="modal" data-target="#ac-remove" class="btn-red">Հաստատել</button>
					</div>		
				</div>
			</div>
		</div>		
	</div>
</div>



<!-- Modal pwd-r-->
<div id="pwd-r" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Փոխել գաղտնաբառը</h4>
      </div>
      <div class="modal-body">
	    <div>
	       <p>Մուտքագրեք ձեր ընթացիկ գաղտնաբառը, նոր գաղտնաբառը եւ կրկին մուտքագրեք նոր գաղտնաբառը, սխալները բացառելու համար:</p>
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="psw0">Գործող գաղտնաբառ</label>
	        <input class="input-sm col-md-4"  type="password" id="old_password" >
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="psw1">Նոր գաղտնաբառ</label>
	        <input class="input-sm  col-md-4"  type="password" id="new_password">
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="psw2">Կրկնեք գաղտնաբառը</label>
	        <input class="input-sm  col-md-4"  type="password" id="repeat_password">
	    </div>
	    
	    <div class="row text-center">
			<button  data-toggle="modal" data-target="#contact_modal" class="btn-a" id="edit_password">Փոխել գաղտնաբառը</button>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Modal mail-r-->
<div id="mail-r" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Փոփոխել էլ.փոստի հասցեն</h4>
      </div>
      <div class="modal-body">
	    <div>
	       <p>Մուտքագրեք ձեր գաղտնաբառը և նոր էլ. փոստի հասցեն, որին կուղարկվի հաստատման նամակը:</p>
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="pswm">ձեր գաղտնաբառ</label>
	        <input class="input-sm col-md-4" id="password" type="password" >
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="new_mail">Ձեր նոր էլ.փոստի հասցեն</label>
	        <input class="input-sm  col-md-4" id="new_email" type="email" >
	    </div>
	    
	    <div class="row text-center">
			<button  id="edit_email" data-toggle="modal" data-target="#contact_modal" class="btn-a">Ուղարկել հաստատման նամակ</button>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal ac-remove-->
<div id="ac-remove" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Հեռացնել հաշիվը</h4>
      </div>
      <div class="modal-body">
	    <div>
	       <p>Ձեր հաշիվը հեռացնելու համար ձեզ կուղարկվի հաստատման նամակ:</p>
	       <div class="border"></div>
	       <span class="red_txt">Եթե դուք շարունակեք այդ գործողությունը, ապա Ձեր հաշիվը, հայտարարությունները, հաղորդագրությունները և մնացած այլ տեղեկատվությունները կհեռացվեն։ Հաստատված հեռախոսահամարները չի լինի օգտագործել այլ հաշվում երկարատև ժամանակահատվածում։ Նույն էլ․ փոստի հասցեով example@gmail.com կրկնակի գրանցումը կլինի անհնար։</span>
	       <div class="border"></div>
	    </div>
	    <div class="row text-right">
	        <label class="col-md-4" for="psw_remove">ձեր գաղտնաբառ</label>
	        <input class="input-sm col-md-4" id="password_delete" type="password" >
	    </div>
	    
	    <div class="row text-center">
			<button id="delete_my_profil"  data-toggle="modal" data-target="#contact_modal" class="btn-a">Ուղարկել հաստատման նամակ</button>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
