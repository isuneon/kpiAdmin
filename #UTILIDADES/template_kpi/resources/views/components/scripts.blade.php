<script type="text/javascript">

    var save_method; //for save method string
    var table;
    $(document).ready(function() {
      table = $('#table').DataTable({ 
        responsive: true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
         
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('dash/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

      });
    });

    function reload_table()
    {
      table.ajax.reload(null,false); //reload datatable ajax 
    }

</script>
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
   ChartsAmcharts.init();   
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
