
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Edit User</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_users_edit?id_users=<?php echo $usernya['id_users']; ?>" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_users" value="<?php echo $usernya['id_users']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Users</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="username" name="username" value="<?php echo $usernya['username']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="password" name="password" value="<?php echo $this->enkripsi->encrypt_decrypt('decrypt', $usernya['password']); ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						 <div class="col-lg-10">
                            <div class="form-group">
                                <label for="role" class="col-sm-3 control-label">Role</label>
                                <div class="col-sm-5">
								 	<?php
										switch($usernya['id_role']){
                    case 1:
                      $status = "Admin";
                      break;
                    case 2:
                      $status = "EOS ICON+";
                      break;
                    case 3:
                      $status = "IT Support";
                      break;
                    case 4:
                      $status = "Pegawai STI";
                      break;
                  } ?>
							<select class="form-control" id="role" name="role" required>	
							<option value="<?php echo $usernya['id_role']; ?>"><?php echo $status; ?></option>
							<option>--Pilih Role--</option>
							<option value="1">Admin</option>
							<option value="2">EOS ICON+</option>
              <option value="3">IT Support</option>
              <option value="4">Pegawai STI</option>
							
							</select>	
								 
								 
                                </div>
                            </div>
                        </div>
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>admin/users_view" class="btn btn-danger">Kembali</a>
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