 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="<?php echo site_url('admin/hi'); ?>">Health Index</a></li>
        <li class="active">Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php foreach ($detail_hi->result_array() as $data) { ?>
              <h3 class="box-title">Health Index <strong> <?php echo $data['nama_unitnya']; ?></strong></h3>
              <?php break; } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover">
                <thead>
                <tr>
                  <th>Action</th>
                  <th>Device Type</th>
                  <th>Kondisi</th>
                  <th>Port</th>
                  <th>Urgensi</th>
                  <th>Memenuhi Standard</th>
                  <th>Umur > 5 Tahun</th>
                  <th>Gangguan > 3 Kali</th>
                  <th>Health Index</th>
                  <th>Last Updated</th>
                </tr>
                </thead>
                <tbody style="cursor:default">
				        <?php foreach ($detail_hi->result_array() as $data) { ?>
                <tr>
                    <td class="center">
                        <input type="hidden" name="id_hi" value="<?php echo $data['id_hi']; ?>">
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a class="green" value="<?php echo $data['id_hi']; ?>" href="<?php echo base_url() . "admin/hi_edit?id_hi=".$data['id_hi']."&id_unit=".$data['id_unit']?>"><i class="fa fa-pencil bigger-130"></i></a>
                            &nbsp;
                            <a class="red" value="<?php echo $data['id_hi']; ?>"  href="<?php echo base_url() . "admin/hi_delete?id_hi=".$data['id_hi']."&id_network_device=".$data['id_network_device']."&id_unit=".$data['id_unit']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');"  ><i class="fa fa-trash-o bigger-130"></i></a>
                        </div>
                    </td>
                  <td>
                        <strong><?php echo $data['device_type']; ?></strong> <?php echo $data['merek'] ?>
                  </td>
                  <td>
                        <?php if($data['bobot_kondisi'] != '0') {
                            echo '<span class="badge bg-green" data-toggle="tooltip" title="bobot : '.$data['bobot_kondisi'].'"><i class= "fa fa-check"></i> Aktif </span>';
                        } else {
                            echo '<span class="badge bg-red" data-toggle="tooltip" title="bobot : '.$data['bobot_kondisi'].'"><i class= "fa fa-close"></i> Tidak Aktif </span>';
                        }?>
                  </td>
				          <td>
                        <?php if($data['device_type'] == 'Router'){
                            echo '<span data-toggle="tooltip" title="bobot : '.$data['bobot_port'].'">8 Port</span>';
                        } elseif($data['device_type'] == 'Switch'){
                            echo '<span data-toggle="tooltip" title="bobot : '.$data['bobot_port'].'">16 Port</span>';
                        } elseif($data['device_type'] == 'Access Point'){
                            echo '<span data-toggle="tooltip" title="bobot : '.$data['bobot_port'].'">1 Port</span>';
                        }?>
                   </td>
                   <td>
                        <?php if($data['device_type'] == 'Router'){
                            echo '<span style="color:yellow" data-toggle="tooltip" title="bobot : '.$data['bobot_urgensi'].'"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
                        } elseif($data['device_type'] == 'Switch'){
                            echo '<span style="color:yellow" data-toggle="tooltip" title="bobot : '.$data['bobot_urgensi'].'"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
                        } elseif($data['device_type'] == 'Access Point'){
                            echo '<span style="color:yellow" data-toggle="tooltip" title="bobot : '.$data['bobot_urgensi'].'"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>';
                        } 
                        ?>
                   </td>
                   <td>
                        <?php if($data['bobot_standard'] == '0'){
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_standard'].'">Ya</span>';
                        } else {
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_standard'].'">Tidak</span>';
                        }?>
                   </td>
                   <td>
                        <?php if($data['bobot_lifetime'] != '0'){
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_lifetime'].'">Ya</span>';
                        } else {
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_lifetime'].'">Tidak</span>';
                        } ?>
                   </td>
                   <td>
                        <?php if($data['bobot_gangguan'] != '0'){
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_gangguan'].'">Ya</span>';
                        } else {
                            echo '<span <span data-toggle="tooltip" title="bobot : '.$data['bobot_gangguan'].'">Tidak</span>';;
                        } ?>
				   </td>
                   <td>
                        <span class="badge bg-<?php if($data['hi_device'] <= '100' && $data['hi_device'] >='70'){ echo 'green';} 
                    elseif($data['hi_device'] <= '70' && $data['hi_device'] >='30'){ echo 'yellow';} else { echo 'red';}?>"><?php echo $data['hi_device']; ?> %</span>
                   </td>
                   <td>
                        <?php echo date('d F Y H:i:s', strtotime($data['updated_at']));
                         ?>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
				

              </table>
                <div class="row">
                    <div id="default-buttons" class="col-sm-6">
                    <a href="<?php echo site_url('admin/hi'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>&nbsp Back</a>
                    <?php foreach ($list_unit->result_array() as $data) { ?>
                    <a class="btn btn-primary" href="<?php echo base_url() . "admin/hi_add?id_unit=".$data['id_unit']?>"><i class="fa fa-plus-square"></i>  &nbsp Add Health Index Device</a>
                    <?php break; } ?>
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