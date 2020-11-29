 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        IT Support
        <small>Manage IT Support</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">IT Support</a></li>
        <li class="active">Manage IT Support</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">IT Support</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">No. Hp</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Lokasi Penempatan</th>
  				          <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($support as $support):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                      <td class="text-center"><?= $support['nama']; ?></td>
                      <td class="text-center"><?= $support['no_hp']; ?></td>
                      <td class="text-center"><?= $support['email']; ?></td>
                      <td class="text-center"><?= $support['penempatan']; ?></td>
                      <td class="text-center">
                        <a href="<?= base_url(); ?>support/deleteData/<?= $support['id']; ?>"
                                class="btn btn-sm btn-danger tombol-hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                        <a href="<?= base_url(); ?>support/editData/<?= $support['id']; ?>"
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
														<a class="btn btn-primary" href="<?= base_url('support/addData'); ?>">Add Data</a>
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
  
  