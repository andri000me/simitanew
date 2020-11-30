 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pegawai
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pegawai</a></li>
        <li class="active">Edit Data</li>
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
		   <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="pegawai_id" value="<?= $pegawai['pegawai_id']; ?>">
				
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data</h3>
            </div>
            <div class="box-body">
              <div class="col-lg-10">
                            <div class="form-group">
                                <label for="nip" class="col-sm-3 control-label">NIP</label>
                                <div class="col-sm-5">
                 <input type="number" class="form-control" id="nip" name="nip" required value="<?= $pegawai['nip']; ?>"/>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama" name="nama" required value="<?= $pegawai['nama']; ?>"/>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-10">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
                 <input type="text" class="form-control" id="email" name="email" required value="<?= $pegawai['email']; ?>"/>
                                </div>
                            </div>
                        </div>
            <div class="col-lg-10">
                            <div class="form-group">
                                <label for="no_hp" class="col-sm-3 control-label">No. Handphone</label>
                                <div class="col-sm-5">
                 <input type="number" class="form-control" id="no_hp" name="no_hp" required value="<?= $pegawai['no_hp']; ?>"/>
                                </div>
                            </div>
                        </div>
						
											
						
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>pegawai" class="btn btn-danger">Kembali</a>
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