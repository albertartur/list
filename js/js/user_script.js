$(document).ready(function(){


// edit contact_info
$('#contact_info').on('click',function(){
	
    var number     = $('#number').val();
    var skype      = $('#skype').val();
    var viber      = $('#viber').val();
    var WhatsApp   = $('#WhatsApp').val();

    $(get_number).text(number);
    $(get_skype).text(skype);
    $(get_viber).text(viber);
    $(get_WhatsApp).text(WhatsApp);

	  $.ajax({
	  	   type: 'post',
	  	   url:  base_url+'/UsersController/edit_contact_inf',
	  	   data: {number:number, skype:skype, viber:viber, WhatsApp:WhatsApp},
	  	   success: function(data)
	  	   {
	  	   	 //alert(data);
	  	   	
	  	   }
	  });
 });


// edit password
$('#edit_password').on('click',function(){
   
    var old_password    = $('#old_password').val();
    var new_password    = $('#new_password').val();
    var repeat_password = $('#repeat_password').val();

        $.ajax({
         type: 'post',
         url:  base_url+'/UsersController/edit_password',
         data: {old_password:old_password, new_password:new_password, repeat_password:repeat_password},
         success: function(data)
         {
           alert(data);
          
         }
    });
 });

//edit email
$('#edit_email').on('click',function(){
    var password =$('#password').val();
    var new_email =$('#new_email').val();
    $.ajax({
         type: 'post',
         url:  base_url+'/UsersController/edit_email',
         data: {
               pass:password,
               email:new_email
         },
         success: function(data)
         {
           alert(data);
          
         }
    });

})


 
 // delete my profil
$('#delete_my_profil').on('click',function(){
   
    var password_delete  = $('#password_delete').val();
    
        $.ajax({
         type: 'post',
         url:  base_url+'/UsersController/delete_my_profil',
         data: {password_delete:password_delete},
         success: function(data)
         {
          alert(data);
          
         }
    });
 });





});

  