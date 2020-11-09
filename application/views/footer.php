<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">PLN STI SUMUT</a>.</strong> All rights
    reserved.
  </footer>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/demo.js"></script>

<script src="<?php echo base_url(); ?>public/assets/timeline/timeline.min.js"></script>


<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.colVis.min.js"></script>
<!-- page script -->

<!-- InputMask -->
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- InputMask -->


<!-- ChartJS -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/chart.js/Chart.js"></script>
<!-- ChartJS -->

<!-- Select2 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Select2 -->
<script>
  $(function () {
   var table = $('#example1').DataTable({
	
	  lengthChange: true,
      buttons: [{
                  extend: 'excel',
                  text : '<i class="fa fa-file-excel-o"></i>&nbsp Export to Excel (*.xls)',
                  className : 'btn btn-sm',
                  exportOptions: {
                    columns: 'th:not(:last-child)'
                  },
              }],
			  });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
	table.buttons().container()
        .appendTo( '#example1_wrapper .col-sm-6:eq(0)' );
  })
  $(function () {
   var table = $('#example3').DataTable({
	
	  lengthChange: true,
      buttons: [{
                  extend: 'excel',
                  text : '<i class="fa fa-file-excel-o"></i>&nbsp Export to Excel (*.xls)',
                  className : 'btn btn-sm',
                  exportOptions: {
                    columns: 'th:not(:last-child)'
                  },
              }],
			  });
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
	table.buttons().container()
        .appendTo( '#example3_wrapper .col-sm-6:eq(0)' );
  })
</script>
	
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
	
    //Initialize Select2 Elements
    $('.select2').select2()
	
   //IP ADDRESS
    $('[data-mask]').inputmask()

    //Date picker
    $('#datepicker').datepicker({
		format: "dd-mm-yyyy",
      autoclose: true
    })

  })
  function functionPort() {
    var x = document.getElementById("perangkat").value.split('-');
    $("#id_network_device").val(x[0]);
    if(x[1] == 'Router') {
      $("#port").text("8 Port");
      $("#jml_port").val("1600");
      $("#bobot_urgensi").val("2500");
      $("#bobot_kondisi").val("500");
      $("#bobot_standard").val("230");
      $("#bobot_lifetime").val("460");
      $("#bobot_gangguan").val("230");
      $("#ket_perangkat").text("*Minimal merk Router yang digunakan adalah Miktrotik 450 G apabila merk perangkat lebih bagus maka termasuk memenuhi standard");
      $("#ket_port").text("*Standard UP3 dan ULP untuk Router : 8 Port, Apabila perangkat memiliki lebih atau kurang dari standard maka belum termasuk memenuhi standard");
    }
    if(x[1] == 'Switch') {
      $("#port").text("16 Port");
      $("#jml_port").val("1200");
      $("#bobot_urgensi").val("1600");
      $("#bobot_kondisi").val("100");
      $("#bobot_standard").val("125");
      $("#bobot_lifetime").val("250");
      $("#bobot_gangguan").val("125");
      $("#ket_perangkat").text("*Minimal merk Switch yang digunakan adalah HP Procurve apabila merk perangkat lebih bagus maka termasuk memenuhi standard");
      $("#ket_port").text("*Standard UP3 dan ULP untuk Switch : 16 Port, Apabila perangkat memiliki lebih atau kurang dari standard maka belum termasuk memenuhi standard");
    }
    if(x[1] == 'Access Point') {
      $("#jml_port").val("1");
      $("#port").text("1 Port");
      $("#jml_port").val("250");
      $("#bobot_urgensi").val("900");
      $("#bobot_kondisi").val("100");
      $("#bobot_standard").val("62.5");
      $("#bobot_lifetime").val("125");
      $("#bobot_gangguan").val("62.5");
      $("#ket_perangkat").text("*Minimal merk Switch yang digunakan adalah HP Procurve apabila merk perangkat lebih bagus maka termasuk memenuhi standard");
    }
  }
</script>

<!-- CHART -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php echo $dashboard_merek_laptop_hp['jumlahnya']; ?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : '<?php echo $dashboard_merek_laptop_hp['nama_merek']; ?>'
      },
      {
        value    : <?php echo $dashboard_merek_laptop_apple['jumlahnya']; ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : '<?php echo $dashboard_merek_laptop_apple['nama_merek']; ?>'
      },
      {
        value    : <?php echo $dashboard_merek_laptop_asus['jumlahnya']; ?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : '<?php echo $dashboard_merek_laptop_asus['nama_merek']; ?>'
      },
      {
        value    : <?php echo $dashboard_merek_laptop_lenovo['jumlahnya']; ?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : '<?php echo $dashboard_merek_laptop_lenovo['nama_merek']; ?>'
      },
      {
        value    : <?php echo $dashboard_merek_laptop_toshiba['jumlahnya']; ?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : '<?php echo $dashboard_merek_laptop_toshiba['nama_merek']; ?>'
      },
      {
        value    : <?php echo $dashboard_merek_laptop_dell['jumlahnya']; ?>,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : '<?php echo $dashboard_merek_laptop_dell['nama_merek']; ?>'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    //-------------
    //- BAR CHART -
    //-------------
 var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
   var barChart                         = new Chart(barChartCanvas)
	
	   var barChartData = {
      labels  : ['Laptop', 'Komputer', 'Printer', 'Device Support', 'Network Device'],
      datasets: [
       
       {
          label               : 'Aset PLN',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [5, 59, 81, 56, 40]
        },
		
        {
          label               : 'Sewa',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [8, 48, 19, 86, 90]
		  
        }
      ]
    }

    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
		
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
	  
	 
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
	
	
	
   barChart.Bar(barChartData, barChartOptions)
   
 
  })
  

</script>

  <script type="text/javascript">
   function statusnya() {
	var tes = document.getElementById("status_kepemilikan").value;
	var ele = document.getElementById("toggleText");
  
		  if (tes === "Sewa") {
			  ele.style.display = "block";
		  } else {
			  ele.style.display = "none";
		  }
	}
</script>
<!-- CHART -->
</body>
</html>
