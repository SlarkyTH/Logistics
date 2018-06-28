<?php
include("../library/class.mysqldb.php");
include("../library/config.inc.php");
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
  <style type="text/css">
    div#messagesDiv {
      display: block;
      height: 550px;
      overflow: auto;
      background-color: #FDFDE0;
      width: 90%;
      margin: 5px 0px;
      border: 1px solid #CCC;
    }

    .left_box_chat {
      border: 1px solid #CCC;
      border-radius: 25px;
      margin: 5px;
      padding: 0px 10px;
      display: inline-block;
      float: left;
      clear: both;
      text-align: left;
      background-color: #FFF;
    }

    .right_box_chat {
      border: 1px solid #CCC;
      border-radius: 25px;
      margin: 5px;
      padding: 0px 10px;
      display: inline-block;
      float: right;
      clear: both;
      text-align: right;
      background-color: #9F6;
    }
  </style>
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
        <h1>Chat</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <div class="box box-primary">
          <center>
            <div id="messagesDiv">
              <!--<div class="left_box_chat">1</div>
<div class="right_box_chat">2</div>-->
            </div>
            <div class="bg-info" style="width:100%;padding:5px 0px;">
              <div class="row">
                <div class="col-xs-4">
                  <input type="text" class="form-control" name="userID1" id="userID1" value="<?=(isset($_SESSION['ses_user_id']))?$_SESSION['ses_user_id']:''?>"
                    placeholder="UserID 1">
                  <input type="text" class="form-control" name="userID2" id="userID2" value="<?=(isset($_SESSION['ses_user_id2']))?$_SESSION['ses_user_id2']:''?>"
                    placeholder="UserID 2">
                </div>
                <div class="col-xs-5">
                  <input name="h_maxID" type="hidden" id="h_maxID" value="0">
                  <input type="text" class="form-control" name="msg" id="msg" placeholder="Message">
                  <input type="text" class="form-control" name="status" value="รอการตอบรับจากผู้ขนส่ง" readonly>
                  <br>
                  <p>
                    <a href="#" class="btn btn-primary" role="button">ตกลง</a>
                  </p>
                </div>
              </div>
            </div>
          </center>
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