<div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Edit
    <small>Health Index Device</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li><a href="<?php echo site_url('admin/hi'); ?>">Health Index</a></li>
    <?php foreach ($list_unit_hi->result_array() as $data) { ?>
    <li><a href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>">Details</a></li>
    <?php } ?>
    <li class="active">Edit Health Index Device</li>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_hi_edit" enctype="multipart/form-data">
            <?php foreach ($get_id_hi_standard->result_array() as $data) { ?>
            <input type="hidden" name="bobot_urgensi" value="<?php echo $data['bobot_urgensi']; ?>">
            <input type="hidden" name="bobot_kondisi" value="<?php echo $data['bobot_kondisi']; ?>">
            <input type="hidden" name="bobot_standard" value="<?php echo $data['bobot_standard']; ?>">
            <input type="hidden" name="bobot_lifetime" value="<?php echo $data['bobot_lifetime']; ?>">
            <input type="hidden" name="bobot_gangguan" value="<?php echo $data['bobot_gangguan']; ?>">
            <input type="hidden" name="bobot_port" value="<?php echo $data['bobot_port']; ?>">
            <input type="hidden" name="id_hi" value="<?php echo $data['id_hi_standard']; ?>">
            <?php } ?>
            
        <div class="box-header with-border">
            <?php foreach ($list_unit_hi->result_array() as $data) { ?>
            <h3 class="box-title">Health Index <strong> <?php echo $data['nama_unit']; ?></strong></h3>
            <input type="hidden" name="id_unit" value="<?php echo $data['id_unit']; ?>">
            <?php } ?>
        </div>
        <?php foreach ($get_id_hi->result_array() as $data) { ?>
        <div class="box-body">
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Perangkat</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <p class="form-control" style="cursor:no-drop"><?php echo $data['device_type'].' '.$data['merek']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Kondisi</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <select class="form-control" name="kondisi" style="width: 100%;" >
                            <option selected="selected"> -- Pilih Kondisi -- </option>
                                <option value="1" <?php if($data['bobot_kondisi'] != 0) { echo "selected";} ?>>Aktif</option>
                                <option value="0" <?php if($data['bobot_kondisi'] == 0) { echo "selected";} ?>>Tidak Aktif</option>
                        </select>  
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Jumlah Port</label>
                    <div class="col-sm-5" style="font-weight:normal">
                        <p class="col-sm-5 form-control" style="cursor:no-drop"><?php if($data['device_type'] == 'Router'){ echo "8 Port"; } elseif($data['device_type'] == 'Switch'){ echo "16 Port"; } elseif($data['device_type'] == 'Access Point'){ echo "1 Port"; } ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Memenuhi Standard <br><small class="text-muted" style="font-weight:normal">*Apakah Jumlah Port atau Tipe Sesuai dengan standard Unit</small></label>
                    <div class="col-sm-9" style="font-weight:normal">
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="standard" id="optionsRadios1" value="1" <?php if($data['bobot_standard'] == '0'){ echo "checked";}?>>
                            Sudah
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="standard" id="optionsRadios2" value="0" <?php if($data['bobot_standard'] != '0'){ echo "checked";}?>>
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
                            <input type="radio" name="lifetime" id="optionsRadios3" value="1" <?php if($data['bobot_lifetime'] != '0'){ echo "checked";}?>>
                            Lebih dari 5 Tahun
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="lifetime" id="optionsRadios4" value="0" <?php if($data['bobot_lifetime'] == '0'){ echo "checked";}?>>
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
                            <input type="radio" name="gangguan" id="optionsRadios5" value="1" <?php if($data['bobot_gangguan'] != '0'){ echo "checked";}?>>
                            Lebih dari 3 Kali
                            </label>
                        </div>
                        <div class="radio col-sm-3">
                            <label>
                            <input type="radio" name="gangguan" id="optionsRadios6" value="0" <?php if($data['bobot_gangguan'] == '0'){ echo "checked";}?>>
                            Kurang dari 3 Kali 
                            </label>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <?php break;} ?>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                        <?php foreach ($list_unit_hi->result_array() as $data) { ?>
                        <a href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
                        <?php } ?>
                        <button type="reset" class="btn btn-warning pull-right"><i class="fa fa-rotate-left"></i> &nbsp Reset</button>
                        <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px"><i class="fa fa-save"></i>&nbsp Update</button>
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