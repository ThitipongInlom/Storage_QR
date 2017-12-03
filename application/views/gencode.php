<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <title>GenItem</title>
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
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/adminlte/bower_components/select2/dist/css/select2.min.css';?>">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- QR Code CAMARA  -->
  <script src="<?php echo base_url().'/assets/camara/result.js'; ?>"></script>
  <script src="<?php echo base_url().'/assets/camara/instascan.min.js'; ?>"></script>
</head>
<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        เพิ่มสินค้าเข้าสต้อก
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Home'); ?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
        <li><a href="<?php echo site_url('GenItem'); ?>"><i class="fa fa-plus-circle"></i> เพิ่มสินค้า</a></li>
      </ol>
    </section>
    <!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">เพิ่มสินค้า</h3>
            </div>
            <div class="box-body">
              <div align="center">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-additem">
                เพิ่มสินค้าแบบเดี่ยว
              </button>
              </div>
            </div>
          </div>
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">ค้นหาสินค้า QR Code</h3>
            </div>
            <div class="box-body">
              <div align="center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-qrcode" id="qrcodeopen">
                QR Code
              </button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-md-9 col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">สินค้าใหม่ทั้งหมด</h3>
            </div>
            <div class="box-body" id="gropitemtable">
             <table id="gropitem" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID สินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th>Macสินค้า</th>
                  <th>QRCode</th>
                </tr>
                </thead>
                <tbody id="gropitemtb">
                </tbody>
                <tfoot>
                <tr>
                  <th>ID สินค้า</th>
                  <th>ชื่อสินค้า</th>
                  <th>Macสินค้า</th>
                  <th>QRCode</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <div class="overlay" id="loadoverlaytable">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
                <h4 class="modal-title">กรอกข้อมูลสินค้าเข้าสต้อกแบบเดี่ยว</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                    <div class="col-md-6 col-xs-6">  
                    <div class="form-group">
                      <label for="nameitem">ชื่อสินค้า</label>
                      <input type="text" class="form-control" id="nameitem" placeholder="ชื่อสินค้า">
                    </div>
                    <div class="form-group">
                      <label for="nameitem">ชื่อสินค้า</label>
                      <input type="text" class="form-control" id="nameitem2" placeholder="ชื่อสินค้า">
                    </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                      <label for="macitem">Mac</label>
                      <input type="text" class="form-control" id="macitem" placeholder="Mac">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" id="dis" data-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn btn-primary" id="saveiteamadd">บันทึก<i class="fa fa-refresh fa-spin fa-fw" id="saveitem" style="margin-right: 2px;"></i></button>
              </div>
            </div>
          </div>
</div>

<!-- model QR-Code -->
<div class="modal fade" id="modal-qrcode">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">QR Code Scan <i class="fa  fa-video-camera" style="padding-left: 2px;"></i></h4>
              </div>
              <div class="modal-body">
                <div class="box box-primary box-solid">
                  <div class="box-header with-border">
                    <h4 style="color: black;">Camera QR Code <i class="fa fa-refresh fa-spin fa-fw" style="margin-right: 2px;"></i></h4>
                  </div>
                  <div class="box-body" >
                    <div class="embed-responsive embed-responsive-16by9">
                    <video id="preview" ></video>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" id="dis" data-dismiss="modal" id="close_qrcode">ยกเลิก</button>
              </div>
            </div>
          </div>
</div>
<!-- JS QRCode  -->
<script src="<?php echo base_url().'/assets/js_modifly/qrcode.js'; ?>"></script>
<!-- JS Additem -->
<script src="<?php echo base_url().'/assets/js_modifly/additem.js'; ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" ></script>
<!-- Select2 -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/select2/dist/js/select2.full.min.js';?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'/assets/adminlte/bower_components/fastclick/lib/fastclick.js'; ?>"></script>
<script type="text/javascript">
var table;
$(document).ready(function() {
    table = $('#gropitem').DataTable({ 
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
        "aLengthMenu": [[3, 5, 10, 25, -1], [3, 5, 10, 25, "All"]],
        "ajax": {
            "url": "<?php echo site_url('Gencode/ajaxgetitem_all')?>",
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