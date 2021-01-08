 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Network
       <small>Manage Data Network</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Admin</a></li>
       <li class="active">Manage Data Network</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <?= $this->session->flashdata('pesan'); ?>

     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Data Network</h3>
           </div>
           <!-- /.box-header -->

           <div class="box-body">
            <table>
             <tbody>
               <tr>
                 <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/data_network_filter" enctype="multipart/form-data">
                   <td style="padding-right:10px; padding-top:10px">
                     <div class="form-group">
                      <select class="form-control select2" name="id_unit" id="id_unit" style="width: 100%;">
                        <?php if (!empty($filter_unit)){ 
                          foreach ($list_unit->result_array() as $data) { 
                            if ($data['id_unit'] == $filter_unit){ ?>
                              <option value="<?php echo $data['id_unit']; ?>" selected="selected"><?php echo $data['nama_unit']; ?></option>
                            <?php } } } ?>
                            <option value =""> -- Pilih Unit -- </option>
                            <?php foreach ($list_unit->result_array() as $data) { ?>
                             <option value="<?php echo $data['id_unit']; ?>"><?php echo $data['nama_unit']; ?></option>
                           <?php } ?>
                         </select>
                       </div>
                     </td>
                     <td><button type="submit" class="btn btn-sm btn-primary">Filter</button></td>
                     <td><a class="btn btn-sm btn-default" href="<?php echo base_url() . "admin/data_network_view" ?>">Reset</a></td>
                   </form>
                 </tr>
               </tbody>
             </table>
             <table id="example4" class="table table-bordered table-striped">
               <thead>
                 <tr>
                   <th class="center">No.</th>
                   <th class="text-center">Tanggal Aktivasi</th>
                   <th class="text-center">ID Service</th>
                   <th class="text-center">Service</th>
                   <th class="text-center">Asman</th>
                   <th class="text-center">Nama Unit</th>
                   <th class="text-center">Keterangan</th>
                   <th class="text-center">No. BA Aktivasi/ADM</th>
                   <th class="text-center">Scada/Non Scada</th>
                   <th class="text-center">Kapasitas /BW</th>
				           <th class="text-center">Harga</th>
				           <th class="text-center">Status</th>
				           <th class="text-center">Bulan</th>
				           <th class="text-center">Tahun</th>
                   <th class="text-center">Actions</th>
                 </tr>
               </thead>

               <tbody>
                 <?php
                 $no = 1;
                 foreach ($data_network_view->result_array() as $data) :?>
                   <tr>
                     <td class="text-center"><?= $no ?></td>
                     <td class="text-center"><?= $data['tanggal_aktivasi']; ?></td>
                     <td class="text-center"><?= $data['service_id']; ?></td>
                     <td class="text-center"><?= $data['service']; ?></td>
                     <td class="text-center"><?= $data['asman']; ?></td>
                     <td class="text-center"><?= $data['nama_unit']; ?></td>
                     <td class="text-center"><?= $data['keterangan']; ?></td>
                     <td class="text-center"><?= $data['no_aktivasi']; ?></td>
                     <td class="text-center"><?php if($data['scada'] == 1){
                        echo "Scada";
                     } else if($data['scada'] == 0) {
                        echo "Non Scada";
                     } ?></td>
                     <td class="text-center"><?= $data['kapasitas']; ?></td>
            				<?php
            				$harganya = "Rp " . number_format($data['harga'],2,',','.');
            				//echo $harganya; exit;
            				?>
                     <td class="text-center"><?=  $harganya; ?></td>
                     <td class="text-center"><?= $data['status']; ?></td>
                     <td class="text-center"><?= $data['bulan']; ?></td>
                     <td class="text-center"><?= $data['tahun']; ?></td>
                     <td class="text-center">
                       <div class="hidden-sm hidden-xs action-buttons">
                         <a class="green" value="<?php echo $data['data_id']; ?>" href="<?php echo base_url() . "admin/data_network_edit?data_id=" . $data['data_id'] ?>"><i class="fa fa-pencil bigger-130"></i></a>
                         &nbsp;
                         <a class="red" value="<?php echo $data['data_id']; ?>" href="<?php echo base_url() . "admin/data_network_delete?data_id=" . $data['data_id'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">
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
               <a class="btn btn-primary" href="<?php echo site_url('admin/data_network_add'); ?>">Add Data</a>
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