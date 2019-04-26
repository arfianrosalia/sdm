$('#tb_master').DataTable({
  "initComplete": function(settings, json) {
   $('#tb_master').fadeIn("fast");
  }
} );