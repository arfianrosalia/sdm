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
				$('#form_pegawai').fadeIn('fast');
				var res = JSON.parse(data);

				if(res.status==1){
					$.each(res.result,function(key,val){
						$('#form_detail [name="'+key+'"]').val(val);
						
						if($('#form_detail input[name="'+key+'"]').val()!=''){
							$('#form_detail input[name="'+key+'"]').parent().addClass('focused');
						}
					});
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