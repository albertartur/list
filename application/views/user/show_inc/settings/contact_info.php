<div id="Կոնտակտային տվյալներ">
	

<?php
$contact_information = $contact_information[0]['contact_information'];
$unserialize =  unserialize($contact_information);

?>

<input id="number" type="number"  placeholder="number" value="<?=$unserialize['number'];?>">
<input id="skype" type="text" placeholder="skype" value="<?=$unserialize['skype'];?>">
<input id="viber" type="number"  placeholder="viber" value="<?=$unserialize['viber'];?>">
<input id="WhatsApp" type="number"  placeholder="WhatsApp" value="<?=$unserialize['WhatsApp'];?>">
<input type="button"  id="contact_info" value="Ավելացնել" >
 


  </div>