 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SLA Network
        <small>Manage SLA Network</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <?= $this->session->flashdata('pesan'); ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">SLA Network</h3>
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
                    <th class="text-center">Tanggal PeSla</th>
                    <th class="text-center">Pengguna</th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($Sla as $Sla):
                  ?>
                    <tr>
                      <td class="text-center"><?= $no ?></td>
                    
                      <td class="text-center"><?= $Sla['nama_item']; ?></td>
                      <td class="text-center"><?= $Sla['merek_item']; ?></td>
                      
                      <td class="text-center"><?= $Sla['kondisi_item']; ?></td>
                      <td class="text-center"><?= date("d/F/Y",strtotime($Sla['tanggal_peSla'])); ?></td>
                      <td class="text-center"><?= $Sla['pengguna']; ?></td>
                      <td class="text-center">
                        <a href="<?= base_url(); ?>Sla/deleteData/<?= $Sla['id_report']; ?>"
                                class="btn btn-sm btn-danger tombol-hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                        <a href="<?= base_url(); ?>Sla/editData/<?= $Sla['id_report']; ?>"
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
														<a class="btn btn-primary" href="<?= base_url('Sla/addData'); ?>">Add Data</a>
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
  
  