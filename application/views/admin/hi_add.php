 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Create
    <small>Health Index Device</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li><a href="<?php echo site_url('admin/hi'); ?>">Health Index</a></li>
    <?php foreach ($list_unit_hi->result_array() as $data) { ?>
    <li><a href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>">Details</a></li>
    <?php } ?>
    <li class="active">Add Health Index Device</li>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_hi_add" enctype="multipart/form-data">
            <?php foreach ($list_unit_hi->result_array() as $data) { ?>
            <input type="hidden" name="id_unit" value="<?php echo $data['id_unit']; ?>">
            <?php } ?>
            <input type="hidden" id="id_network_device" name="id_network_device">
            <input type="hidden" id="bobot_urgensi" name="bobot_urgensi">
            <input type="hidden" id="bobot_kondisi" name="bobot_kondisi">
            <input type="hidden" id="bobot_standard" name="bobot_standard">
            <input type="hidden" id="bobot_lifetime" name="bobot_lifetime">
            <input type="hidden" id="bobot_gangguan" name="bobot_gangguan">
            <?php foreach ($get_max_id_hi->result_array() as $data) { ?>
            <input type="hidden" name="id_hi" value="<?php echo $data['maxid']; ?>">
            <?php } ?>
            <?php foreach ($get_max_id_hi_standard->result_array() as $data) { ?>
            <input type="hidden" name="id_hi_standard" value="<?php echo $data['maxidstnd']; ?>">
            <?php } ?>
        <div class="box-header with-border">
            <?php foreach ($list_unit_hi->result_array() as $data) { ?>
            <h3 class="box-title">Health Index <strong> <?php echo $data['nama_unit']; ?></strong></h3>
            <?php } ?>
        </div>
        <div class="box-body">
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Perangkat</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <select class="form-control" id="perangkat" onChange="functionPort()" style="width: 100%;">
                            <option selected="selected"> -- Pilih Perangkat -- </option>
                            <?php foreach ($list_network_device->result_array() as $data) { ?>
                                <option value="<?php echo $data['id_network_device'].'-'.$data['device_type']; ?>"><?php echo $data['device_type'].' '.$data['merek']; ?></option>
                            <?php } ?>
                        </select>
                        <small id="ket_perangkat" class="text-muted" style="font-weight:normal"></small>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Kondisi</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <select class="form-control" name="kondisi" style="width: 100%;" >
                            <option selected="selected"> -- Pilih Kondisi -- </option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                        </select>  
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Jumlah Port</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <p class="col-sm-5 form-control" id="port">-</p>
                        <input type="hidden" id="jml_port" name="jml_port">  
                        <small id="ket_port" class="text-muted" style="font-weight:normal"></strong></small>  
                    </div>
                </div>
                
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Memenuhi Standard <br><small class="text-muted" style="font-weight:normal">*Apakah Jumlah Port atau Tipe Sesuai dengan standard Unit</small></label>
                    <div class="col-sm-9" style="font-weight:normal">
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="standard" id="optionsRadios1" value="1">
                            Sudah
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="standard" id="optionsRadios2" value="0">
                            Belum 
                            </label>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Umur Perangkat <br><small class="text-muted" style="font-weight:normal">*Dinilai dari waktu instalasi</small></label>
                    <div class="col-sm-9" style="font-weight:normal">
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="lifetime" id="optionsRadios3" value="1">
                            Lebih dari 5 Tahun
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="lifetime" id="optionsRadios4" value="0">
                            Kurang dari 5 Tahun 
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Jumlah Gangguan <br><small class="text-muted" style="font-weight:normal">*Kejadian Berulang Per Tahun</small></label>
                    <div class="col-sm-9" style="font-weight:normal">
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="gangguan" id="optionsRadios5" value="1">
                            Lebih dari 3 Kali
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="gangguan" id="optionsRadios6" value="0">
                            Kurang dari 3 Kali 
                            </label>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                        <?php foreach ($list_unit_hi->result_array() as $data) { ?>
                        <a href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
                        <?php } ?>
                        <button type="reset" class="btn btn-warning pull-right"><i class="fa fa-rotate-left"></i> &nbsp Reset</button>
                        <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-save"></i>&nbsp Submit</button>
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