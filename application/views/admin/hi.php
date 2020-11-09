 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Health Index
        <small>Network Devices</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Health Index</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Health Index Per Unit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-hover">
                <thead>
                <tr>
                  <th class="center" style="width:20px">No.</th>
                  <th>Unit</th>
                  <th>Health Index</th>
                  <th>Percentage</th>
                  <th>Last Updated</th>
                </tr>
                </thead>
                <?php 
                $no =1;
                ?>
                <tbody>
				        <?php foreach ($hi->result_array() as $data) { ?>
                <tr>
                  <td class="center">
                      <?php echo $no; ?>
                  </td>
                  <td>
                    <strong><a style="cursor:pointer" href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>"><?php echo $data['nama_unitnya']; ?></a></strong>
                  </td>
                  <td>
                    <div class="progress progress-sm progress-striped active" style="width:80%">
                        <div class="progress-bar progress-bar-<?php if($data['total_hi'] <= '100' && $data['total_hi'] >='70'){ echo 'success';} 
                    elseif($data['total_hi'] <= '70' && $data['total_hi'] >='30'){ echo 'yellow';} else { echo 'danger';}?>" style="width: <?php echo $data['total_hi']; ?>%"></div>
                    </div>
                  </td>
				          <td style="width:30px">
                    <span class="badge bg-<?php if($data['total_hi'] <= '100' && $data['total_hi'] >='70'){ echo 'green';} 
                    elseif($data['total_hi'] <= '70' && $data['total_hi'] >='30'){ echo 'yellow';} else { echo 'red';}?>">
                    <?php echo $data['total_hi']; ?> % </span>
				          </td>
				          <td>
                    <?php echo date('d F Y H:i:s', strtotime($data['updated_at']));?>
				          </td>
                </tr>
                <?php 
                  $no++;
                  }
                ?>
                </tbody>
              </table>
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
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Unrated Unit <small> (Unit yang belum dinilai)</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-hover">
                <thead>
                <tr>
                  <th class="center" style="width:20px">No.</th>
                  <th>Unit</th>
                </tr>
                </thead>
                <?php 
                $no =1;
                ?>
                <tbody>
				        <?php foreach ($non_hi->result_array() as $data) { ?>
                <tr>
                  <td class="center">
                      <?php echo $no; ?>
                  </td>
                  <td>
                    <strong><a style="cursor:pointer" href="<?php echo base_url() . "admin/hi_view?id_unit=".$data['id_unit']?>"><?php echo $data['nama_unitnya']; ?></a></strong>
                  </td>
                </tr>
                <?php 
                  $no++;
                  }
                ?>
                </tbody>
              </table>
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
  
  