<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin
            <small>Edit Log Gangguan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Edit Log Gangguan</li>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_lgangguan_edit?log_id=<?php echo $lgangguannya['log_id']; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="log_id" value="<?php echo $lgangguannya['log_id']; ?>">
                        <input type="hidden" name="tiket_open" value="<?php echo $lgangguannya['tiket_open']; ?>">
                        <input type="hidden" name="tiket_close" value="<?php echo $lgangguannya['tiket_close']; ?>">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Log Gangguan</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="no_tiket" class="col-sm-3 control-label">Nomor Tiket</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="no_tiket" name="no_tiket" value="<?php echo $lgangguannya['no_tiket']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="nama_service" class="col-sm-3 control-label">Nama Service</label>
                                    <div class="col-sm-5">
                                        <textarea id="nama_service" name="nama_service" rows="5" cols="50" maxlength="1000" required><?php echo $lgangguannya['nama_service'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="sid" class="col-sm-3 control-label">SID</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="sid" name="sid" value="<?php echo $lgangguannya['sid']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="id_kantor_induk" class="col-sm-3 control-label">ID Kantor Induk</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="id_kantor_induk" name="id_kantor_induk" value="<?php echo $lgangguannya['id_kantor_induk']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="asman" class="col-sm-3 control-label">Asman</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="asman" id="asman" style="width: 100%;"required>
                                            <option value="<?php echo $lgangguannya['asman']; ?>" selected="selected"> STI Sumut <?php echo $lgangguannya['asman']; ?></option>
                                            <option value=""> -- Pilih Asman -- </option>
                                            <option value="1">STI Sumut 1</option>
                                            <option value="2">STI Sumut 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="layanan" class="col-sm-3 control-label">Layanan</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="layanan" id="layanan" style="width: 100%;"required>
                                            <option value="<?php echo $lgangguannya['layanan']; ?>" selected="selected"><?php echo $lgangguannya['layanan']; ?></option>
                                            <option value=""> -- Pilih Layanan -- </option>
                                            <option value="IP VPN">IP VPN</option>
                                            <option value="Metronet">Metronet</option>
                                            <option value="VSAT">VSAT</option>
                                            <option value="Clear Channel">Clear Channel</option>
                                            <option value="Internet">Internet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="scada" class="col-sm-3 control-label">Scada</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" id="scada" name="scada" style="width: 100%;"> 
                                            <option value="<?php echo $lgangguannya['scada']; ?>" selected="selected"><?php if($lgangguannya['scada'] == 1) {
                                                echo "Scada";
                                            } else if($lgangguannya['scada'] == 0){
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
                                    <label for="status_log" class="col-sm-3 control-label">Status Tiket</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="status_log" id="status_log" style="width: 100%;" required>
                                            <option value="<?php echo $lgangguannya['status_log']; ?>" selected="selected"><?php echo $lgangguannya['status_log']; ?></option>
                                            <option value=""> -- Pilih Status -- </option>
                                            <option value="Open">Open</option>
                                            <option value="Close">Close</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tiket_open" class="col-sm-3 control-label">Tiket Open</label>
                                    <div class="col-sm-5">
                                        <input type="datetime-local" class="form-control" id="tiket_open" name="tiket_open" value="<?php 
                                        $db_open = date_create($lgangguannya['tiket_open']);
                                        $dt_open= $db_open->format('Y-m-d\TH:i:s'); 
                                        echo $dt_open; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="tiket_close" class="col-sm-3 control-label">Tiket Close</label>
                                    <div class="col-sm-5">
                                        <input type="datetime-local" class="form-control" id="tiket_close" name="tiket_close" value="<?php 
                                        $db_close = date_create($lgangguannya['tiket_close']);
                                        $dt_close= $db_close->format('Y-m-d\TH:i:s'); 
                                        echo $dt_close; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="stop_clock" class="col-sm-3 control-label">Stop Clock (menit)</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="stop_clock" name="stop_clock" value="<?php echo $lgangguannya['stop_clock']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="penyebab" class="col-sm-3 control-label">Penyebab</label>
                                    <div class="col-sm-5">
                                        <textarea id="penyebab" name="penyebab" rows="5" cols="50" maxlength="1000" required><?php echo $lgangguannya['penyebab'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="action" class="col-sm-3 control-label">Tindakan</label>
                                    <div class="col-sm-5">
                                        <textarea id="action" name="action" rows="5" cols="50" maxlength="1000" required><?php echo $lgangguannya['action'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="periode_bulan" class="col-sm-3 control-label">Periode Bulan</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="periode_bulan" id="periode_bulan" style="width: 100%;"required>
                                            <option value="<?php echo $lgangguannya['periode_bulan']; ?>" selected="selected"><?php echo $lgangguannya['periode_bulan']; ?></option>
                                            <option value=""> -- Pilih Bulan -- </option>
                                            <option value="Januari">Januari</option>
                                           <option value="Februari">Februari</option>
                                           <option value="Maret">Maret</option>
                                           <option value="April">April</option>
                                           <option value="Mei">Mei</option>
                                           <option value="Juni">Juni</option>
                                           <option value="Juli">Juli</option>
                                           <option value="Agustus">Agustus</option>
                                           <option value="September">September</option>
                                           <option value="Oktober">Oktober</option>
                                           <option value="November">November</option>
                                           <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="periode_tahun" class="col-sm-3 control-label">Periode Tahun</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="periode_tahun" id="periode_tahun" style="width: 100%;"required>
                                            <option value="<?php echo $lgangguannya['periode_tahun']; ?>" selected="selected"><?php echo $lgangguannya['periode_tahun']; ?></option>
                                            <option value=""> -- Pilih Tahun -- </option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin/lgangguan_view" class="btn btn-danger">Kembali</a>
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