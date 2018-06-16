<?php
include("../library/class.mysqldb.php");
include("../library/config.inc.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
    #map_canvas {
      height: 600px;
    }
  </style>

  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyABdjVQ8JJUSBuI5jaTXMHwyoFZ6pqojQk&callback=initializeMap"></script>

  <script type="text/javascript">
    var latz = 13.756331;
    var longz = 100.501765;
    var directionDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;
    var markers = [];
    var statusclick = true
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      alert('Geolocation is not supported by this browser.');
    }

    function showPosition(position) {
      latz = position.coords.latitude;
      longz = position.coords.longitude;
      //$("#start").val(position.coords.latitude + ',' + position.coords.longitude);

      initialize(position.coords.latitude, position.coords.longitude);

      //alert('Latitude: ' + position.coords.latitude + '<br>Longitude: ' + position.coords.longitude');
    }


    function initialize(lat, long) {
      directionsDisplay = new google.maps.DirectionsRenderer();
      var melbourne = new google.maps.LatLng(latz, longz);
      var myOptions = {
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: melbourne
      }

      map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      google.maps.event.addListener(map, 'click', function (event) {
        deleteMarkers()
        var marker = new google.maps.Marker({
          position: event.latLng,
          map: map,

        });
        markers.push(marker);
        if (statusclick == 'start') $("#start").val(event.latLng.lat() + "," + event.latLng.lng())
        else $("#end").val(event.latLng.lat() + "," + event.latLng.lng())

      });
      directionsDisplay.setMap(map);

    }

    function route(clickroute) {
      statusclick = clickroute
    }


    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
    }

    function clearMarkers() {
      setMapOnAll(null);
    }

    function showMarkers() {
      setMapOnAll(map);
    }

    function deleteMarkers() {
      clearMarkers();
      markers = [];
    }

    function calcRoute() {

      var start = document.getElementById("start").value;
      var end = document.getElementById("end").value;
      var distanceInput = document.getElementById("distance");

      var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      };

      directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
          distanceInput.value = response.routes[0].legs[0].distance.value / 1000;
        }
      });
    }
  </script>

</head>

<body class="hold-transition skin-blue sidebar-mini" onload="initialize()">
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
          <span class="box-title">Route</span>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <div class="box box-primary">
          <div class="box-header">
            <i class="ion ion-ios-navigate"></i>
            <h3 class="box-title">Routing</h3>

            <div>
              <p>
                <label for="start">Start: </label>
                <input type="text" name="start" id="start" onclick="route('start')" />

                <label for="end">End: </label>
                <input type="text" name="end" id="end" onclick="route('end')" />

                <input type="submit" value="Calculate Route" class="btn btn-primary" onclick="calcRoute()" />
              </p>
              <p>
                <label for="distance">Distance (km): </label>
                <input type="text" name="distance" id="distance" readonly="true" />
              </p>
            </div>
            <div id="map_canvas"></div>


          </div>
          <!-- /.box-header -->
          <!-- /.box-body -->
          <p style="margin:20px;">
            <center>
              <button type="button" class="btn btn-success" style="margin:20px">ตกลง</button>
              <button type="button" class="btn btn-danger" style="margin:20px">ยกเลิก</button>
          </p>
          </center>
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

<!-- mikerog -->

</body>

</html>