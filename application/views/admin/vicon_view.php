 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Manage Vicon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Manage Vicon</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Vicon Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Merk Vicon</th>
                  <th>Type</th>
                  <th>Tahun</th>
                  <th>No Seri</th>
                  <th>IP Address</th>
                  <th>Mac Address</th>
                  <th>Unit</th>
				  <th>Actions</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($vicon_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama_mereknya']; ?>
				  </td>
                   <td>
						<?php echo $data['type']; ?>
				  </td>
				   <td>
						<?php echo $data['tahun']; ?>
				  </td>
				   <td>
						<?php echo $data['no_seri']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['ip_address']; ?>
				  </td>
				  
				   <td>
						<?php echo $data['mac_address']; ?>
				  </td>
				   <td>
						<?php echo $data['nama_unitnya']; ?>
				  </td>
				  <td>
														 <input type="hidden" name="id_vicon" value="<?php echo $data['id_vicon']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_vicon']; ?>" href="<?php echo base_url() . "admin/vicon_edit?id_vicon=".$data['id_vicon']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_vicon']; ?>"  href="<?php echo base_url() . "admin/vicon_delete?id_vicon=".$data['id_vicon']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('admin/vicon_add'); ?>">Add vicon</a>
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
  
  