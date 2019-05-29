$('#tb_RekapHarian').DataTable();
$('#tb_RekapBulan').DataTable();

function tampil_data_absensi(){
        var tb_absensi = $('#tb_absensi').DataTable();
		$.post(URL+'absensi/getBySubDepartment').done(function(data){
			try{
				var res = JSON.parse(data);
				
                var no = 1;
				res.result.forEach(function(item,index){
                    tb_absensi.row.add([
                        no,
                        item.nama_lengkap,
                        item.nama_department_sub,
                        `<div class="demo-checkbox">
                               <input type="checkbox" id="user-`+item.nik+`" name_user="`+item.id+`" class="filled-in" value="0">
                                <label for="user-`+item.nik+`">Libur Kerja</label>
                            </div>`
                        ]).draw(false);
                    no++;
					
				});
			
			}catch(e){
				console.log();
			}
		});

		
	}
	tampil_data_absensi();

function v_absensi(x=null){
    var check = x.parent().parent().parent().parent().find('input[name_user]');
    var arr_check = check.toArray();

    var value = new Object();
    arr_check.forEach(function(item,index){
        value[index] = {"id" :check.eq(index).attr('name_user'), "status_kehadiran":check.eq(index).prop("checked")==true?1:0};
        
    });

    $.post(URL+'absensi/verifikasi_absensi',{data:value}).done(function(data){
        alert('SUKSES');
    }).fail(function(){

    });
}