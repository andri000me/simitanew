
 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $menghitung_jumlah_perangkat['jumlah_laptop']; ?></h3>

              <p>Unit</p>
            </div>
            <div class="icon">
              <i class="ion ion-laptop"></i>
            </div>
            <a href="<?php echo site_url('admin/laptop_view'); ?>" class="small-box-footer">Laptop di Sumatera Utara <i class="fa fa-building"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $menghitung_jumlah_perangkat['jumlah_server']; ?></h3>

              <p>Unit</p>
            </div>
            <div class="icon">
              <i class="ion ion-archive"></i>
            </div>
            <a href="<?php echo site_url('admin/server_view'); ?>" class="small-box-footer">Server di Sumatera Utara <i class="fa fa-building"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $menghitung_jumlah_perangkat['jumlah_komputer']; ?></h3>

              <p>Unit</p>
            </div>
            <div class="icon">
              <i class="ion ion-monitor"></i>
            </div>
            <a href="<?php echo site_url('admin/komputer_view'); ?>" class="small-box-footer">Komputer di Sumatera Utara <i class="fa fa-building"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $menghitung_jumlah_perangkat['jumlah_network_device']; ?></h3>

              <p>Unit</p>
            </div>
            <div class="icon">
              <i class="ion ion-wifi"></i>
            </div>
            <a href="<?php echo site_url('admin/network_device_view'); ?>" class="small-box-footer">Network Device di Sumatera Utara <i class="fa fa-building"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
	  
      <!-- /.row -->
    
	  
          <!-- Main content -->
  
      <div class="row">
        <div class="col-md-6">
          

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Merk Laptop yang Paling Banyak Digunakan di Sumatera Utara</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
       
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    
    <!-- /.content -->
      <!-- /.box -->
<br><br><br><br><br><br><br><br>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  