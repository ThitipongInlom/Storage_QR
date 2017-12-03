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
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">เพิ่มเมนูสินค้า</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div align="center">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-additem">เพิ่มเมนูประเภทสินค้า</button>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">เมนูประเภทสินค้า</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="table_loadoverlay">
              <table id="typeitem" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID สินค้า</th>
                  <th>ชื่อสินค้า</th>
                </tr>
                </thead>
                <tbody >
                </tbody>
                <tfoot>
                <tr>
                  <th>ID สินค้า</th>
                  <th>ชื่อสินค้า</th>
                </tr>
                </tfoot>
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
<!-- model add-item -->
<div class="modal fade" id="modal-additem">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">กรอกเมนูประเภทที่ต้องการเพิ่ม</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="typeitem_data">เมนูประเภท</label>
                    <input type="text" name="typeitem_data" id="typeitem_data" class="form-control" placeholder="เมนูประเภท">
                  </div>  
                </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" id="dis" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" id="savetypeadd">บันทึก<i class="fa fa-refresh fa-spin fa-fw" id="savetype" style="margin-right: 2px;"></i></button>
              </div>
            </div>
          </div>
</div>
<!-- DataTables -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<!-- JS Addtype Load -->
<script type="text/javascript" src="<?php echo base_url().'/assets/js_modifly/addtype.js'; ?>"></script>
<script type="text/javascript">
var table;
$(document).ready(function() {
    table = $('#typeitem').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "responsive": true,
        "language": {
                "lengthMenu":"แสดง _MENU_ แถว",
                "search":"ค้นหา:",
                "info":"แสดง _START_ ถึง _END_ ทั้งหมด _TOTAL_ แถว",
                "infoEmpty":"แสดง 0 ถึง 0 ทั้งหมด 0 แถว",
                "infoFiltered":"(จาก ทั้งหมด _MAX_ ทั้งหมด แถว)",
                "processing": "กำลังโหลดข้อมูล...",
                "zeroRecords": "ไม่มีข้อมูล",
                "paginate": {
                      "first": "หน้าแรก",
                      "last": "หน้าสุดท้าย",
                      "next": "ต่อไป",
                      "previous": "ย้อนกลับ"
                  },
        },
        "order":[[1,'desc']],
        "aLengthMenu": [[ 5, 10, 25, -1], [ 5, 10, 25, "ทั้งหมด"]],
        "ajax": {
            "url": "<?php echo site_url('Addtype/Get_itemtype')?>",
            "type": "POST"
        },
        "columnDefs": [
        { 
            "targets": [ 0 ], 
            "orderable": false, 
        },
        ],
    });
});
</script>
</body>
</html>