<?php
include("../library/class.mysqldb.php");
include("../library/config.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TMS - Sender Zone</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("header.inc.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
      <?php include("sidebar.inc.php"); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Main Control</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      
      
      
      
      
      <div class="box box-primary">
            <div class="box-body">
            
              <div class="col-lg-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>2</h3>
                    <p>Cars</p>
                  </div>
                  <div class="icon"> <i class="ion ion-android-car"></i> </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
              </div>
              
              <!-- ./col -->
        <div class="col-lg-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>4</h3>

              <p>Drivers</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Request</p>
            </div>
            <div class="icon">
              <i class="ion ion-archive"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
              
            </div>
      </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box --><!-- /.box (chat box) -->

          <!-- TO DO List -->
<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">History</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
              
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">ตีรถกลับ รถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 18:00</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">นำส่งสินค้า #P00015 ที่สมุทรสาครด้วยรถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 13:00</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">นำส่งสินค้า #P00014 ที่สมุทรสาครด้วยรถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 11:20</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">นำส่งสินค้า #P00013 ที่สมุทรสาครด้วยรถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 11:10</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">นำส่งสินค้า #P00012 ที่สมุทรสาครด้วยรถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 11:00</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">ออกนำส่งสินค้าด้วยรถทะเบียน 4กต-5555</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 10:00</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                <li>
                  <span>
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">นำสินค้าขึ้นรถ</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 1/01/2018 9:00</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
<!-- BOX -->
      
      
      
      
      
      
      
      
      
      
    </section>
  </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
