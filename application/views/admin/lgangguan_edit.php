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
                                        <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $lgangguannya['sid']; ?>" required />
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
                                            <option value="IPVPN">IPVPN</option>
                                            <option value="Metronet">Metronet</option>
                                            <option value="VSAT">VSAT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="status_log" class="col-sm-3 control-label">Status Tiket</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="status_log" id="status_log" style="width: 100%;" required>
                                            <option value="<?php echo $lgangguannya['status_log']; ?>" selected="selected"><?php echo $lgangguannya['status_log']; ?></option>
                                            <option value=""> -- Pilih Status -- </option>
                                            <option value="Open">Open</option>
                                            <option value="Closed">Closed</option>
                                        </select>
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