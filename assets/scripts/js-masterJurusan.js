$('#tb_master').DataTable({
  "initComplete": function(settings, json) {
   $('#tb_master').fadeIn("fast");
  }
} );





function addJurusan(){

    $.post(URL+'master/get_pendidikan').done(function(data){
            try{
                var res = JSON.parse(data);
                var pendidikan = '<select class="form-control show-tick" id="pendidikan" >';
                res.forEach( function(item,index){
                    pendidikan+= `<option value="`+item.id+`">`+ item.nama_pendidikan+`</option>`;
                });
                pendidikan+= '</select>';
                var form=`              <div class="body">
                            <form class="form-horizontal">
                                
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">NAMA JURUSAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_jurusan" placeholder="Masukan Nama jurusan" required>
                                            </div>
                                        </div>
                                    </div><br><br><br>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">PENDIDIKAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                            `+pendidikan+`
                                                 
                                            </div>
                                        </div>
                                    </div><br><br><br>
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
    title: 'INPUT JURUSAN',
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
                var nama = this.$content.find('input[name="nama_jurusan"]').val();
                var keterangan = this.$content.find('textarea[name="keterangan"]').val();
                var id = this.$content.find('select#pendidikan').val();
                if(nama==''|| keterangan==''){
                    $.alert('Form Belum Diisi lengkap..!');
                    return false;
                }else{
                    $.ajax({
                        type : 'POST',
                        url  :  URL+'master/add_jurusan',
                        data : {nama : nama , keterangan : keterangan, id : id } ,
                        success: function(data){
                                    $.confirm({
                                            title:'Pesan Sukses',
                                            content:'Berhasil menambahkan data.',
                                            icon: 'fa fa-check',
                                            theme: 'modern',
                                            closeIcon: false,
                                            animation: 'scale',
                                            closeAnimation: 'rotateXR',
                                            type: 'green',
                                            buttons:{
                                                close:{
                                                    text:'CLOSE',
                                                    btnClass:'btn-green waves waves-effect',
                                                    action:function(){
                                                       window.location.reload();  
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
                console.log(data);
            }catch(e){
                console.log(e);
            }finally{
                $('#form_pegawai').fadeIn('fast');
            }
        }).fail(function(){

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
                        $.post(URL+'master/delete_jurusan',{id:id}).done(function(data){
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
                                                        window.location.reload(); 
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
   $.confirm({
                 title:'Edit Data',
                  content:function(){
                    var self = this;
                    return $.post(URL+'master/get_idjurusan/',{id:id}).done(function(data){
                        try{
                            var res = JSON.parse(data);
                            var form = `
                            <div class="body">
                            <form class="form-horizontal">
                                <input type="hidden" name="id" value="`+id+`">
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">NAMA JURUSAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_jurusan" value="`+res.nama_jurusan+`">
                                            </div>
                                        </div>
                                    </div><br><br><br>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">KETERANGAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="keterangan">`+res.keterangan+`</textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                            </div>
                            `;
                        }catch(e){

                        }
                        self.setContent(form);
                    }).fail(function(e){

                    });
                  },
                  columnClass:'col-md-6 col-md-offset-3 ',
                  animation: 'scale',
                  closeAnimation: 'zoom', 
                  icon: 'fa fa-plus-square',
                  theme: 'material',
                  type: 'orange',
                  buttons:{
                      formSubmit: { 
                            text: 'Simpan',
                            btnClass: 'btn-blue',
                            action: function () {
                                var id = this.$content.find('input[name="id"]').val();
                                var nama = this.$content.find('input[name="nama_jurusan"]').val();
                                var keterangan = this.$content.find('textarea[name="keterangan"]').val();
                                if(nama==''|| keterangan==''){
                                   $.alert('Form Belum Diisi lengkap..!');
                                   return false;
                            }else{
                                $.ajax({
                                 type : 'POST',
                                 url  :  URL+'master/update_jurusan',
                                  data : {id : id ,nama : nama , keterangan : keterangan},
                                  success: function(data){
                                    if (data=='true') {
                                           
                                             $.confirm({
                                                      title:'Pesan Sukses',
                                                      content:'Data Berhasil Diubah.',
                                                      icon: 'fa fa-check',
                                                      theme: 'modern',
                                                      closeIcon: false,
                                                      animation: 'scale',
                                                      closeAnimation: 'rotateXR',
                                                      type: 'green',
                                                      buttons:{
                                                         close:{
                                                            text:'CLOSE',
                                                            btnClass:'btn-green waves waves-effect',
                                                            action:function(){
                                                                window.location.reload(); 
                                                        
                                                    }
                                                }
                                            }
                                        }); 

                                                     }                   

                        }
                    })
                            }
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
