
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit Unit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Unit</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_unit_sumut2_edit?id_unit=<?php echo $unitnya['id_unit']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_unit" value="<?php echo $unitnya['id_unit']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit unit</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_unit" class="col-sm-3 control-label">Nama unit</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_unit" name="nama_unit" value="<?php echo $unitnya['nama_unit']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="alamat_unit" class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-5">
								  <input type="text" class="form-control" id="alamat_unit" name="alamat_unit" value="<?php echo $unitnya['alamat_unit']; ?>" required/>
                                 </div>
                            </div>
                        </div>
						<br><br><br>
						
						 
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/unit_sumut2_view" class="btn btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
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