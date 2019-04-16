$('#tb_Pegawai').DataTable();
// $('.datetimepicker').bootstrapMaterialDatePicker({
//     format: 'dddd DD MMMM YYYY - HH:mm',
//     clearButton: true,
//     weekStart: 1
// });
// $('.design-select').select2();
$('#list_pegawai').fadeIn('slow');

var state = "";

function formAdd(){
	$('#list_pegawai').fadeOut('fast',function(){
		$('#form_pegawai').fadeIn('fast');
		state="ADD";
	});
}

function detail(x=null){
	$('#list_pegawai').fadeOut('fast',function(){
		
		state="EDIT";
		$.post(URL+'pegawai/pegawaiByID',{token:x}).done(function(data){
			try{
				$('#form_pegawai').fadeIn('slow');
				var res = JSON.parse(data);

				if(res.status==1){
					$.each(res.result,function(key,val){
						$('#form_detail [name="'+key+'"]').val(val);
						
						if($('#form_detail input[name="'+key+'"]').val()!=''){
							$('#form_detail input[name="'+key+'"]').parent().addClass('focused');
						}
					});

					ch_prov_kota_kelahiran(res.result.provinsi_kelahiran,res.result.kabupaten_kelahiran);

					// $.post(URL+'pegawai/getKotaBy',{x:res.result.provinsi_kelahiran}).done(function(dt){
					// 	var r = JSON.parse(dt);

					// 	r.result.forEach(function(item,i){
					// 		$("select[name='kt_kelahiran']").append(new Option(item.name, item.id));
					// 	});

					// 	$("select[name='kt_kelahiran']").val(res.result.kabupaten_kelahiran);
					// }).fail(function(e){

					// });
				}


				$('.design-select').select2();
			}catch(e){
				console.log(e);
			}finally{

			}
		}).fail();
	});
}

$(window).on('popstate', function(event) {
	if(state=="ADD" || state=="EDIT"){
		$('#form_pegawai').fadeOut('fast',function(){
			$('#list_pegawai').fadeIn('fast');
			state="LIST";
		});
	}
});

function ch_prov_kota_kelahiran(id_prov=null,id_kota=null){
	$.post(URL+'pegawai/getKotaBy',{x:id_prov}).done(function(dt){
		var r = JSON.parse(dt);
		$("select[name='kt_kelahiran']").empty();
		r.result.forEach(function(item,i){
			$("select[name='kt_kelahiran']").append(new Option(item.name, item.id));
		});

		if(id_kota!=null){
			$("select[name='kt_kelahiran']").val(id_kota);
		}
	}).fail(function(e){

	});
}