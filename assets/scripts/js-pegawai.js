$('#tb_Pegawai').DataTable();
$('.datetimepicker').bootstrapMaterialDatePicker({
    format: 'DD MMMM YYYY',
    clearButton: true,
    weekStart: 1,
    time:false
}).change(function(event,date){
	var c = new Date(date._d);
	var nMonth = (c.getMonth().toString().length < 2)?"0"+(c.getMonth()+1):(c.getMonth()+1);
	var nDay = (c.getDate().toString().length < 2)?"0"+c.getDate():c.getDate();
	
	var nDate = c.getFullYear() + "-" + nMonth + "-" + nDay;
	$(this).parent().find('input[type="hidden"]').val(nDate);
});
// $('.design-select').select2();

var iCropTmp;
var state = "";


window.onload = function(){
	$('#list_pegawai').fadeIn('fast');
}

function formAdd(){
	resetPhoto();
	resetForm();
	$('#list_pegawai').fadeOut('fast',function(){
		
		state="ADD";

		$.post(URL+'pegawai/genNIK').done(function(data){
			try{
				res = JSON.parse(data);
				if(res.status==1){
					$('#form_detail').find('input[name="nik"]').val(res.result);
					if($('#form_detail input[name="nik"]').val()!=''){
						$('#form_detail input[name="nik"]').parent().addClass('focused');
					}
				}

				$('.design-select').select2({ width: '100%' });
			}catch(e){
				console.log(e);
			}finally{
				$('#form_pegawai').fadeIn('fast');
			}
		}).fail(function(){

		});

		
	});
}

function resetPhoto(){
	$('#foto_profile').attr('src',URL+'assets/images/user.png');
	if(iCropTmp!=null){
		iCropTmp.croppie('destroy');
		$('#panel-foto').fadeOut('fast');
	}
}

function detail(x=null){
	resetPhoto();
	resetForm();
	$('#list_pegawai').fadeOut('fast',function(){
		
		state="EDIT";
		$.post(URL+'pegawai/pegawaiByID',{token:x}).done(function(data){
			try{
				$('#form_pegawai').fadeIn('slow');
				var res = JSON.parse(data);

				if(res.status==1){
					$.each(res.result,function(key,val){
						$('#form_detail [name="'+key+'"]').val(val);

						if(res.result.foto!=''){
							$('#foto_profile').attr('src',res.result.foto);
						}else{
							$('#foto_profile').attr('src',URL+'assets/images/user.png');
						}
						$('#foto_profile').attr('width','75%');
						$('#foto_profile').attr('height','75%');

						// var image = document.createElement('img');
    
						// image.src=res.result.foto;
						    
						// image.width=100;
						// image.height=100;
						// image.alt="here should be some image";
						    
						// document.body.appendChild(image);
						
						if($('#form_detail input[name="'+key+'"]').val()!=''){
							$('#form_detail input[name="'+key+'"]').parent().addClass('focused');
						}
					});

					$('#form_detail input[name="nik"]').removeAttr('col');

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

function resetForm(){
	$('#form_pegawai').find('input').val('');
	$('#form_pegawai').find('select.design-select :nth-child(1)').prop('selected',true);
	$('#form_pegawai').find('select.design-select').select2();
	$('#form_pegawai').find('select :nth-child(1)').prop('selected',true);
	$('#form_pegawai').find('textarea').val('');
}


function ch_img_profile(x,id=null,group_key=null,item_key=null){
    valSizeImg = 1;
    noImage = 1;

    if(x.files[0].size<=20000000){
        imgTmp = x;

        var reader = new FileReader();   

        reader.onload = function (e) {

            var img = new Image();

            img.src = e.target.result;

            var iCrop = $('#upload-demo').croppie({
			    // enableExif: true,
			    url:img.src,
			    viewport: {
			        width: 350,
			        height: 350,
			        type: 'square'
			    },
			    boundary: {
			        width: 400,
			        height: 400
			    }
			});

			iCropTmp=iCrop;
        }
        reader.readAsDataURL(x.files[0]);
        $(x).val('');
        $('#panel-foto').fadeIn('fast');
    }else{
      valSizeImg = 0;
      alert('Ukuran gambar melebihi 2MB');
      $(x).replaceWith($(x).val('').clone(true));
      return false;
    }
}


$('.upload-result').on('click', function (ev) {
	iCropTmp.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		iCropTmp.croppie('destroy');
		$('#panel-foto').fadeOut('fast');
		$('#foto_profile').attr('src',resp).css({
			width:'147px',
			height:'148px'
		});
		// console.log(resp);
	});
});

function submit_add(x){
	var arrInput = x.parent().find('input[col]').toArray();
	var arrSelect = x.parent().find('select[col]').toArray();
	var arrTextarea = x.parent().find('textarea[col]').toArray();

	var data = new Object();
	var validate = 0;
	var first = "";

	arrInput.forEach(function(item,index){
        let value = x.parent().find('input[col]').eq(index).val();

		if(value!=""){			
			data[x.parent().find('input[col]').eq(index).attr('col')] = x.parent().find('input[col]').eq(index).val();
		}else{
			validate++;
			if(first==""){
				first=x.parent().find('input[col]').eq(index);
			}
			x.parent().find('input[col]').eq(index).animate({'backgroundColor':'red'},200).animate({'backgroundColor':'white'},200);
		}
	});

	arrSelect.forEach(function(item,index){
		let value = x.parent().find('select[col]').eq(index).val();

		if(value!=null){			
			data[x.parent().find('select[col]').eq(index).attr('col')] = x.parent().find('select[col]').eq(index).val();
		}else{
			validate++;

			if(first==""){
				first=x.parent().find('select[col]').eq(index);
			}
			x.parent().find('select[col]').eq(index).animate({'backgroundColor':'red'},200).animate({'backgroundColor':'white'},200);
		}
	});

	arrTextarea.forEach(function(item,index){
		let value = x.parent().find('textarea[col]').eq(index).val();

		if(value!=""){			
			data[x.parent().find('textarea[col]').eq(index).attr('col')] = x.parent().find('textarea[col]').eq(index).val();
		}else{
			validate++;
			if(first==""){
				first=x.parent().find('textarea[col]').eq(index);
			}
			x.parent().find('textarea[col]').eq(index).animate({'backgroundColor':'red'},200).animate({'backgroundColor':'white'},200);
		}
	});

	first.focus();
	data['c_foto'] = $('#foto_profile').attr('src');
	

	if(validate>0){
		$.alert('Form belum lengkap');
	}else{
		if(state=='ADD'){
			$.post(URL+'pegawai/insertPegawai',{data:data}).done(function(data){
				alert(data);
			}).fail(function(){

			});
		}

		if(state=='EDIT'){
			alert('EDIT');
			// $.post(URL+'pegawai/insertPegawai',{data:data}).done(function(data){
			// 	alert(data);
			// }).fail(function(){

			// });
		}
	}




	// arrSelect.forEach(function(item,index){
	// 	alert(x.parent().find('input[col]').eq(index).attr('col') + " >> " + x.parent().find('select[col]').eq(index).val());
	// });
}


// var c = document.getElementById("ft-canvas");
// var ctx = c.getContext("2d");
// var img = document.getElementById("scream");
// ctx.drawImage(img, 0, 0, 300,300);

// console.log(ctx.toDataURL("image/jpeg"));
// $('#scream1').attr('src', c.toDataURL("image/jpeg"));