$(document).ready(function() {
	let title = $('#title').text()
	$('title').html(title);
	$(' #left_manu>ul>li').append('<span></span>')
	$(' #left_manu>ul>li>span').addClass('manu_icon');
})