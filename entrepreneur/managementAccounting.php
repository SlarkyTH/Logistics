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
    <style>
      .table>tbody>tr>td {
        border-top: none;

      }

      .table>tbody>tr>td>input {
        padding-left: 5px;

      }

      .container {
        width: auto;
      }
    </style>
    <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>


  </head>
  <script>
    $(document).ready(function () {
      $('.price').keyup(function () {
        if (event.which >= 37 && event.which <= 40) return;
       

        $(this).val(function (index, value) {
          return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
        
      });
      $('#submit').click(function() {
        var sum = 0

        $('.price').each(function () {
          sum += Number($(this).val().replace(',',''));

        });

        $('#totalprice').html(sum.toLocaleString());
      })
      $('#clearData').click(function(){
        $('#totalprice').html(0);
      })

    });
  </script>

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
          <h1>จัดการทางบัญชี</h1>
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
              <div class="container">
                <h3 style="margin-bottom: 30px;">ค่าใช้จ่ายอื่นๆ</h3>
                <p style="padding-left:10%;border-top:none;">วัน / เดือน / ปี
                  <input type="date" name="emp_price" id="emp_price" class="price">
                  <center>
                    <table class="table" style="border:none;width:40%;">
                      <thead>
                        <tr>
                          <th style="border-bottom:none;">
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ค่าจ้างพนักงาน</td>
                          <td>
                            <input type="text" name="emp_price" id="emp_price" class="price">
                          </td>
                        </tr>
                        <tr>
                          <td>ค่าทางด่วน</td>
                          <td>
                            <input type="text" name="wagesExp" id="wagesExp" class="price">
                          </td>
                        </tr>
                        <tr>
                          <td>ค่าซ่อมแซม</td>
                          <td>
                            <input type="text" name="repairprice" id="repairprice" class="price">
                          </td>
                        </tr>
                        <tr>
                          <td>อื่นๆ</td>
                          <td>
                            <input type="text" name="other" id="other" class="price">
                          </td>
                          
                           
                            
                          <tr class="text-center">
                          <td><button type="reset" class="btn btn-bitbucket" style="" id="clearData">ล้าง</button></td>
                              <td style="text-align:left;"><button type="button" class="btn btn-reddit" id="submit">ตกลง</button></td>   
                          </tr>
                          <tr>
                            
                          </tr>
                      </tbody>
                    </table>                    
                    
                      <b>รวมค่าใช้จ่ายทั้งสิ้น :
                        <label for="" name="totalprice" id="totalprice" style="margin-right:20px;">0</label>
                      </b>
                      <button type="button" class="btn btn-success" style="margin-right:20px;">บันทึก</button>
                      <button type="button" class="btn btn-danger" style="margin-right:20px;">ยกเลิก</button>
                    </p>
                     
                      </center>
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