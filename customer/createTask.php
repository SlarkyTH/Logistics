<?php
include("../library/class.mysqldb.php");
include("../library/config.inc.php");
?>
<?php
session_start();
if(!isset($_SESSION['logged'])) header("location: /logistics/login.php");

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
        <?php include("sidebar.inc.php"); ?>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Create Task</h1>
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
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2" style="border-bottom:none;">

                        <h3 style="margin-bottom: 30px;">สร้างใบงาน</h3>

                      </th>
                      <td align="right">
                        <?php $result = mysql_query("SELECT * FROM entrepreneur where Enter_user_ref='".$_SESSION["xuser_ref"]."'");
                      while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
                      ?>
                        <li>
                          <span class="text">
                            <?php printf ("<b>รหัสผู้ประกอบการ</b>:  %s <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ</b>:  %s", $row[0], $row["Enter_Name"]);?>
                          </span>
                          <?php
                        }
                        mysql_free_result($result);?>
                        </li>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <table class="table">
                      <tr>
                        <th colspan="3">
                          <center>
                            <h3>ข้อมูลสินค้า</h3>
                          </center>
                        </th>
                      </tr>
                      <tr>
                        <th colspan="2">สินค้าประเภทกล่อง</th>
                        <th>สินค้าประเภทกระสอบ</th>
                      </tr>
                      <tr>
                        <td colspan="2">จำนวน
                          <input type="text" name="fname"> กล่อง</td>
                        <td>จำนวน
                          <input type="text" name="fname"> กล่อง</td>
                      </tr>
                      <tr>
                        <td colspan="2">น้ำหนัก
                          <input type="text" name="fname"> ก.ก.</td>
                        <td>น้ำหนัก
                          <input type="text" name="fname"> ก.ก.</td>
                      </tr>
                    </table>
                    <table class="table">
                      <tr>
                        <th colspan="3">
                          <center>
                            <h3>สินค้าอื่นๆ</h3>
                          </center>
                        </th>
                      </tr>
                      <tr>
                        <td>จำนวน
                          <input type="text" name="fname"> กล่อง</td>
                        <td>น้ำหนัก
                          <input type="text" name="fname"> กล่อง</td>
                        <td>หน่วย
                          <input type="text" name="fname"></td>
                      </tr>
                    </table>
                    <br>
                    <table class="table">
                      <tr>
                        <th colspan="4">
                          <center>
                            <h3>ข้อมูลการขนส่ง</h3>
                          </center>
                        </th>
                      </tr>
                      <tr>
                        <th colspan="2">ต้นทาง</th>
                        <th colspan="2">ปลายทาง</th>
                      </tr>
                      <tr>
                        <td>ชื่อผู้ส่ง/ชื่อบริษัท</td>
                        <td>
                          <input type="text" name="fname">
                        </td>
                        <td>ชื่อผู้ส่ง/ชื่อบริษัท</td>
                        <td>
                          <input type="text" name="fname">
                        </td>
                      </tr>
                      <tr>
                        <td>ตำบล/แขวง</td>
                        <td>
                          <input type="text" name="fname">
                        </td>
                        <td>ตำบล/แขวง</td>
                        <td>
                          <input type="text" name="fname">
                        </td>
                      </tr>
                    </table>
                    <br>
                    <table class="table">
                      <tr>
                        <th colspan="4">
                          <center>
                            <h3>ข้อมูลวัน-เวลา รับ-ส่ง สินค้า</h3>
                          </center>
                        </th>
                      </tr>
                      <tr>
                        <td>วันรับสินค้า</td>
                        <td>
                          <input type="date" name="fname">
                        </td>
                        <td>วันส่งสินค้า</td>
                        <td>
                          <input type="date" name="fname">
                        </td>
                      </tr>
                      <tr>
                        <td>เวลารับสินค้า</td>
                        <td>
                          <input type="time" name="fname">
                        </td>
                        <td>เวลาส่งสินค้า</td>
                        <td>
                          <input type="time" name="fname">
                        </td>
                      </tr>
                  </tbody>
                  </table>
              </div>
              <p style="margin:20px;">
                <center>
                  <button type="button" class="btn btn-success">บันทึก</button>
                  <button type="reset" class="btn btn-warning" value="Reset">ล้าง</button>
                  <button type="button" class="btn btn-danger">ยกเลิก</button>
              </p>
              </center>
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