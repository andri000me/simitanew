 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Vendor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Vendor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Vendor Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Nama Vendor</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
				  <th>Actions</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($vendor_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama_vendor']; ?>
				  </td>
                   <td>
						<?php echo $data['alamat_vendor']; ?>
				  </td>
                 
                   <td>
						<?php echo $data['telepon']; ?>
				  </td>
                 
				  
				  <td>
														 <input type="hidden" name="id_vendor" value="<?php echo $data['id_vendor']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_vendor']; ?>" href="<?php echo base_url() . "admin/vendor_edit?id_vendor=".$data['id_vendor']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_vendor']; ?>"  href="<?php echo base_url() . "admin/vendor_delete?id_vendor=".$data['id_vendor']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('admin/vendor_add'); ?>">Add Vendor</a>
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
  
  