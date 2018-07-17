$(document).ready(function() {
	let title = $('#title').text()
	$('title').html(title);
	$(' #left_manu>ul>li').append('<span></span>')
	$(' #left_manu>ul>li>span').addClass('manu_icon');	
	$( ".vallet" ).change(function() {
		if ($('#telcell').prop( "checked" )) {
			$('#wallet-bg').css({
				background: 'url('+base_url+'img/telcell_terminal.png) no-repeat',
				transition:'1s',
				height: '290px',
				marginTop:'20px'
			});
			$('h5').html('Վճարում Telcell տերմինալների միջոցով')
			$('li').eq(0).html('Telcell տերմինալի ցանկում ընտրեք "Այլ", "Այլ ծառայություններ"')

		}
		if ($('#easypay').prop( "checked" )) {
				$('#wallet-bg').css({
				background: 'url('+base_url+'img/easypay_terminal.png) no-repeat',
				transition:'1s',
				height: '290px',
				marginTop:'20px'
			});
			$('h5').html('Վճարում Easy Pay տերմինալների միջոցով')
			$('li').eq(0).html('Easy Pay տերմինալի ցանկում ընտրեք "Այլ ծառայություններ"')
		}
}).change();
	$('#list').click(function() {
		$('.top_products').children('div').removeClass('top_products_grid');
		$('.top_products').children('div').addClass('top_products_list');
		$('.ord_products').children('div').removeClass('ord_products_grid');
		$('.ord_products').children('div').addClass('ord_products_list');
		$('.top_products_list').children('.img_list').addClass('col-md-3');
		$('.top_products_list').children('.name_list').addClass('col-md-8');

		
	});
	$('#grid').click(function() {
		$('.top_products').children('div').removeClass('top_products_list');
		$('.top_products').children('div').addClass('top_products_grid');
		$('.ord_products').children('div').removeClass('ord_products_list');
		$('.ord_products').children('div').addClass('ord_products_grid');
		$('.top_products_grid').children('.img_list').removeClass('col-md-3');
		$('.top_products_grid').children('.name_list').removeClass('col-md-8');

	});


//zangvac inputneri anunnnerov,yntri vor inputnern a cuyc talis
//zangvac galis aphp-ic kaxvac subcat-i id-ic
let zangvac=['location','address','floor','price','title','photos','status_realest','type','tel'];
let a=[];
div=$('.ip');
for(i=0;i<div.length;i++){
let k=0;
a[i]=$(div[i]).attr('id');
for(j=0;j<zangvac.length;j++){
if(a[i]==zangvac[j])
k=1;
}
if(k==0)
$(div[i]).remove();
}

 
////////stugi vor klory mug ani
$('#add_preview').click(function(){
	let x = $( "#id_location").val();
	let cond = $('#id_condition').val();
	let curr = $('#id_currency').val();
	let city = $( "#id_location option[value="+x+"]").parents('optgroup').attr('label');
	$('#view_2').css('display','none');
	$('#view_3').css('display','block');
	$("#2").removeClass("hov");
	$('#2').addClass("klor");
	$("#3").removeClass("klor");
	$('#3').addClass("hov");
	$('#country_ads').html(city +'›'+ $( "#id_location option[value="+x+"]").html());
	$('#name_ads').html($('#id_title').val());
	$('#txt_ads').html($('#id_description').val());
	$('#price_ads').html($('#id_price').val() +' '+ $( "#id_currency option[value="+curr+"]").html());
	$('#new_ads').html($( "#id_condition option[value="+cond+"]").html());
	$('#img_ads_d').html($('#list').find('img'));
	$('#img_ads_d').children('img').attr('class', 'img_zoom');
	$('#Exchange').html($( "input[name=types2]" ).val())
})
$('.img_zoom').click(function() {
	$(this).css('transform', 'scale(1.5,1.5)');
});
///
$('.a').click(function(){
	let id=$(this).closest('div').attr('id');
	let linum=$(this).attr('class');
	let li_id=linum.split(" ")[0];
	//id of cat or sub_cat
	// $.ajax({
	// url:'',
	// method:'post',
	// data:{
	// what:id,
	// which:li_id
	// },
	// success:function(d){
	if(id=='sec'){
	$('#sub_cat').css('display','none');
	$('#cat').empty();
	// let ap='<ul>';
	// for (var key in d) {
	// ap+='<li><a href="#" class="'+key+' a">'+d[key]+'</a></li>'
	// //console.log(d[key]);
	// }
	// ap+='</ul>';
	// $('#cat').append(ap);
	// $('#cat').css('display','block');
	$('#cat').append('<ul><li><a href="#"> asdgafg></a></li></ul>');
	$('#cat').css('display','block');
	//kam stex enq lcnum kam php-um stex lcneluc yur a-in petq e tal id-nery ev class a
	}
	if(id=='cat'){
	$('#cat').css('display','block');
	$('#sub_cat').empty();
	// let ap='<ul>';
	// for (var key in d) {
	// ap+='<li><a href="base_url("add_st/add/'+d[key]+'")" class="'+key+' a">'+d[key]+'</a></li>'
	// //console.log(d[key]);
	// }
	// ap+='</ul>';
	// $('#sub_cat').append(ap);
	// $('#sub_cat').css('display','block');

	$('#sub_cat').append('<ul><li><a href="base_url/li_id"> asdgafg></a></li></ul>');
	}
})

// })
// })
//////////////
$('#edit').click(function(){
//$('#view_3').css('display','none');
//$('#view_2').css('display','block');
	$("#2").removeClass("klor");
	$('#2').addClass("hov");
	$("#3").removeClass("hov");
	$('#3').addClass("klor");
})
///////////////update_ads////////////
$('#update_ads').click(function() {
	$('#view_3').css('display','none');
	$('#view_2').css('display','block');
});
///////////////post_ads/////////////
/*$('#post_ads').click(function() {

});*/
///////////////////////////////////////////////////
$('#post').click(function(){
	let assoc= new FormData();
	assoc['location']=$( "#id_location option:selected" ).text();
	assoc['name']=$('#id_title').val();
	assoc['description']=$('#id_description').val();
	//let sub_id=base_url.split("/",
	$(':input').each(function(){
	if($(this).attr('id')!='id_location' && $(this).attr('id')!='id_title' && $(this).attr('id')!='id_description' && $(this).attr('id')!='client_id')
	{ 
	let key=$(this).attr('id').substr(3);
	if($(this).is('select')){
	assoc[key]=$(this).find('option:selected').text();
	}
	else if($(this).is('input:text')){
	assoc[key]=$(this).val();
	}
	else if($(this).is('input:radio')){
	if($(this).is(':checked')){
	key=key.slice(0,-1);
	assoc[key]=$(this).val();
	}
	}
	else if($(this).is('input:file')){
	assoc[key]=document.getElementById('id_photos').files;
	}
	}

	})
//$.ajax({
// url:'',
// method:'post',
// data:{
// assoc:assoc
// }
})
 //////////////////////////////////////////////

	$('#top_img').attr('src',$('#iiii').children('img').eq(0).attr('src'));
	$(document).on('click', '.img_next', function() {
		$('.img_next').removeClass('active_img_ads');
		let img = $(this).attr('src');
		$('#top_img').attr('src', img);
		$(this).addClass('active_img_ads');
	});
	$(document).on('click', '.zoom_img', function() {
		let zoom = $('#top_img').attr('src');
		$('#zoom_img_ads').attr('src', zoom);
	});



	var next_prev_click = 0;
	$('#next').on('click', function() {
		let iii = $('#iiii').children('img');
		iii.eq(next_prev_click).removeClass('active_img_ads');
		if (next_prev_click > -1 && next_prev_click < iii.length - 1) {
			next_prev_click++;
		} else {
			next_prev_click = 0;
		}
		$('#top_img').attr('src', iii.eq(next_prev_click).attr('src'));
		iii.eq(next_prev_click).addClass('active_img_ads');
	});

	$('#prev').on('click', function() {
		let iii = $('#iiii').children('img');
			if (next_prev_click > 0) {
				next_prev_click--;
			}
			else{
				next_prev_click = iii.length-1;
			}
		$('#top_img').attr('src', iii.eq(next_prev_click).attr('src'));
	});


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


});
