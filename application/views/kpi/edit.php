 <div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Key Performance Indicator(KPI)
       <small>Edit Data</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">KPI</a></li>
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
             <input type="hidden" name="kpi_id" value="<?= $kpi['kpi_id']; ?>">

             <div class="box-header with-border">
               <h3 class="box-title">Edit Data</h3>
             </div>
             <div class="box-body">
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="indikator_kpi" class="col-sm-3 control-label">Indikator KPI</label>
                   <div class="col-sm-5">
                     <input type="text" class="form-control" id="indikator_kpi" name="indikator_kpi" required value="<?= $kpi['indikator_kpi']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                   <div class="col-sm-5">
                     <input type="text" class="form-control" id="satuan" name="satuan" required value="<?= $kpi['satuan']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="bobot" class="col-sm-3 control-label">Bobot</label>
                   <div class="col-sm-5">
                     <input type="number" class="form-control" id="bobot" name="bobot" required value="<?= $kpi['bobot']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="target" class="col-sm-3 control-label">Target</label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="target" name="target" required value="<?= $kpi['target']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="realisasi" class="col-sm-3 control-label">Realisasi</label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="realisasi" name="realisasi" required value="<?= $kpi['realisasi']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="skor" class="col-sm-3 control-label">Skor</label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="skor" name="skor" required value="<?= $kpi['skor']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="waktu" class="col-sm-3 control-label">Waktu Penilaian KPI</label>
                   <div class="col-sm-5">
                     <input type="date" class="form-control" id="waktu" name="waktu" required value="<?= $kpi['waktu']; ?>" />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                   <div class="col-sm-5">
                     <input type="text" class="form-control" id="keterangan" name="keterangan" required value="<?= $kpi['keterangan']; ?>" />
                   </div>
                 </div>
               </div>



             </div>
             <!-- /.box-body -->
             <div class="box-footer">
               <div class="pull-center">

                 <a href="<?php echo base_url(); ?>kpi" class="btn btn-danger">Kembali</a>
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