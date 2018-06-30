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
  <style>
    .menu {
      width: 25%;
      float: left;
      padding: 15px;
    }

    .main {
      width: 75%;
      float: left;
      padding: 15px;
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
        <h1>
          Logistic</h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <div class="box box-primary">
          <h3>7 เทรนด์โลจิสติกส์ที่ต้องจับตามองในปี 2018</h3>
          <form action="" method="get">
            <div class="menu">
              <ul>
                <li>
                  <p><a href="https://www.peerpower.co.th/blog/invest/internet-of-things-fintech/"><img src="imgs/wearable-tech_fintech.jpg" height="150px" width="220px"></a></p>
                  <p style="padding-left: 2.8em;">IoT (Internet of Things)
                    <br>&nbsp&nbspในอุตสาหกรรมฟินเทค</p>
                </li>
                <li>
                  <p><a href="https://www.peerpower.co.th/blog/sme/management/digital-transformation-for-business/"><img src="imgs/digital-transformation.jpg" height="150px" width="220px"></a></p>
                  <p style="padding-left: 2.8em;">&nbsp&nbsp“Digital Transformation”</p>
                </li>
                <li>
                  <p><a href="https://www.peerpower.co.th/blog/sme/14-free-tools-online-marketing-for-sme/"><img src="imgs/digital-marketing.jpg" height="150px" width="220px"></a></p>
                  <p style="padding-left: 2.8em;">&nbsp&nbsp14 เครื่องมือการตลาดออนไลน์ใช้ฟรีที่ SME ต้องรู้</p>
                </li>
              </ul>
            </div>
            <div class="main">
              <p style="font-size:20px;">1. Internet of Things (IoT) Internet of Things (IoT) นั้นหมายถึง “อินเทอร์เน็ตของสรรพสิ่ง” ซึ่งก็คือ เครือข่ายของสิ่งของที่มีวงจรอิเล็กทรอนิกส์
                ซอฟต์แวร์ และเซ็นเซอร์ฝังตัวอยู่ ทำให้สามารถเชื่อมต่อและแลกเปลี่ยนข้อมูลกันได้ ซึ่งในปี 2018
              </p>
              <p style="font-size:20px;">
                2. Blockchain Blockchain คือ เครือข่ายการเก็บข้อมูลขนาดใหญ่ซึ่งถูกจัดเก็บอยู่ใน (Block) และเชื่อมโยงเป็นเครือข่ายคล้ายห่วงโซ่
                (Chain) โดยทุกคนสามารถเข้าถึงข้อมูลนี้ได้และมีความปลอดภัยสูง ทำให้เกิดความโปร่งใสในการจัดเก็บข้อมูลในการทำธุรกรรมต่างๆ
              </p>
              <p style="font-size:20px;">
                3. Logistics มีความยืดหยุ่นมากขึ้น สิ่งนี้หมายถึงความยืดหยุ่นในการขยายหรือลดขีดความสามารถโลจิสติกส์ เพื่อให้สอดคล้องกับความต้องการในห่วงโซ่อุปทานภายในระยะเวลาที่กำหนด
                เนื่องจากตลาดมีการผันผวนอยู่เสมอ ดังนั้นระบบอัตโนมัติจึงเข้ามามีบทบาทสำคัญในการกำหนด การควบคุมค่าใช้จ่าย
                การจัดการคลังจัดเก็บสินค้า การจัดการช่องทางการจัดจำหน่าย การจัดลำดับความสำคัญของการจัดส่ง และอีกมากมาย
              </p>
              <p style="font-size:20px;">
                4. ความสมบูรณ์แบบในการจัดส่งสินค้า เทรนด์ที่น่าสนใจและมีแนวโน้มที่จะเพิ่มขึ้นเรื่อยๆ คือ ความต้องการคำสั่งซื้อที่สมบูรณ์แบบ
                ซึ่งบริษัททุกแห่งทราบดีว่านี่คือสิ่งที่สำคัญที่สุดในการวัดผลความพึงพอใจของลูกค้า คำสั่งซื้อที่สมบูรณ์แบบ
                คือ เปอร์เซ็นต์ในการจัดส่งสินค้าให้ทุกประเภทเท่านั้น แต่จะต้องจัดส่งสินค้าที่ถูกต้อง บรรจุหีบห่ออย่างถูกต้อง
                ไปยังสถานที่ที่ถูกต้อง ในเวลาที่ถูกต้อง ตามจำนวนที่ถูกต้อง พร้อมเอกสารที่ถูกต้อง ในสภาพสมบูรณ์ไม่เสียหาย
                และส่งไปยังลูกค้าที่ถูกต้องอีกด้วย
              </p>
              <p style="font-size:20px;">
                5. การใช้ Big Data มาวิเคราะห์ข้อมูลเชิงลึกในระบบ Cloud ความกลัวในการจัดเก็บข้อมูลในระบบ Cloud นั้นจะไม่มีอีกต่อไป เมื่อบริษัทพากันแทนที่ระบบจัดการการดำเนินธุรกรรมในองค์กร
                (Legacy System) ด้วย Cloud Data หรือศูนย์ข้อมูลที่ทุกคนสามารถเข้าไปใช้งานได้ด้วยตนเองเนื่องจากความต้องการให้ห่วงโซ่อุปทานสามารถตอบสนองได้อย่างมีประสิทธิภาพและรวดเร็วมากขึ้น
                และเพื่อให้ทีมผู้บริหารสามารถเข้าใจถึงตัวผลักดันต้นทุน (Cost Drivers) ในกิจกรรมต่างๆ ของโลจิสติกส์ได้
              </p>
              <p style="font-size:20px;">
                6. จุดเริ่มต้นการใช้หุ่นยนต์เพื่อบริหารจัดการคลังจัดเก็บสินค้า การนำเครื่องจักรมาใช้งานแทนมนุษย์ภายในคลังสินค้าไม่ใช่คอนเซ็ปต์ใหม่แต่อย่างใด
                เมื่อคุณจะต้องจัดการคลังสินค้าที่มีขนาดใหญ่ การจัดการให้งานทุกขั้นตอนดำเนินไปได้อย่างอัตโนมัติ โดยการวางระบบ
                IT ที่ดีจะช่วยให้การจัดการมีประสิทธิภาพมากขึ้นและง่ายขึ้น
              </p>
              <p style="font-size:20px;">
                7. การจัดการรายได้จากทุกช่องทางการจำหน่าย (Omnichannel) Omnichannel คือ การรวบรวมการสื่อสารและเข้าถึงผู้บริโภคในช่องทางที่หลากหลายทั้งออนไลน์
                (Website, email, LINE, Facebook, Instagram) และออฟไลน์ (ร้านค้า) เข้าไว้ด้วยกัน เพื่อสร้างประสบการณ์ที่ดีให้กับลูกค้าผ่านทุกช่องทางการขาย
                ซึ่งถึงเป็นการทำ CRM ยุคใหม่อีกอย่างหนึ่ง ตัวอย่าง เช่น แบรนด์เสื้อผ้าชื่อดัง Pomelo ที่ให้ลูกค้าสามารถสั่งสินค้าผ่านเว็บไซต์
                เลือกจัดส่งสินค้าไปยังหน้าร้าน (Site-to-store) และสามารถไปรับด้วยตนเองได้ภายใน 1-2 วัน
              </p>
            </div>
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