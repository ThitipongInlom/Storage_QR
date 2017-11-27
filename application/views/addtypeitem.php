<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <title>เพิ่มเมนูประเภทสินค้า</title>
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
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/morris.js/morris.css';?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        เมนูประเภทสินค้า 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Home'); ?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('AddType'); ?>"><i class="fa fa-plus"></i> เพิ่มประเภทสินค้า</a></li>
      </ol>
    </section>
    <!-- Main content -->
<section class="content">   
       <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">เมนูประเภทสินค้า</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="table_loadoverlay">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>ชื่อประเภทสินค้า</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                </tr>
              </table>
            </div>  
              <div class="overlay" id="loadoverlaytable">
              <i class="fa fa-refresh fa-spin"></i>
              </div>
          </div>
        </div>
       </div>  
    </section>
  <!-- /.content-wrapper -->
  </div>
<!-- DataTables -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<!-- JS Alert Load -->
<script type="text/javascript" src="<?php echo base_url().'/assets/js_modifly/alert_load.js'; ?>"></script>

</body>
</html>