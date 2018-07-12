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
	});
	$('#grid').click(function() {
		$('.top_products').children('div').removeClass('top_products_list');
		$('.top_products').children('div').addClass('top_products_grid');
		$('.ord_products').children('div').removeClass('ord_products_list');
		$('.ord_products').children('div').addClass('ord_products_grid');
	});
	$('.a').click(function(){
		let id=$(this).closest('div').attr('id');
		let linum=$(this).attr('class');//id of cat or sub_cat
		$.ajax({
			url:'',
			method:'post',
			data:{
				what:id,
				which:linum
			},
			success:function(){
				if(id=='sec'){
					$('#sub_cat').css('display','none');
					$('#cat').empty();
					$('#cat').css('display','block');
					//kam stex enq lcnum kam php-um stex lcneluc yur a-in petq e tal id-nery ev class a
				}
				if(id=='cat'){
					$('#cat').css('display','block');
					$('#sub_cat').css('display','block');
					$('#sub_cat').empty();
				}
			}
		})
		
	})
});