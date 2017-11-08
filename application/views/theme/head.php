<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
if (empty($this->session->user_id)) {
   redirect('', 'refresh');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/Ionicons/css/ionicons.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-purple fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('Home'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>QR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sorage</b> OF <b>QR</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gears"></i>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('Profile'); ?>">
                  <button type="button" class="btn btn-primary btn-flat btn-block" >โปรไฟล์</button>
                  </a>
                </div>
                <div class="pull-right">
                  <button type="button" class="btn btn-danger btn-flat btn-block" data-toggle="modal" data-target="#modal-default">ออกจากระบบ</button>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">เมนูหลัก</li>
        <li class="treeview <?php 
            if(
              $this->input->server('REQUEST_URI') == '/Home' ||
              $this->input->server('REQUEST_URI') == '/Profile'
            ){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-cog"></i> <span>ระบบ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php 
            if($this->input->server('REQUEST_URI') == '/Home') 
            {echo 'active';}?>"><a href="<?php echo site_url('Home'); ?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
          </ul>
        </li>
        <li class="treeview <?php 
            if(
              $this->input->server('REQUEST_URI') == '/Leave'
            ){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>สร้าง</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span></a>
          <ul class="treeview-menu">
            <li class="<?php 
            if($this->input->server('REQUEST_URI') == '/Generate') 
            {echo 'active';}?>"><a href="<?php echo site_url('Generate'); ?>"><i class="fa fa-file-o"></i> สร้าง QR Code</a></li>
          </ul>  
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->


<div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ยืนยันการออกจากระบบ</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left btn-flat" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-success btn-flat" id="logout">ยืนยัน <i class="fa fa-refresh fa-spin fa-fw" id="loginicon" style="margin-right: 2px;"></i> </button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery/dist/jquery.min.js'; ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/adminlte/dist/js/adminlte.min.js'; ?>"></script>
</body>
</html>