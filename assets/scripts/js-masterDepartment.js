$('#tb_master').DataTable({
  "initComplete": function(settings, json) {
   $('#tb_master').fadeIn("fast");
  }
} );



function addDeparment(){       
	var form=`				<div class="body">
							<form class="form-horizontal">
                                
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">NAMA DEPARTMENT</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_department" placeholder="Masukan Nama Department" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">KETERANGAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="keterangan" placeholder="Masukan Keterangan" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                            </div>
				`;


	$.confirm({
    title: 'INPUT DEPARTMENT',
    columnClass:'col-md-6 col-md-offset-3 ',
    animation: 'scale',
    closeAnimation: 'rotateYR', 
    icon: 'fa fa-plus-square',
    theme: 'material',
    type: 'blue',
    content:form,
    buttons: {
        formSubmit: {
            text: 'Simpan',
            btnClass: 'btn-blue',
            action: function () {
                var nama = this.$content.find('input[name="nama_department"]').val();
                var keterangan = this.$content.find('textarea[name="keterangan"]').val();
                if(nama==''|| keterangan==''){
                    $.alert('Form Belum Diisi lengkap..!');
                    return false;
                }else{
                    $.ajax({
                        type : 'POST',
                        url  :  URL+'master/add_department',
                        data : {nama : nama , keterangan : keterangan},
                        success: function(data){
                                    $.confirm({
                                            title:'Pesan Sukses',
                                            content:'Berhasil menambahkan data.',
                                            icon: 'fa fa-check',
                                            theme: 'modern',
                                            closeIcon: false,
                                            animation: 'rotateXR',
                                            type: 'green',
                                            buttons:{
                                                close:{
                                                    text:'CLOSE',
                                                    btnClass:'btn-green waves waves-effect',
                                                    action:function(){
                                                        
                                                    }
                                                }
                                            }
                                        });

                        }
                    })
                }
                
            }
        },
        Batal: function () {
            //close
        },
    },
    onContentReady: function () {
        // bind to events
        var jc = this;
        this.$content.find('form').on('submit', function (e) {
            e.preventDefault();
            jc.$$formSubmit.trigger('click'); 
        });
    }
});
}

function hapus(id,el){
     $.confirm({
            title:'Pesan Peringatan',
            content:'Anda Yakin Ingin Menghapus Data..?',
            icon: ' fa fa-trash-o',
            theme: 'modern',
            closeIcon: false,
            animation: 'rotateXR',
            type: 'red',
            buttons:{
                delete:{
                    text:'HAPUS',
                    btnClass:'btn-red waves waves-effect',
                    action:function(){
                        $.post(URL+'master/delete_department',{id:id}).done(function(data){
                            if (data=='1') {
                                el.closest('tr').remove();
                                $('#tb_master').DataTable().draw('false');
                                 $.confirm({
                                            title:'Pesan Sukses',
                                            content:'Data Berhasil Dihapus.',
                                            icon: 'fa fa-check',
                                            theme: 'modern',
                                            closeIcon: false,
                                            animation: 'rotateXR',
                                            type: 'green',
                                            buttons:{
                                                close:{
                                                    text:'CLOSE',
                                                    btnClass:'btn-green waves waves-effect',
                                                    action:function(){
                                                        
                                                    }
                                                }
                                            }
                                        });

                            }
                        });
                    }
                },


                close:{
                    text:'CLOSE',
                    btnClass:'btn-default waves waves-effect',
                    action:function(){
                        
                    }
                }
            }
         });

}


function edit(id,el){
    return $.post(URL+'api/getByID/',{id:id}).done(function(data){
              $.confirm({
                 title:'Pesan Sukses',
                  content:'Data Berhasil Dihapus.',
                  icon: 'fa fa-check',
                  theme: 'modern',
                  closeIcon: false,
                  animation: 'rotateXR',
                  type: 'green',
                  buttons:{
                      close:{
                        text:'CLOSE',
                          btnClass:'btn-green waves waves-effect',
                          action:function(){
                                                        
                          }
                      }
                }
             });
    }

}
