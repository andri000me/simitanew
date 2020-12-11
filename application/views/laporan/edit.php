 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Laporan 
    <small>Add Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
    <li><a href="#">Laporan Kerusakan</a></li>
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
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>laporan/action_editData" enctype="multipart/form-data">
            
        <div class="box-header with-border">
          <h3 class="box-title">Add Data</h3>
        </div>
        <div class="box-body">
            <div class="col-lg-10">
                        <div class="form-group">
                           
                            <div class="col-sm-5">
             <input type="hidden" class="form-control" id="id_report" name="id_report" value = "<?php echo $laporan['id_report']; ?>" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Item</label>
                            <div class="col-sm-5">
                            <select class="form-control select2" name="nama_item" style="width: 100%;">
                            <option value = "<?php echo $laporan['nama_item']; ?>" selected="selected"> <?php echo $laporan['nama_item']; ?></option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC/Komputer">PC / Komputer</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Aplikasi Lokal">Aplikasi Lokal</option>
                                <option value="Server">Server</option>
                                <option value="Network Device">Network Device</option>
                                <option value="Video Conference">Video Conference</option>
                              
                            </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-10">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Merek</label>
                            <div class="col-sm-5">
                            <select class="form-control select2" name="merek_item" style="width: 100%;">
                            <option value = "<?php echo $laporan['merek_item']; ?>" selected="selected"> <?php echo $laporan['merek_item']; ?> </option>
                                <?php foreach ($list_merek_printer->result_array() as $data) { ?>
                                <option value="<?php echo $data['merek']; ?>"><?php echo $data['merek']; ?></option>
                                <?php 
                                }
                                ?>
                            </select>
                            </div>
                        </div>
                    </div>
       
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Kondisi</label>
                            <div class="col-sm-5">
                            <textarea class="form-control" id="kondisi_item" name="kondisi_item" rows="3" placeholder="Contoh : Baterai laptop sudah tidak dapat berfungsi dengan baik." required><?php echo $laporan['kondisi_item']; ?></textarea>
                            </div>
                        </div>
                    </div>
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-5">
             <input type="date" class="form-control" id="tanggal_pelaporan" name="tanggal_pelaporan" value ="<?php echo $laporan['tanggal_pelaporan']; ?>" required/>
                            </div>
                        </div>
                    </div>
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nama Pengguna</label>
                            <div class="col-sm-5">
             <input type="text" class="form-control" id="pengguna" name="pengguna" value="<?php echo $laporan['pengguna']; ?>" required/>
                            </div>
                        </div>
                    </div>
                    
                                        
                    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                    
                        <a href="<?php echo base_url(); ?>laporan/getLaporan" class="btn btn-danger">Kembali</a>
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