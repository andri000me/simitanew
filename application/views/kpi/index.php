 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Key Performance Indikator(KPI)
       <small>Manage KPI</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">KPI</a></li>
       <li class="active">Manage KPI</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Key Performance Indicator (KPI)</h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">Indikator</th>
                   <th class="text-center">Satuan</th>
                   <th class="text-center">Bobot</th>
                   <th class="text-center">Target</th>
                   <th class="text-center">Realisasi</th>
                   <th class="text-center">Skor</th>
                   <th class="text-center">Waktu</th>
                   <th class="text-center">Keterangan</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                  $no = 1;
                  foreach ($kpi as $kpi) :
                  ?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td><?= $kpi['indikator_kpi']; ?></td>
                     <td class="text-center"><?= $kpi['satuan']; ?></td>
                     <td class="text-center"><?= $kpi['bobot']; ?></td>
                     <td class="text-center"><?= $kpi['target']; ?></td>
                     <td class="text-center"><?= $kpi['realisasi']; ?></td>
                     <td class="text-center"><?= $kpi['skor']; ?></td>
                     <td class="text-center"><?= $kpi['waktu']; ?></td>
                     <td class="text-center"><?= $kpi['keterangan']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" href="<?= base_url(); ?>kpi/editData/<?= $kpi['kpi_id']; ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" href="<?= base_url(); ?>kpi/deleteData/<?= $kpi['kpi_id']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
                           <i class="fa fa-trash-o bigger-130"></i>
                         </a>
                       </div>
                     </td>
                   </tr>
                 <?php
                    $no++;
                  endforeach;
                  ?>

               </tbody>

             </table>
             <div class="row">
               <div id="default-buttons" class="col-sm-6">
                 <a class="btn btn-primary" href="<?= base_url('kpi/addData'); ?>">Add Data</a>
               </div>
             </div>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->