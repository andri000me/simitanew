<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Log Gangguan
            <small>Add Data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Admin</a></li>
            <li class="active">Add Log Gangguan</li>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_lgangguan_add" enctype="multipart/form-data">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Data</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="no_tiket" class="col-sm-3 control-label">Nomor Tiket</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="no_tiket" name="no_tiket" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="nama_service" class="col-sm-3 control-label">Nama Service</label>
                                    <div class="col-sm-5">
                                        <textarea id="nama_service" name="nama_service" rows="5" cols="50" maxlength="1000" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="sid" class="col-sm-3 control-label">SID</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="sid" name="sid" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="wilayah" class="col-sm-3 control-label">Wilayah</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="wilayah" id="wilayah" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Wilayah -- </option>
                                            <option value="STI Sumut 1">STI Sumut 1</option>
                                            <option value="STI Sumut 2">STI Sumut 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="layanan" class="col-sm-3 control-label">Layanan</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="layanan" id="layanan" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Layanan -- </option>
                                            <option value="IPVPN">IPVPN</option>
                                            <option value="Metronet">Metronet</option>
                                            <option value="VSAT">VSAT</option>
                                            <option value="Clear Channel">Clear Channel</option>
                                            <option value="Internet">Internet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="status_log" class="col-sm-3 control-label">Status Tiket</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="status_log" id="status_log" style="width: 100%;" required>
                                            <option selected="selected" value=""> -- Pilih Status -- </option>
                                            <option value="Open">Open</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="stop_clock" class="col-sm-3 control-label">Stop Clock (menit)</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" id="stop_clock" name="stop_clock" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="penyebab" class="col-sm-3 control-label">Penyebab</label>
                                    <div class="col-sm-5">
                                        <textarea id="penyebab" name="penyebab" rows="5" cols="50" maxlength="1000" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="action" class="col-sm-3 control-label">Action</label>
                                    <div class="col-sm-5">
                                        <textarea id="action" name="action" rows="5" cols="50" maxlength="1000" required></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-center">

                                <a href="<?php echo base_url(); ?>admin" class="btn btn-danger">Kembali</a>
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