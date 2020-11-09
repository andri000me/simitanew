 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Network Device</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Network Device</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Network Device Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Merk Network Device</th>
                  <th>Device Type</th>
                  <th>IP Address</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Pengguna</th>
                  <th>Unit</th>
                  <th>Status Aset</th>
                  <th>Vendor</th>
                  <th>Tahun</th>
				  <th>Actions</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($network_device_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama_mereknya']; ?>
				  </td>
                  
				   <td>
						<?php echo $data['device_type']; ?>
				  </td>
				   <td>
						<?php echo $data['ip_address']; ?>
				  </td>
				   <td>
						<?php echo $data['username']; ?>
				  </td>
				   <td>
						<?php echo $data['password']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['nama_pengguna']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['nama_unitnya']; ?>
				  </td>
				   <td>
						<?php if ($data['status_kepemilikan']=="Aset PLN"){ ?>
							
						<button type="button" class="btn btn-block btn-success"><?php echo $data['status_kepemilikan']; ?></button>
							
						<?php } else { ?>
						
						<button type="button" class="btn btn-block btn-info"><?php echo $data['status_kepemilikan']; ?></button>
						
						<?php } ?>
				  </td>
				  <td>
						<?php echo $data['nama_vendornya']; ?>
				  </td>
				   <td>
						<?php echo $data['tahun']; ?>
				  </td>
				  <td>
														 <input type="hidden" name="id_network_device" value="<?php echo $data['id_network_device']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_network_device']; ?>" href="<?php echo base_url() . "admin/network_device_edit?id_network_device=".$data['id_network_device']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_network_device']; ?>"  href="<?php echo base_url() . "admin/network_device_delete?id_network_device=".$data['id_network_device']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('admin/network_device_add'); ?>">Add Network Device</a>
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
  
  