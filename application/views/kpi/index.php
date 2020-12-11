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
                   <th class="text-center">PIC</th>
                   <th class="text-center">Satuan</th>
                   <th class="text-center">Bobot</th>
                   <th class="text-center">Target</th>
                   <th class="text-center">Realisasi</th>
                   <th class="text-center">Skor</th>
                   <th class="text-center">Waktu</th>
                   <th class="text-center">Status</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                  $no = 1;
                  foreach ($kpi->result_array() as $data) :
                  ?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td><?= $data['indikator_kpi']; ?></td>
                     <td><?= $data['nama_pj']; ?></td>
                     <td class="text-center"><?= $data['satuan']; ?></td>
                     <td class="text-center"><?= $data['bobot']; ?></td>
                     <td class="text-center"><?= $data['target']; ?></td>
                     <td class="text-center"><?= $data['realisasi']; ?></td>
                     <td class="text-center"><?= $data['skor']; ?></td>
                     <td class="text-center"><?= $data['waktu']; ?></td>
                     <td class="text-center"><?= $data['status']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $data['kpi_id']; ?>" href="<?php echo base_url() . "kpi/kpi_edit?kpi_id=".$data['kpi_id']?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" href="<?= base_url(); ?>kpi/deleteData/<?= $data['kpi_id']; ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
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
                 <a class="btn btn-primary" href="<?php echo site_url('kpi/kpi_add'); ?>">Add Data</a>
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