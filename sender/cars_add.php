<?php
include("library/class.mysqldb.php");
include("library/config.inc.php");
if(isset($_POST["submit"])){
	//##########################################3
	if($_FILES["carimage"]["name"] != "") {
		
	$images = $_FILES["carimage"]["tmp_name"];
	$height=300; //*** Fix Width & Heigh (Auto caculate) ***//
	$size=getimagesize($images);
	$width=round($height*$size[0]/$size[1]);
	$loopscale = 1;
	while($loopscale == 1) {
		if($height < 300) {
			$height=$height+1;
			$width=round($height*$size[0]/$size[1]);
		} else { $loopscale = 0; }
	}
	
$file_type= explode('.', $_FILES["carimage"]["name"]);
$file_type = $file_type[1];
$file_type=strtolower($file_type);
if($file_type=='jpg'){
	$images_orig = imagecreatefromjpeg($images);
	$filename=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).".jpg";
}
if($file_type=='jpeg'){
	$images_orig = imagecreatefromjpeg($images);
	$filename=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).".jpeg";
}
if($file_type=='png'){
	$images_orig = imagecreatefrompng($images);
	$filename=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).".png";
}
	$new_images = "../fileupload/".$filename;
	$photoX = imagesx($images_orig);
	$photoY = imagesy($images_orig);
	$images_fin = imagecreatetruecolor($width, $height);
	imagecopyresampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	
	if($file_type=='jpg'){
		imagejpeg($images_fin,$new_images);
	}
	if($file_type=='jpeg'){
		imagejpeg($images_fin,$new_images);
	}
	if($file_type=='png'){
		imagepng($images_fin,$new_images);
	}
	imagedestroy($images_orig);
	imagedestroy($images_fin);
		
		mysql_query("UPDATE  `personal` SET  `personal_img` =  '".$filename."' WHERE personal_id =  '".$_POST["pid"]."'");
		}
	//########################################################################################
	$user_ref=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	mysql_query("INSERT INTO `sender` (
	`sen_id`, 
	`sen_name`, 
	`sen_company`, 
	`sen_address`, 
	`sen_district`, 
	`sen_area`, 
	`sen_province`, 
	`sen_code`, 
	`sen_tel`, 
	`sen_fax`, 
	`sen_email`, 
	`sen_website`,
	`sen_user_ref`
	) VALUES (
	NULL, 
	'".$_POST["fullname"]."', 
	'".$_POST["company"]."', 
	'".$_POST["address"]."', 
	'".$_POST["district"]."', 
	'".$_POST["area"]."', 
	'".$_POST["province"]."', 
	'".$_POST["code"]."', 
	'".$_POST["tel"]."', 
	'".$_POST["fax"]."', 
	'".$_POST["email"]."', 
	'".$_POST["website"]."',
	'".$user_ref."'
	);");
	
	mysql_query("INSERT INTO `login` (`log_id`, `log_user`, `log_passwd`, `log_user_ref`, `log_user_type`) VALUES (NULL, '".$_POST["user"]."', '".$_POST["passwd"]."', '".$user_ref."', 'sender');");
	
	header("location:index.php");
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
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="../js/jquery-3.1.1.slim.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
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

	<nav class="breadcrumb">
      <a class="breadcrumb-item" href="cars.php">Back</a>
    </nav>

	<div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">ADD CAR</h1>
        <p class="lead">Add the car to catalog.</p>
        <p class="lead">
        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        	<div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Vehicle Registration:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-text-input" placeholder="Vehicle Registration" name="vr" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Brand:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-password-input" placeholder="Brand" name="brand" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Model:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Model" name="model" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Year:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Year" name="year" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Color:</label>
              <div class="col-10">
                <input class="form-control form-control-lg" type="text" id="example-fullname-input" placeholder="Color" name="color" required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Image:</label>
              <div class="col-10">
              	<input name="carimage" type="file" class="form-control">
              </div>
            </div>
            
            
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg" name="submit" value="submit">Register</button>
              </div>
            </div>
        </form>
        </p>
      </div>
	</div>

</div>
</body>
</html>