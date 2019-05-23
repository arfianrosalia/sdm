$('#tb_master').DataTable({
  "initComplete": function(settings, json) {
   $('#tb_master').fadeIn("fast");
  }
} );





function add_sub_department(){
    $.confirm({
    title: 'INPUT SUB DEPARTMENT',
    content:function(){
            var self = this;
            return $.post(URL+'master/get_idsubdepartment_add/').done(function(data){
            self.setContent(data);
            }).fail(function(e){

            });
            },
    columnClass:'col-md-6 col-md-offset-3 ',
    animation: 'scale',
    closeAnimation: 'rotateYR', 
    icon: 'fa fa-plus-square',
    theme: 'material',
    type: 'blue',
    buttons: {
        formSubmit: {
            text: 'Simpan',
            btnClass: 'btn-blue',
            action: function () {
                 var nama = this.$content.find('input[name="nama_subDepartment"]').val();
                 var id_department = this.$content.find('select[name="id_department"]').val();
                 var keterangan = this.$content.find('textarea[name="keterangan"]').val();
                if(nama==''||keterangan==''){
                    $.alert('Form Belum Diisi lengkap..!');
                    return false;
                }else{
                    $.ajax({
                        type : 'POST',
                        url  :  URL+'master/add_subdepartment',
                        data : {nama : nama, id_department : id_department, keterangan:keterangan },
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
                        $.post(URL+'master/delete_subdepartment',{id:id}).done(function(data){
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
                    return $.post(URL+'master/get_idsubdepartment_edit/',{id:id}).done(function(data){
                    self.setContent(data);
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
                                var nama = this.$content.find('input[name="nama_subDepartment"]').val();
                                var id_department = this.$content.find('select[name="id_department"]').val();
                                var keterangan = this.$content.find('textarea[name="keterangan"]').val();
                                if(nama==''|| keterangan==''){
                                   $.alert('Form Belum Diisi lengkap..!');
                                   return false;
                            }else{
                                $.ajax({
                                 type : 'POST',
                                 url  :  URL+'master/update_subdepartment',
                                  data : {id : id ,nama : nama ,id_department : id_department, keterangan : keterangan},
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
