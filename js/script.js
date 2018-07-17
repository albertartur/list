$(document).ready(function(){
	$('#add_cat').click(function(){

		let n=$('#cat_name').val();
		let s=$('#cat_section').val();
		$.ajax({
			url:base_url+"admin/Admin/Add_categorie",
			type:'post',
			data:{
				name:n,
				section:s
			},
			success:function(elem){
				// alert("sdgs");
				location.reload();
			}
		})
		
	});
	$('.delete').click(function(){
		let id=$(this).parents('tr').find('.id').html();
		$.ajax({
			url:base_url+"admin/Admin/Delete_categorie",
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
			url:base_url+"admin/Admin/Update_categorie",
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
	});
	$('#add').click(function(){
		let name=$('#name').val();
		let part=$('#part').val();
		let cat_id=$('#cat_id').val();
		$.ajax({
			url:base_url+"admin/Admin/Add_subcat",
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
	$('.sub_delete').click(function(){
		let sub_id=$(this).parents('tr').find('.sub_id').html();
		// alert(sub_id);
		$.ajax({
			url:base_url+"admin/Admin/Delete_subcategorie",
			type:'post',
			data:{
				id:sub_id
			},
			success:function(elem){
				location.reload();
			}
		})
	});
	$('.sub_update').click(function(){
		let sub_id=$(this).parents('tr').find('.sub_id').html();
		let cat_id=$(this).parents('tr').find('.cat_id').html();
		let n=$(this).parents('tr').find('.sub_name').html();
		let s=$(this).parents('tr').find('.sub_section').html();
		// alert('da');
		$.ajax({
			url:base_url+"admin/Admin/Update_subcategorie",
			type:'post',
			data:{
				id:sub_id,
				cat_id:cat_id,
				name:n,
				section:s
			},
			success:function(elem){
				location.reload();
			}
		})
	});
	
	$('#add_input_type').click(function(){
		let n=$('#id_location option:selected').text();
		let s=$('#sub_id').val();
		// alert(n);
		$.ajax({
			url:base_url+"admin/Admin/Add_subcat_inputs",
			type:'post',
			data:{
				name:n,
				sub_id:s
			},
			success:function(elem){
				// alert(elem);
				location.reload();
			}
		})
	});
    $('.input_delete').click(function(){
		let sub_id=$(this).parents('tr').find('.sub_id').html();
		let name=$(this).parents('tr').find('.input_name').html();
		
		$.ajax({
			url:base_url+"admin/Admin/Delete_subcat_input",
			type:'post',
			data:{
				sub_id:sub_id,
				name:name
			},
			success:function(elem){
				location.reload();
			}
		})
	});
})