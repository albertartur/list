$(document).ready(function(){
	$('#add_cat').click(function(){
		let n=$('#cat_name').val();
		let s=$('#cat_section').val();
		$.ajax({
			url:base_url+"index.php/Admin/Add_categorie",
			type:'post',
			data:{
				name:n,
				section:s
			},
			success:function(elem){
				location.reload();
			}
		})
	});
	$('.delete').click(function(){
		let id=$(this).parents('tr').find('.id').html();
		$.ajax({
			url:base_url+"index.php/Admin/Delete_categorie",
			type:'post',
			data:{
				id:id
			},
			success:function(elem){
				location.reload();
			}
		})
	});
	$('.update').click(function(){
		let id=$(this).parents('tr').find('.id').html();
		let n=$(this).parents('tr').find('.name').html();
		let s=$(this).parents('tr').find('.section').html();
		$.ajax({
			url:base_url+"index.php/Admin/Update_categorie",
			type:'post',
			data:{
				id:id,
				name:n,
				section:s
			},
			success:function(elem){
				location.reload();
			}
		})
	})
	$('#add').click(function(){
		let name=$('#name').val();
		let part=$('#part').val();
		let cat_id=$('#cat_id').val();
		$.ajax({
			url:base_url+"Admin/Add_subcat",
			type:'post',
			data:{
				name:name,
				part:part,
				cat_id:cat_id
			},
			success:function(elem){
				location.reload();
			}
		})
	})
})