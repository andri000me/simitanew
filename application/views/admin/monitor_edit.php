
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit Monitor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Monitor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
         

          <!-- Form Element sizes -->
          <div class="box box-success">
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_monitor_edit?id_monitor=<?php echo $monitornya['id_monitor']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_monitor" value="<?php echo $monitornya['id_monitor']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit monitor</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_merek" class="col-sm-3 control-label">Merk Monitor</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="id_merek" name="id_merek" style="width: 100%;"/>	
									<option value="<?php echo $monitornya['id_merek']; ?>" selected="selected"><?php echo $monitornya['nama_mereknya']; ?></option>
										<option> -- Pilih Unit Lain -- </option>
													<?php foreach ($list_merek_monitor->result_array() as $data) { ?>
													<option value="<?php echo $data['id_merek']; ?>"><?php echo $data['merek']; ?></option>
													<?php 
													}
													?>
								</select> </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_pengguna" class="col-sm-3 control-label">Pengguna</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $monitornya['nama_pengguna']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_unit" class="col-sm-3 control-label">Unit</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="id_unit" name="id_unit" style="width: 100%;"/>	
									<option value="<?php echo $monitornya['id_unit']; ?>" selected="selected"><?php echo $monitornya['nama_unitnya']; ?></option>
										<option> -- Pilih Unit Lain -- </option>
													<?php foreach ($list_unit->result_array() as $data) { ?>
													<option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
													<?php 
													}
													?>
								</select>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="status_kepemilikan" class="col-sm-3 control-label">Status Aset</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="status_kepemilikan" name="status_kepemilikan" style="width: 100%;" onchange="statusnya()"/>	
									<option value="<?php echo $monitornya['status_kepemilikan']; ?>" selected="selected"><?php echo $monitornya['status_kepemilikan']; ?></option>
										<option> -- Pilih Status -- </option>
													<option value="Aset PLN">Aset PLN</option>
													<option value="Sewa">Sewa</option>
								</select>
								
								</div>
                            </div>
                        </div>
						<?php 
						if ($monitornya['status_kepemilikan']=='Aset PLN'){ ?>
						<div class="col-lg-10" id="toggleText" style="display: none;">
                            <div class="form-group">
                                <label for="id_vendor" class="col-sm-3 control-label" >Vendor</label>
                                <div class="col-sm-5">
								 <select class="form-control select2" name="id_vendor" id="id_vendor" style="width: 100%;">
									
												<option selected="selected"> -- Pilih Vendor -- </option>
													<?php foreach ($list_vendor->result_array() as $data) { ?>
													<option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
													<?php 
													}
													?>
													
									</select>
                                </div>
                            </div>
                        </div>
					<?php 	} else { ?>
						<div class="col-lg-10" id="toggleText" style="display: block;">
                            <div class="form-group">
                                <label for="id_vendor" class="col-sm-3 control-label" >Vendor</label>
                                <div class="col-sm-5">
								 <select class="form-control select2" name="id_vendor" id="id_vendor" style="width: 100%;">
									<option value="<?php echo $monitornya['id_vendor']; ?>" selected="selected"><?php echo $monitornya['nama_vendornya']; ?></option>
												<option> -- Pilih Vendor -- </option>
													<?php foreach ($list_vendor->result_array() as $data) { ?>
													<option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
													<?php 
													}
													?>
													
									</select>
                                </div>
                            </div>
                        </div>
						
						<?php } ?>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="tahun" class="col-sm-3 control-label">Tahun</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="tahun" name="tahun" style="width: 100%;"/>	
									<option value="<?php echo $monitornya['tahun']; ?>" selected="selected"><?php echo $monitornya['tahun']; ?></option>
													<option> -- Pilih Tahun -- </option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
									</select>
								</div>
                            </div>
                        </div>
						<br><br><br>
						
						 
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/monitor_view" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
					 </form>
          </div>
          <!-- /.box -->
					
        </div>
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->