<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");

if(isset($_POST["submit"])){
	$rs=mysql_fetch_object(mysql_query("select * from login where log_user='".$_POST["user"]."' and log_passwd='".$_POST["passwd"]."'"));
 
  if($rs->log_user != "") {
		$_SESSION["xuser"]=$rs->log_user;
    $_SESSION["xuser_ref"]=$rs->log_user_ref;
    $_SESSION['logged'] = true;
		
		if($rs->log_user_type == "entrepreneur") { header("location:entrepreneur/index.php"); }
		if($rs->log_user_type == "sender") { header("location:sender/index.php"); }
	}
}


?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TMS - Transport Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-3.1.1.slim.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
      .selector-for-some-widget {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
      }
    </style>

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

    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->


  </head>


  <body class="hold-transition skin-blue sidebar-mini" style="font: 'Kanit', sans-serif;">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <strong>Entrepreneur</strong> Zone</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="padding:0;">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="width:40px;">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>


      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <ul class="sidebar-menu" data-widget="tree">
            
            <li>
              <a href="entrepreneur/home.php">
                <i class="fa fa-desktop"></i>
                <span>หน้าหลัก</span>
              </a>
            </li>

            <li>
              <a href="entrepreneur/logistic.php">
                <i class="fa fa-truck"></i>
                <span>ข้อมูลโลจิสติกส์</span>
              </a>
            </li>
            <li>
            </li>
            <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fa fa-list"></i>&nbsp;&nbsp;บริการ</a>
              <ul class="collapse" id="homeSubmenu">
                <li data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#">
                    <i class="glyphicon glyphicon-tasks"></i>
                    <span>&nbsp;จัดการการขนส่ง</span>
                  </a>
                </li>
                <ul class="sub-menu collapse" id="products">
                  <li>
                    <a href="entrepreneur/createTask.php">สร้างใบงาน</a>
                  </li>
                  <li>
                    <a href="entrepreneur/createOrdersPaid.php">ออกใบสั่งจ้าง</a>
                  </li>
                  <li>
                    <a href="entrepreneur/checkDelivery.php">ตรวจสอบข้อมูลการส่งสินค้า</a>
                  </li>
                </ul>
                <li>
                  <a href="entrepreneur/route.php">
                    <i class="fa fa-rocket"></i>
                    <span>&nbsp;&nbsp;จัดการเส้นทาง</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/fuelResources.php">
                    <i class="fa fa-tint"></i>
                    <span>&nbsp;&nbsp;จัดการทรัพยากรเชื้อเพลิง</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/managementAccounting.php">
                    <i class="fa fa-user"></i>
                    <span>&nbsp;&nbsp;จัดการทางบัญชี</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/checkPayments.php">
                    <i class="fa fa-dollar"></i>
                    <span>&nbsp;&nbsp;ตรวจสอบการชำระเงิน</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/message.php">
                    <i class="fa fa-comments"></i>
                    <span>&nbsp;&nbsp;จัดส่งข้อความ</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/statistic.php">
                    <i class="fa fa-bar-chart"></i>
                    <span>&nbsp;&nbsp;สถิติ</span>
                  </a>
                </li>
                <li>
                  <a href="entrepreneur/report.php">
                    <i class="fa fa-rocket"></i>
                    <span>&nbsp;&nbsp;พิมพ์รายงาน</span>
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a href="entrepreneur/news.php">
                <i class="fa fa-bullhorn"></i>
                <span>ข่าวสารและกิจกรรม</span>
              </a>
            </li>

            <li>
              <a href="entrepreneur/contact.php">
                <i class="fa fa-paper-plane"></i>
                <span>ติดต่อเรา</span>
              </a>
            </li>

            <li>
              <a href="login.php">
                <i class="fa fa-user"></i>
                <span>เข้าสู่ระบบ
                </span>
              </a>
            </li>

            <li>
              <a href="register_all.php">
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
          <h1>
            เข้าสู่ระบบ</h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="box box-primary">
            <div class="box-body">

                    <div class="container"></div>
          <h1 class="display-3">Please Login.</h1>
          <p class="lead">This is a Login Form to Enter the Entrepreneur Zone.</p>
          <p class="lead">
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Username:</label>
                <div class="col-10">
                  <input class="form-control form-control-lg" type="text" id="example-text-input" placeholder="Username" name="user">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-password-input" class="col-2 col-form-label">Password:</label>
                <div class="col-10">
                  <input class="form-control form-control-lg" type="password" id="example-password-input" placeholder="Password" name="passwd">
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">Sign in</button>
                </div>
              </div>
            </form>
          </p>
        </div>
      </div>

            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <!-- /.box (chat box) -->

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