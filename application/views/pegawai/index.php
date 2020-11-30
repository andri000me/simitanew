 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pegawai
        <small>Manage Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pegawai</a></li>
        <li class="active">Manage Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">No. Hp</th>
  				          <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($pegawai as $pegawai):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                      <td class="text-center"><?= $pegawai['nip']; ?></td>
                      <td class="text-center"><?= $pegawai['nama']; ?></td>
                      <td class="text-center"><?= $pegawai['email']; ?></td>
                      <td class="text-center"><?= $pegawai['no_hp']; ?></td>
                      <td class="text-center">
                        <a href="<?= base_url(); ?>pegawai/deleteData/<?= $pegawai['pegawai_id']; ?>"
                                class="btn btn-sm btn-danger tombol-hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                        <a href="<?= base_url(); ?>pegawai/editData/<?= $pegawai['pegawai_id']; ?>"
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
														<a class="btn btn-primary" href="<?= base_url('pegawai/addData'); ?>">Add Data</a>
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
  
  