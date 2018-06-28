<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");
if(isset($_POST["submit"])){
  $rs=mysql_fetch_object(mysql_query("select * from entrepreneur where Enter_user_ref='".$_SESSION["xuser_ref"]."'"));
  $id = $rs->Enter_id;
	$user_ref=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	mysql_query("INSERT INTO `driver` (
	`Driver_Id`, 
	`Driver_Name`, 
	`Driver_Lastname`, 
	`Driver_Nickname`, 
	`Driver_Birthday`, 
	`Driver_License`, 
	`Driver_Allowed`, 
	`Driver_Expired`, 
	`Driver_Startwork`, 
	`Enter_Id` 
	) VALUES (
	NULL, 
	'".$_POST["Driver_Name"]."', 
	'".$_POST["Driver_Lastname"]."', 
	'".$_POST["Driver_Nickname"]."', 
	'".$_POST["Driver_Birthday"]."', 
	'".$_POST["Driver_License"]."', 
	'".$_POST["Driver_Allowed"]."', 
	'".$_POST["Driver_Expired"]."', 
  '".$_POST["Driver_Startwork"]."', 
  $id
	);");
	header("location:index.php");
}
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TMS - Entrepreneur Zone</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="entrepreneur/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="entrepreneur/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="entrepreneur/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="entrepreneur/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="entrepreneur/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="entrepreneur/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="entrepreneur/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="entrepreneur/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- <style>
table, th, td {
    border: 1px solid black;
    padding: 5px;
}
table {
    border-spacing: 15px;
}
input {
    width: 50%;
}
</style> -->
  </head>

  <body class="hold-transition skin-blue sidebar-mini" style="font-family: 'Kanit', sans-serif;">
    <div class="wrapper">

      <?php include("header.inc.php"); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <div class="user-panel" <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
        <div class="pull-left info">
          <p><?php $rs=mysql_fetch_object(mysql_query("select * from sender where sen_user_ref='".$_SESSION["xuser_ref"]."'")); echo $rs->sen_name; ?></p>
          <li><i class="fa fa-circle text-success"></i> Online</li>
        </div>
        <br><br>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>></li>
        <!-- <li class="header">MAIN NAVIGATION</li> -->

        <li>
          <a href="sender/home.php">
            <i class="fa fa-desktop"></i> 
            <span>หน้าหลัก</span>
          </a>
        </li>
        <li>
          <a href="sender/logistic.php">
            <i class="fa fa-truck"></i>
            <span>ข้อมูลโลจิสติกส์</span>
          </a>
        </li>
        <li>
        </li>
        <li>
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-list"></i>&nbsp;&nbsp;บริการ</a>
          <ul class="collapse" id="homeSubmenu">
          <!-- <li  data-toggle="collapse" data-target="#products" class="collapsed active">
            <a href="#"><i class="glyphicon glyphicon-tasks"></i><span>&nbsp;จัดการการขนส่ง</span></a>
          </li>
            <ul class="sub-menu collapse" id="products">
              <li><a href="createTask.php">สร้างใบงาน</a></li>
              <li><a href="createOrdersPaid.php">ออกใบสั่งจ้าง</a></li>
              <li><a href="checkDelivery.php">ตรวจสอบข้อมูลการส่งสินค้า</a></li>
              <li><a href="request.php">ร้องขอผู้ส่ง</a></li>
            </ul> -->
            <li><a href="/logistics/register_driver.php"><i class="fa fa-rocket"></i><span>&nbsp;&nbsp;เพิ่มข้อมูลคนขับ</span></a></li>
            <li><a href="/logistics/register_car.php"><i class="fa fa-tint"></i><span>&nbsp;&nbsp;เพิ่มข้อมูลรถ</span></a></li>
            <!-- <li><a href="managementAccounting.php"><i class="fa fa-user"></i><span>&nbsp;&nbsp;จัดการทางบัญชี</span></a></li>
            <li><a href="checkPayments.php"><i class="fa fa-dollar"></i><span>&nbsp;&nbsp;ตรวจสอบการชำระเงิน</span></a></li>
            <li><a href="message.php"><i class="fa fa-comments"></i><span>&nbsp;&nbsp;จัดส่งข้อความ</span></a></li>
            <li><a href="statistic.php"><i class="fa fa-bar-chart"></i><span>&nbsp;&nbsp;สถิติ</span></a></li>
            <li><a href="report.php"><i class="fa fa-rocket"></i><span>&nbsp;&nbsp;พิมพ์รายงาน</span></a></li> -->
          </ul>
          </li>
        
        <li>
          <a href="sender/news.php">
            <i class="fa fa-bullhorn"></i> 
            <span>ข่าวสารและกิจกรรม</span>
          </a>
        </li>

        <li>
          <a href="sender/contact.php">
            <i class="fa fa-paper-plane"></i> 
            <span>ติดต่อเรา</span>
          </a>
        </li>
        <li <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
          <a href="sender/logout.php">
            <i class="fa fa-sign-out"></i> 
            <span>ออกจากระบบ</span>
          </a>
        </li>
        <li <?php if(isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
              <a href="../login.php">
                <i class="fa fa-user"></i>
                <span>เข้าสู่ระบบ
                </span>
              </a>
            </li>

            <li <?php if(isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
              <a href="../register_all.php">
                <i class="fa fa-user"></i>
                <span>สมัครสมาชิก
                </span>
              </a>
            </li>
      </ul>
    </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Register Driver</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">
            <form action="" method="get">
              <div class="table-responsive">
                  <h3 style="margin-bottom: 20px;">&nbsp;เพิ่มข้อมูลคนขับ</h3>
                  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                      <div class="offset-sm-2 col-sm-10">
                      <label for="example-password-input" class="col-2 col-form-label">ชื่อ:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="text" id="example-Name-input" placeholder="Name" name="Driver_Name" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">นามสกุล:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="text" id="example-Lastname-input" placeholder="Surname" name="Driver_Lastname" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">ชื่อเล่น:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="text" id="example-Driver_Nickname-input" placeholder="Nickname" name="Driver_Nickname" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">วัน/เดือน/ปี เกิด:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="date" id="example-birthday-input" name="Driver_Birthday" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">ใบขับขี่:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="text" id="example-Driver-License" placeholder="Driver License" name="Driver_License" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">วันออกใบอนุญาตขับขี่:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="date" id="example-driver_allowed-input" placeholder="Driver Allowed" name="Driver_Allowed" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">วันหมดอายุใบขับขี่:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="date" id="example-driver_exp-input" placeholder="Driver Expired" name="Driver_Expired" required>
                      </div>
                      <div class="offset-sm-2 col-sm-10">
                      <br><label for="example-password-input" class="col-2 col-form-label">วันเริ่มทำงาน:</label>
                        <input style="width: 120%;" class="form-control form-control-lg" type="date" id="example-start_work-input" placeholder="Driver Startwork" name="Driver_Startwork">
                      </div>
                      <center>
                      <div class="offset-sm-2 col-sm-10">
                        <br><button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">Register</button>
                      </div>
                      </center>
                </form>
              </div>

            </form>
          </div>
        </section>
      </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3.1.1 -->
    <script src="entrepreneur/plugins/jQuery/jquery-3.1.1.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="entrepreneur/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="entrepreneur/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="entrepreneur/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="entrepreneur/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="entrepreneur/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="entrepreneur/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="entrepreneur/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="entrepreneur/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="entrepreneur/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="entrepreneur/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="entrepreneur/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="entrepreneur/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="entrepreneur/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="entrepreneur/dist/js/demo.js"></script>
  </body>

  </html>