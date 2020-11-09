
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit Aplikasi Lokal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Aplikasi Lokal</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_aplikasi_lokal_edit?id_aplikasi_lokal=<?php echo $aplikasi_lokalnya['id_aplikasi_lokal']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_aplikasi_lokal" value="<?php echo $aplikasi_lokalnya['id_aplikasi_lokal']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit aplikasi_lokal</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_aplikasi" class="col-sm-3 control-label">Nama Aplikasi</label>
                                <div class="col-sm-5">
								  <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" value="<?php echo $aplikasi_lokalnya['nama_aplikasi']; ?>" required/>
                                 </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="link_aplikasi" class="col-sm-3 control-label">Link Aplikasi</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="link_aplikasi" name="link_aplikasi" value="<?php echo $aplikasi_lokalnya['link_aplikasi']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username Database</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="username" name="username" value="<?php echo $aplikasi_lokalnya['username']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password Database</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="password" name="password" value="<?php echo $aplikasi_lokalnya['password']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="jenis_database" class="col-sm-3 control-label">Jenis Database</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="jenis_database" name="jenis_database" value="<?php echo $aplikasi_lokalnya['jenis_database']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="id_unit" class="col-sm-3 control-label">Unit</label>
                                <div class="col-sm-5">
								  <select class="form-control select2" id="id_unit" name="id_unit" style="width: 100%;"/>	
									<option value="<?php echo $aplikasi_lokalnya['id_unit']; ?>" selected="selected"><?php echo $aplikasi_lokalnya['nama_unitnya']; ?></option>
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
						
						 
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/aplikasi_lokal_view" class="btn btn-danger">Kembali</a>
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