 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        laporan
        <small>Manage laporan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master Data</a></li>
        <li class='active'><a href="#">Laporan Kerusakan</a></li>
     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Nama Item</th>
                    <th class="text-center">Merek</th>
                    <th class="text-center">Kondisi</th>
                    <th class="text-center">Tanggal Pelaporan</th>
                    <th class="text-center">Pengguna</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($laporan as $laporan):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                    
                      <td class="text-center"><?= $laporan['nama_item']; ?></td>
                      <td class="text-center"><?= $laporan['merek_item']; ?></td>
                      
                      <td class="text-center"><?= $laporan['kondisi_item']; ?></td>
                      <td class="text-center"><?= date("d/F/Y",strtotime($laporan['tanggal_pelaporan'])); ?></td>
                      <td class="text-center"><?= $laporan['pengguna']; ?></td>
                      <td class="text-center">
                        <a href="<?= base_url(); ?>laporan/deleteData/<?= $laporan['id_report']; ?>"
                                class="btn btn-sm btn-danger tombol-hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                        <a href="<?= base_url(); ?>laporan/editData/<?= $laporan['id_report']; ?>"
                                class="btn btn-sm btn-success"><i class="fas fa-pen"></i> Edit</a>
                      </td>
                    </tr>
                  <?php
                    $no++;
                  endforeach;
                  ?>
				
                </tbody>
               
              </table>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?= base_url('laporan/addData'); ?>">Add Data</a>
														</div>
												</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  