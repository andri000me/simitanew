 <div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Key Performance Indicator(KPI)
       <small>Add Data</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">KPI</a></li>
       <li class="active">Add Data</li>
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
           <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>kpi/action_kpi_add" enctype="multipart/form-data">

             <div class="box-header with-border">
               <h3 class="box-title">Add Data</h3>
             </div>
             <div class="box-body">
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="indikator_kpi" class="col-sm-3 control-label">Indikator KPI</label>
                   <div class="col-sm-5">
                     <input type="text" class="form-control" id="indikator_kpi" name="indikator_kpi" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="pic" class="col-sm-3 control-label">PIC</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" name="pic" style="width: 100%;" required>
                       <option selected="selected" value=""> -- Pilih Pegawai -- </option>
                       <?php foreach ($list_pegawai->result_array() as $data) { ?>
                         <option value="<?php echo $data['pegawai_id']; ?>"><?php echo $data['nama']; ?></option>
                       <?php
                        }
                        ?>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" name="satuan" style="width: 100%;" required>
                       <option selected="selected" value=""> -- Pilih Satuan -- </option>
                         <option value="%">%</option>
                         <option value="Unit">Unit</option>
                         <option value="Dokumen">Dokumen</option>
                         <option value="Level">Level</option>
                         <option value="Skor">Skor</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="bobot" class="col-sm-3 control-label">Bobot</label>
                   <div class="col-sm-5">
                     <input type="number" class="form-control" id="bobot" name="bobot" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="target" class="col-sm-3 control-label">Target</label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="target" name="target" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="realisasi" class="col-sm-3 control-label">Realisasi</label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="realisasi" name="realisasi" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="skor" class="col-sm-3 control-label">Skor </label>
                   <div class="col-sm-5">
                     <input type="number" step="0.0001" class="form-control" id="skor" name="skor" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="waktu" class="col-sm-3 control-label">Waktu Penilaian KPI</label>
                   <div class="col-sm-5">
                     <input type="date" class="form-control" id="waktu" name="waktu" required />
                   </div>
                 </div>
               </div>
               <div class="col-lg-10">
                 <div class="form-group">
                   <label for="status" class="col-sm-3 control-label">Status</label>
                   <div class="col-sm-5">
                     <select class="form-control select2" name="status" id="status" style="width: 100%;" required>
                       <option selected="selected" value=""> -- Pilih Status -- </option>
                       <option value="Open">Open</option>
                       <option value="Closed">Closed</option>
                     </select>
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