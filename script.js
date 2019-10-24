$(document).ready(function(){
	var data = "data.php";
	$('#data-peternakan').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama_hewan").html('');
		$("#error_jenis_hewan").html('');
		$("#error_stock").html('');
		$("#error_tanggal").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "input.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nama_hewan").html(hasil.error.nama_hewan);
					$("#error_jenis_hewan").html(hasil.error.jenis_hewan);
					$("#error_stock").html(hasil.error.stock);
					$("#error_tanggal").html(hasil.error.tanggal);
				} else {
					$('#modal-tambah').modal('hide');
					$("#nama_hewan").val('');
					$("#jenis_hewan").val('');
					$("#stock").val('');
					$("#tanggal").val('');
					$('#data-peternakan').load(data);
				}
			}
		});
	});
	
	$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('edit.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
			);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama_hewan").html('');
		$("#error_jenis_hewan").html('');
		$("#error_stock").html('');
		$("#error_tanggal").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "update.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nama_hewan").html(hasil.error.edit_nama_hewan);
					$("#error_edit_jenis_hewan").html(hasil.error.edit_jenis_hewan);
					$("#error_edit_stock").html(hasil.error.edit_stock);
					$("#error_edit_tanggal").html(hasil.error.edit_tanggal);
					
				} else {
					$('#modal-edit').modal('hide');
					$("#nama_hewan").val('');
					$("#jenis_hewan").val('');
					$("#stock").val('');
					$("#tanggal").val('');
					$('#data-peternakan').load(data);
				}
			}
		});
	});
	
	
	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('hapus.php', { id: $(this).attr('data-id') },
			function(html){
				$('#data-peternakan').load(data);			
			}   
			);
	});
});

// $(document).ready(function () {
// 	$('.tanggal').datepicker({
// 		format: "dd-mm-yyyy",
// 		autoclose:true
// 	});
// });


