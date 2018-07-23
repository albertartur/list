$(document).ready(function() {
	let title = $('#title').text();
	$('title').text(title+' Hayt.Com');
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
		$('.ord_products_list').children('.img_list').addClass('col-md-3');
		$('.ord_products_list').children('.name_list').addClass('col-md-8');

		
	});
	$('#grid').click(function() {
		$('.top_products').children('div').removeClass('top_products_list');
		$('.top_products').children('div').addClass('top_products_grid');
		$('.ord_products').children('div').removeClass('ord_products_list');
		$('.ord_products').children('div').addClass('ord_products_grid');
		$('.top_products_grid').children('.img_list').removeClass('col-md-3');
		$('.top_products_grid').children('.name_list').removeClass('col-md-8');
		$('.ord_products_grid').children('.img_list').removeClass('col-md-3');
		$('.ord_products_grid').children('.name_list').removeClass('col-md-8');
	});

////////stugi vor klory mug ani
$('#add_preview').click(function(){
	
	let assoc=[];
	assoc['location']=$( "#id_location option:selected" ).text();
	assoc['name']=$('#id_title').val();
	assoc['description']=$('#id_description').val();
	//let sub_id=base_url.split("/",
	$(':input').each(function(){

		if(  $(this).attr('id')!='search' && $(this).attr('id')!='id_location' && $(this).attr('id')!='id_title' && $(this).attr('id')!='id_description' && $(this).attr('id')!='client_id')
		{ 
			let key=$(this).prop('id').slice(3);
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
		return assoc;
	})
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
	$('#country_ads').html(city +'›'+ assoc['location']).html();
	$('#name_ads').html(assoc['name']);
	$('#txt_ads').html(assoc['description']);
	$('#price_ads').html(assoc['price'] +' '+ assoc['currency']).html();
	$('#new_ads').html($( "#id_condition option[value="+cond+"]").html());
	$('#img_ads_d').html($('#list').find('img'));
	$('#img_ads_d').children('img').attr('class', 'img_zoom');
	$('#Exchange').html(assoc['type'])

	//////////// 20/07
	let tb='<table><tr>';
	for (var key in assoc) {
		if(key!='photos' && key!='location' && key!='name' && key!='description' && key!='price' && key!='currency' && key!='type' && key!='search'){
			tb+='<td>'+key+'</td>';
		}
	}
	tb+='</tr><tr>';
	for (var key in assoc) {
		if(key!='photos' && key!='location' && key!='name' && key!='description' && key!='price' && key!='currency' && key!='type' && key!='search'){
			tb+='<td class="td_ads">'+assoc[key]+'</td>';
		}
	}
	tb+='</tr></table>';
	$('#info').html(tb);
})
$('.img_zoom').click(function() {
	$(this).css('transform', 'scale(1.5,1.5)');
});
////////////////////////////////////20/07///////////////////////
$(document).on('click', "a.a", function() {
	let id=$(this).closest('div').attr('id');
	let linum=$(this).data("id");
	// console.log(linum);
	$.ajax({
		url:base_url+'add_st/getfrom_'+id,
		method:'post',
		data:{
		id:linum
	},
	success:function(d){
		d=JSON.parse(d);
		//console.log(d);
		if(id=='sec'){
			$('#sub_cat').css('display','none');
			$('#cat').empty();
			let ap='<ul>';
			for (var key in d) {
				ap+='<li><a href="#" data-id='+d[key]['id']+' class="a">'+d[key]['name']+'</a></li>'
				console.log(d[key]);
			}
			ap+='</ul>';
			$('#cat').append(ap);
			$('#cat').css('display','block');
		}
		if(id=='cat'){
			$('#cat').css('display','block');
			$('#sub_cat').empty();
			let ap='<ul>';
			for (var key in d) {
				ap+='<li><a href="'+base_url+'add_st/add/'+d[key]['id']+'" data-id='+d[key]['id'] + ' class="a">'+d[key]['name']+'</a></li>'
			}
			ap+='</ul>';
			$('#sub_cat').append(ap);
			$('#sub_cat').css('display','block');
		}
		
}

})
})
//////////////edit 22/07

$('.li').change(function(){
	let linum=$(this).data("id");
	$.ajax({
		url:base_url+'add_st/getfrom_cat',
		method:'post',
		data:{
		id:linum
		},
		success:function(d){
			d=JSON.parse(d);
			/*
			let ap='<ul>';
			for (var key in d) {
				ap+='<li><a href="'+base_url+'category/index/'+d[key]['id']+'">'+d[key]['name']+'</a></li>'
			}
			ap+='</ul>';
			$('#sub_cat_home').html(ap);*/
			let ap = '';
			for (var key in d) {
				ap += '<li><a href="'+base_url+'category/index/'+d[key]['id']+'">'+d[key]['name']+'</a></li>'
			}
			$('.ulul').eq(linum-1).html(ap);
		}
	})
}).change();
//////////////edit 20/07


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

/////////////////////////////////////////////////// 20/07
$('#post_ads').click(function(){
	let assoc= new FormData();//////Alisayi mot ashxatel a assoc={} depqum

assoc['location']=$( "#id_location option:selected" ).text();
	assoc['name']=$('#id_title').val();
	assoc['description']=$('#id_description').val();
	var url = window.location.pathname.split( '/' );
	var sub_id=url[url.length-1];
		alert(url[url.length-1])
	$(':input').each(function(){
	if($(this).attr('id')!='search' && $(this).attr('id')!='id_location' && $(this).attr('id')!='id_title' && $(this).attr('id')!='id_description' && $(this).attr('id')!='client_id')
	{ 

		let key=$(this).prop('id').slice(3);
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
/////////////////20/07
let arr_to_str=JSON.stringify(assoc);
console.log(arr_to_str);
console.log((assoc));
   $.ajax({
      url:base_url+'add_st/add_statement',
      method:'post',
      data:{
      	sub_id:sub_id,
         assoc:arr_to_str
         // loc:loc,
         // title:title,
         // desc:desc
           },
      success:function(elem){
       alert('wait please we must check your statement..');
       	location.href = base_url+'UsersController/show?my_profil=Հայտարարություններ';
      	  //console.log(elem);
      	// console.log(arr_to_str);
      	// alert(elem);
      	// location.reload();
      }
   })
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

/////////////////////////////////////////////
	$('#sea_ads').change(function () {
		$(".ord_products").children('div').css('display', 'inline-block');
	    var str = '';

	    $( ".menu_check:checked" ).each(function() {
	    	str += $( this ).attr('id'); 
	    	$(this).click(function() {
	    		location.reload();
	    	});
	    });

	    $(".ord_products").children('div').each(function() {
			if (!$(this).hasClass(str)) {
	    	$(this).css('display', 'none');
	    	}  
		});
	})


	$('#photos').change(function () {
	    $( "#img_load:checked" ).each(function() {
	    	$(this).click(function() {
	    		location.reload();
	    	});
	    });
	    
	   	$(".ord_products").children('div').each(function() {
			if (!$(this).find('img').hasClass('ob_img_ads')) {
	    		$(this).css('display', 'none');
	    	}  
		});
	})


	$('#search_price').click(function() {
		let sks = +($('#search_price_1').val());
		let verj = +($('#search_price_n').val());
		let cur_val = $('#currency').val();

		$(".ord_products").children('div').each(function() {
			let p = +$(this).find('.price').text();
			let currency = $(this).find('.currency').text();
			
	  		if(p>=sks && p<=verj){
	  			$(this).css('display','inline-block');
	  		}
	  		else{
	  			$(this).css('display','none');
	  		}
		});
	});


	$("#search").on("input", function(e) {
	 	let search = $(e.target).val();
	 	$.ajax({
		    url:base_url+'category/search',
		    method:'post',
		    data:{search:search},
		    success:function(elem){
		    	$('#search_list').css('display', 'none');
		    	if(elem.length > 2) {
		    		let content = JSON.parse(elem);
	      	 		let sea = '';
	      	 		for(let i = 0; i < content.length; i++){
	      	 			sea += '<a href="'+base_url+'category/ads/'+content[i][1]+'">'+content[i][0]+'</a><br>';
	      	 		}
	      	 		$('#search_list').css('display', 'block');
	      	 		$('#search_list').html(sea)
		    	}
	     	}
	   })

	});

	
////////////////////////////////////////////

});

