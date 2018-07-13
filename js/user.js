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


	$('.a').click(function(){
		let id=$(this).closest('div').attr('id');
		let linum=$(this).attr('class');
		let li_id=linum.split(" ")[0];
		//id of cat or sub_cat
		// $.ajax({
		// 	url:'',
		// 	method:'post',
		// 	data:{
		// 		what:id,
		// 		which:li_id
		// 	},
		// 	success:function(){
				if(id=='sec'){
					$('#sub_cat').css('display','none');
					$('#cat').empty();
					$('#cat').append('<ul><li><a href="#"> asdgafg></a></li></ul>');
					$('#cat').css('display','block');
					//kam stex enq lcnum kam php-um stex lcneluc yur a-in petq e tal id-nery ev class a
				}
				if(id=='cat'){
					$('#cat').css('display','block');
					$('#sub_cat').css('display','block');
					$('#sub_cat').empty();
					$('#sub_cat').append('<ul><li><a href="base_url/li_id"> asdgafg></a></li></ul>');
					
					
				}
			})
	$('#add_preview').click(function(){

		$('#view_2').css('display','none');
		$('#view_3').css('display','block');	

	})

});