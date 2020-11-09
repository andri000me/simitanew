 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Aplikasi Lokal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Aplikasi Lokal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Aplikasi Lokal Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Nama Aplikasi</th>
                  <th>Link</th>
                  <th>Username Database</th>
                  <th>Password Database</th>
                  <th>Jenis Database</th>
                  <th>Unit</th>
				  <th>Actions</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($aplikasi_lokal_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama_aplikasi']; ?>
				  </td>
                  
				   <td>
						<?php echo $data['link_aplikasi']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['username']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['password']; ?>
				  </td>
				  <td>
						<?php echo $data['jenis_database']; ?>
				  </td>
				   <td>
						<?php echo $data['nama_unitnya']; ?>
				  </td>
				  <td>
														 <input type="hidden" name="id_aplikasi_lokal" value="<?php echo $data['id_aplikasi_lokal']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_aplikasi_lokal']; ?>" href="<?php echo base_url() . "admin/aplikasi_lokal_edit?id_aplikasi_lokal=".$data['id_aplikasi_lokal']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_aplikasi_lokal']; ?>"  href="<?php echo base_url() . "admin/aplikasi_lokal_delete?id_aplikasi_lokal=".$data['id_aplikasi_lokal']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
																	<i class="fa fa-trash-o bigger-130"></i>
																</a>
															</div>
															
														</td>
                </tr>
				
				<?php 
					$no++;
					}
				?>
                </tbody>
               
              </table>
												<div class="row">
														<div id="default-buttons" class="col-sm-6">
														<a class="btn btn-primary" href="<?php echo site_url('admin/aplikasi_lokal_add'); ?>">Add Aplikasi Lokal</a>
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
  
  