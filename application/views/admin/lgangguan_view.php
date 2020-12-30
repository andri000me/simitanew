 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Log Gangguan
       <small>Manage Log Gangguan</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Log Gangguan</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Log Gangguan</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
             <table>
               <tbody>
                 <tr>
                   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/lgangguan_filter" enctype="multipart/form-data">
                     <td style="padding-right:10px; padding-top:10px">
                       <div class="form-group">
                         <input type="text" id="no_tiket" name="no_tiket" <?php if (!empty($no_tiket)) { ?> value="<?php echo $no_tiket ?>"/>
                       <?php } else { ?>
                         placeholder="Masukkan nomor tiket" value=""/>
                       <?php } ?>
                       </div>
                     </td>
                     <td style="padding-right:10px; padding-top:10px">
                       <div class="form-group">
                         <select class="form-control select2" name="year" id="year" style="width: 100%;">
                           <?php if (!empty($year)){ ?>
                             <option value="<?php echo $year; ?>" selected="selected"><?php echo $year; ?></option>
                             <option value=""> -- Pilih Tahun -- </option>
                           <?php } else { ?>
                             <option value=""> -- Pilih Tahun -- </option>
                           <?php } ?>
                           <option value="2021">2021</option>
                           <option value="2022">2022</option>
                           <option value="2023">2023</option>
                           <option value="2024">2024</option>
                           <option value="2025">2025</option>
                         </select>
                       </div>
                     </td>
                     <td style="padding-right:10px; padding-top:10px">
                       <div class="form-group">
                         <select class="form-control select2" name="month" id="month" style="width: 100%;">
                           <?php if (!empty($monthName) && !empty($month)) { ?>
                             <option value="<?php echo $month; ?>" selected="selected"><?php echo $monthName; ?></option>
                             <option value=""> -- Pilih Bulan -- </option>
                           <?php } else { ?>
                             <option value=""> -- Pilih Bulan -- </option>
                           <?php } ?>
                           <option value="01">Januari</option>
                           <option value="02">Februari</option>
                           <option value="03">Maret</option>
                           <option value="04">April</option>
                           <option value="05">Mei</option>
                           <option value="06">Juni</option>
                           <option value="07">Juli</option>
                           <option value="08">Agustus</option>
                           <option value="09">September</option>
                           <option value="10">Oktober</option>
                           <option value="11">November</option>
                           <option value="12">Desember</option>
                         </select>
                       </div>
                     </td>
                     <td><button type="submit" class="btn btn-sm btn-primary">Filter</button></td>
                     <td><a class="btn btn-sm btn-default" href="<?php echo base_url() . "admin/lgangguan_view" ?>">Reset</a></td>
                   </form>
                 </tr>
               </tbody>
             </table>
             <br />
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">No Tiket</th>
                   <th class="text-center">Nama Service</th>
                   <th class="text-center">SID</th>
                   <th class="text-center">Layanan</th>
                   <th class="text-center">Tiket Open</th>
                   <th class="text-center">Tiket Close</th>
                   <th class="text-center">Durasi</th>
                   <th class="text-center">Penyebab</th>
                   <th class="text-center">Tindakan</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                  $no = 1;
                  foreach ($lgangguan_view->result_array() as $data) :
                    $tiket_open = date("d/m/Y H:i:s", strtotime($data['tiket_open']));
                    $tiket_close = date("d/m/Y H:i:s", strtotime($data['tiket_close']));
                  ?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td><?= $data['no_tiket']; ?></td>
                     <td><?= $data['nama_service']; ?></td>
                     <td class="text-center"><?= $data['sid']; ?></td>
                     <td class="text-center"><?= $data['layanan']; ?></td>
                     <td class="text-center"><?= $tiket_open; ?></td>
                     <td class="text-center"><?= $tiket_close; ?></td>
                     <td class="text-center"><?= $data['durasi']; ?></td>
                     <td class="text-center"><?= $data['penyebab']; ?></td>
                     <td class="text-center"><?= $data['action']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $data['log_id']; ?>" href="<?php echo base_url() . "admin/lgangguan_edit?log_id=" . $data['log_id'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" value="<?php echo $data['log_id']; ?>" href="<?php echo base_url() . "admin/lgangguan_delete?log_id=" . $data['log_id'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
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
                 <a class="btn btn-primary" href="<?php echo site_url('admin/lgangguan_add'); ?>">Add Data</a>
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