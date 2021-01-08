<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/Logo_PLN.png"/>
  <title>SIMITA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/select2/dist/css/select2.min.css">

  
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
     tbody{
       font-weight:normal;
     }
	 
	 /* CSS for Zebra Table in index.html */
.zebra-table {
width: 100%;
border-collapse: collapse;
box-shadow: 0 2px 3px 1px #ddd;
overflow: hidden;
border:10px solid #fff;
}
.zebra-table th,.zebra-table td{
vertical-align: top;
padding:10px 7px;
text-align: center;
margin:0;
}
.zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
background:#eee;
}/* End CSS for Zebra Table in index.html */
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIMITA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>public/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php if($this->session->userdata('role') == 1) { ?>
                <span class="hidden-xs">Admin SIMITA</span>
              <?php } else if($this->session->userdata('role') == 2) { ?>
                <span class="hidden-xs">EOS ICON+ SIMITA</span>
              <?php } else if($this->session->userdata('role') == 3) { ?>
                <span class="hidden-xs">IT Support SIMITA</span>
              <?php } else if($this->session->userdata('role') == 4) { ?>
                <span class="hidden-xs">Pegawai STI SIMITA</span>
              <?php } ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php if($this->session->userdata('role') == 1) { ?>
                    Administrator SIMITA
                  <?php } else if($this->session->userdata('role') == 2) { ?>
                    EOS ICON+ SIMITA
                  <?php } else if($this->session->userdata('role') == 3) { ?>
                    IT Support SIMITA
                  <?php } else if($this->session->userdata('role') == 4) { ?>
                    Pegawai STI SIMITA
                  <?php } ?>
                  <small>PLN STI SUMUT</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>