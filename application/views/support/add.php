 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        IT Support
        <small>Add Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">IT Support</a></li>
        <li class="active">Add Data</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>support/addData" enctype="multipart/form-data">
				
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama" name="nama" required/>
                                </div>
                            </div>
                        </div>
            <div class="col-lg-10">
                            <div class="form-group">
                                <label for="no_hp" class="col-sm-3 control-label">No. Handphone</label>
                                <div class="col-sm-5">
                 <input type="number" class="form-control" id="no_hp" name="no_hp" required/>
                                </div>
                            </div>
                        </div>
            <div class="col-lg-10">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                 <input type="text" class="form-control" id="email" name="email" required/>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="penempatan" class="col-sm-3 control-label">Lokasi Penempatan</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="penempatan" name="penempatan" required/>
                                </div>
                            </div>
                        </div>
						
											
						
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>support" class="btn btn-danger">Kembali</a>
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