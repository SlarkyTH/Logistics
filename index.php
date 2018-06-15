<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");

if(isset($_POST["submit"])){
	$rs=mysql_fetch_object(mysql_query("select * from login where log_user='".$_POST["user"]."' and log_passwd='".$_POST["passwd"]."'"));
 

  if($rs->log_user != "") {
		$_SESSION["xuser"]=$rs->log_user;
		$_SESSION["xuser_ref"]=$rs->log_user_ref;
		
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
</head>

<body>
<div class="container-fluid">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="register_ent.php">Become Entrepreneur</a></li>
        <li class="breadcrumb-item"><a href="register_sen.php">Become Sender</a></li>
        <li class="breadcrumb-item"><a href="register_cus.php">Become Customer</a></li>
        <li class="breadcrumb-item"><a href="#">Track And Trace</a></li>
      </ol>
    </nav>


	<div class="jumbotron jumbotron-fluid">
      <div class="container">
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
</body>
</html>