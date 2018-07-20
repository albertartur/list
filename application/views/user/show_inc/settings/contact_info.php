         <?php 

         $contact_information = $contact_information[0]['contact_information'];
         $unserialize =  unserialize($contact_information);

         ?> 

			
			<div class="col-md-9 border-l">
				<div class="row text-right">
					<div class="col-md-3">Հեռախոսահամար</div>
					<div class="col-md-3" id="get_number"><?=$unserialize['number'];?></div>
					<div class="border"></div>
				</div>
				<div class="row text-right">
					<div class="col-md-3">Skype</div>
					<div class="col-md-3" id="get_skype"><?=$unserialize['skype'];?></div>
					<div class="border"></div>
				</div>
				<div class="row text-right">
					<div class="col-md-3">Viber</div>
					<div class="col-md-3" id="get_viber" ><?=$unserialize['viber'];?></div>
					<div class="border"></div>
				</div>
				<div class="row text-right">
					<div class="col-md-3">WhatsApp</div>
					<div class="col-md-3" id="get_WhatsApp"><?=$unserialize['WhatsApp'];?></div>
					<div class="border"></div>
				</div>
 				<div class="row text-center">
					<button  data-toggle="modal" data-target="#contact_modal" class="btn-a">փոփոխել</button>
				</div>
			</div>
		</div>		
	</div>
</div>



<!-- Modal zoom_img-->
<div id="contact_modal" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Կոնտակտային տվյալներ</h4>
        <img src="<?= base_url('img/phone.png'); ?>">
        <img src="<?= base_url('img/skype.png'); ?>">
         <img src="<?= base_url('img/viber.png'); ?>">
         <img src="<?= base_url('img/whatsapp.png'); ?>">
      </div>
      <div class="modal-body">
	    <div>
	        <h5><label for="number"> Մուտքագրեք ձեր բջջային հեռախոսահամարը: </label></h5>
	        <input class="input-sm" type="number" id="number" value="<?=$unserialize['number'];?>">
	        <img class="inp_icon_t" src="<?= base_url('img/phone.png'); ?>">
	        <div class="border"></div>
	    </div>
	    <div>
	        <h5><label for="skype"> փոփոխել Skype: </label></h5>
	        <input id="skype" class="input-sm" type="text" value="<?=$unserialize['skype'];?>">
	        <img class="inp_icon_s" src="<?= base_url('img/skype.png'); ?>">

	        <div class="border"></div>
	    </div>
	    <div>
	        <h5><label for="viber"> փոփոխել Viber- համարը:</label> </h5>

	        <input id="viber" class="input-sm" type="number" value="<?=$unserialize['viber'];?>" >
	        <img class="inp_icon_v" src="<?= base_url('img/viber.png'); ?>">

	        <div class="border"></div>
	    </div>
	    <div>
	        <h5><label for="WhatsApp"> փոփոխել WhatsApp-ի համարը: </label></h5>

	        <input id="WhatsApp" class="input-sm" type="number" value="<?=$unserialize['WhatsApp'];?>">
	        <img class="inp_icon_w" src="<?= base_url('img/whatsapp.png'); ?>">
	        <div class="border"></div>
	    </div>
	    
	    <div class="row text-center">
			<button id="contact_info" data-toggle="modal" data-target="#contact_modal" class="btn-a">Պահպանել</button>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>