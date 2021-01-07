
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Edit Data Network</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Edit Data Network</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->


              <!-- Form Element sizes -->
              <div class="box box-success">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_data_network_edit?data_id=<?php echo $data_networknya['data_id']; ?>" enctype="multipart/form-data">

                    <input type="hidden" id="data_id" name="data_id" value="<?php echo $data_networknya['data_id']; ?>">
                    <input type="hidden" id="nomorasman" name="nomorasman" value="">
                    <input type="hidden" id="id_unit_lama" name="id_unit_lama" value="<?php echo $data_networknya['id_unit']; ?>">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Data Network</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="tanggal_aktivasi" class="col-sm-3 control-label">Tanggal Aktivasi</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="tanggal_aktivasi" name="tanggal_aktivasi" value="<?php echo $data_networknya['tanggal_aktivasi']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="service_id" class="col-sm-3 control-label">Service ID</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="service_id" name="service_id" value="<?php echo $data_networknya['service_id']; ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="service" class="col-sm-3 control-label">Service</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" id="service" name="service" style="width: 100%;">  
                                        <option value="<?php echo $data_networknya['service']; ?>" selected="selected"><?php echo $data_networknya['service']; ?></option>
                                        <option value=""> -- Pilih Service -- </option>
                                        <option value="IPVPN">IPVPN</option>
                                        <option value="Metronet">Metronet</option>
                                        <option value="VSAT IP">VSAT IP</option>
                                        <option value="Clear Channel">Clear Channel</option>
                                        <option value="Internet">Internet</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="asman" class="col-sm-3 control-label">Asman</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" id="asman" name="asman" style="width: 100%;" onchange="editnamaunitnya()"> 
                                        <option value="<?php echo $data_networknya['asman']; ?>" selected="selected"><?php echo $data_networknya['asman']; ?></option>
                                        <option value=""> -- Pilih Asman -- </option>
                                        <option value="Asman Sumut 1">Asman Sumut 1</option>
                                        <option value="Asman Sumut 2">Asman Sumut 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php if ($data_networknya['asman']=='Asman Sumut 1'){ ?>
                            <div class="col-lg-10" id="toggleText3" style="display: block;">
                                <div class="form-group">
                                    <label for="id_unit1" class="col-sm-3 control-label" >Nama Unit</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="id_unit1" id="id_unit1" style="width: 100%;">
                                            <?php foreach ($list_unit_sumut1->result_array() as $data) { if ($data['id_unit'] == $data_networknya['id_unit']){ ?>
                                                <option value="<?php echo $data['id_unit']; ?>" selected="selected"><?php echo $data['nama_unit']; ?></option>
                                            <?php } } ?>
                                            <option value =""> -- Pilih Unit -- </option>
                                            <?php foreach ($list_unit_sumut1->result_array() as $data) { ?>
                                             <option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
                                         <?php } ?>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     <?php   } else if($data_networknya['asman'] == "Asman Sumut 2") { ?>
                        <div class="col-lg-10" id="toggleText3" style="display: block;">
                            <div class="form-group">
                                <label for="id_unit2" class="col-sm-3 control-label" >Nama Unit</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" name="id_unit2" id="id_unit2" style="width: 100%;">
                                        <?php foreach ($list_unit_sumut2->result_array() as $data) { if ($data['id_unit'] == $data_networknya['id_unit']){ ?>
                                            <option value="<?php echo $data['id_unit']; ?>" selected="selected"><?php echo $data['nama_unit']; ?></option>
                                        <?php } } ?>
                                        <option value =""> -- Pilih Unit -- </option>
                                        <?php foreach ($list_unit_sumut2->result_array() as $data) { ?>
                                         <option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
                                     <?php } ?>
                                 </select>
                             </div>
                         </div>
                     </div>
                 <?php } ?>
                 <div class="col-lg-10" id="toggleText1" style="display: none;">
                    <div class="form-group">
                        <label for="id_unit1" class="col-sm-3 control-label" >Nama Unit</label>
                        <div class="col-sm-5">
                            <select class="form-control select2" name="id_unit1" id="id_unit1" style="width: 100%;">
                                <option selected="selected" value=" "> -- Pilih Unit -- </option>
                                <?php foreach ($list_unit_sumut1->result_array() as $data) { ?>
                                    <option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
                                    <?php 
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10" id="toggleText2" style="display: none;">
                    <div class="form-group">
                        <label for="id_unit2" class="col-sm-3 control-label" >Nama Unit</label>
                        <div class="col-sm-5">
                         <select class="form-control select2" name="id_unit2" id="id_unit2" style="width: 100%;">
                            <option selected="selected" value=""> -- Pilih Unit -- </option>
                            <?php foreach ($list_unit_sumut2->result_array() as $data) { ?>
                                <option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
                                <?php 
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-5">
                        <textarea id="keterangan" name="keterangan" rows="5" cols="50" maxlength="1000" required><?php echo $data_networknya['keterangan']; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="no_aktivasi" class="col-sm-3 control-label">No BA Aktivasi/ADM</label>
                    <div class="col-sm-5">
                     <input type="text" class="form-control" id="no_aktivasi" name="no_aktivasi" value="<?php echo $data_networknya['no_aktivasi']; ?>" required/>
                 </div>
             </div>
         </div>
         <div class="col-lg-10">
            <div class="form-group">
                <label for="scada" class="col-sm-3 control-label">Scada</label>
                <div class="col-sm-5">
                    <select class="form-control select2" id="scada" name="scada" style="width: 100%;"> 
                        <option value="<?php echo $data_networknya['scada']; ?>" selected="selected"><?php if($data_networknya['scada'] == 1) {
                            echo "Scada";
                        } else if($data_networknya['scada'] == 0){
                            echo "Non Scada";
                        } ?></option>
                        <option value=""> -- Pilih Scada -- </option>
                        <option value="1">Scada</option>
                        <option value="0">Non Scada</option>
                    </select>
                </div>
            </div>
        </div>
     <div class="col-lg-10">
        <div class="form-group">
            <label for="kapasitas" class="col-sm-3 control-label">Kapasitas /BW</label>
            <div class="col-sm-5">
               <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $data_networknya['kapasitas']; ?>" required/>
           </div>
       </div>
   </div>
   
        <div class="col-lg-10">
            <div class="form-group">
                <label for="harga" class="col-sm-3 control-label">Harga</label>
                <div class="col-sm-5">
                 <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $data_networknya['harga']; ?>" required/>
             </div>
         </div>
     </div>

</div>
<!-- /.box-body -->
<div class="box-footer">
    <div class="pull-center">

        <a href="<?php echo base_url(); ?>admin/data_network_view" class="btn btn-danger">Kembali</a>
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