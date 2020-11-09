
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit Merek</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit Merek</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_merek_edit?id_merek=<?php echo $mereknya['id_merek']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_merek" value="<?php echo $mereknya['id_merek']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Merek</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="merek" class="col-sm-3 control-label">Nama Merek</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="merek" name="merek" value="<?php echo $mereknya['merek']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="kategori" class="col-sm-3 control-label">Kategori</label>
                                <div class="col-sm-5">
								  <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $mereknya['kategori']; ?>" required/>
                                 </div>
                            </div>
                        </div>
						<br><br><br>
					
						
						 
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/merek_view" class="btn btn-danger">Kembali</a>
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