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
      <div class="col-xs-12">
        <!-- TABEL KPI YANG OPEN -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">KPI berstatus Open</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-hover">
              <thead>
                <tr>
                  <th class="center">No.</th>
                  <th class="text-center">Indikator</th>
                  <th class="text-center">PIC</th>
                  <th class="text-center">Satuan</th>
                  <th class="text-center">Bobot</th>
                  <th class="text-center">Target</th>
                  <th class="text-center">Realisasi</th>
                  <th class="text-center">Skor</th>
                  <th class="text-center">Waktu</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 1;
                foreach ($kpi_open->result_array() as $data) :
                ?>
                  <tr>
                    <td class="text-center"><?= $no ?></td>
                    <td><?= $data['indikator_kpi']; ?></td>
                    <td><?= $data['nama_pj']; ?></td>
                    <td class="text-center"><?= $data['satuan']; ?></td>
                    <td class="text-center"><?= $data['bobot']; ?></td>
                    <td class="text-center"><?= $data['target']; ?></td>
                    <td class="text-center"><?= $data['realisasi']; ?></td>
                    <td class="text-center"><?= $data['skor']; ?></td>
                    <td class="text-center"><?= $data['waktu']; ?></td>
                    <td class="text-center"><?= $data['status']; ?></td>
                    <td class="text-center">
                      <div class="hidden-sm hidden-xs action-buttons">
                        <a class="green" value="<?php echo $data['kpi_id']; ?>" href="<?php echo base_url() . "kpi/kpi_edit?kpi_id=" . $data['kpi_id'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                        &nbsp;
                        <a class="red" href="<?= base_url(); ?>kpi/deleteData/<?= $data['kpi_id']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
                          <i class="fa fa-trash-o bigger-130"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php
                  $no++;
                endforeach;
                ?>

              </tbody>

            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- BAR CHART JUMLAH KEPEMILIKAN ASET-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Jumlah Kepemilikan Aset</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="barChart" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-6">
        <!-- DONUT CHART MERK LAPTOP-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merek Laptop yang Paling Banyak Digunakan di Sumatera Utara</h3>

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

      <div class="col-md-6">
        <!-- DONUT CHART MERK PC-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merek Komputer yang Paling Banyak Digunakan di Sumatera Utara</h3>


            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChartPC" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-6">
        <!-- DONUT CHART MERK PRINTER-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merk Printer yang Paling Banyak Digunakan di Sumatera Utara</h3>


            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChartPrinter" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-6">
        <!-- DONUT CHART MERK SERVER-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merek Server yang Paling Banyak Digunakan di Sumatera Utara</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChartServer" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-6">
        <!-- DONUT CHART MERK VICON-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merek Video Conference yang Paling Banyak Digunakan di Sumatera Utara</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChartVicon" style="height:250px"></canvas>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-6">
        <!-- DONUT CHART MERK NETWORK DEVICE-->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Merek Network Device yang Paling Banyak Digunakan di Sumatera Utara</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChartNetworkDevice" style="height:250px"></canvas>
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