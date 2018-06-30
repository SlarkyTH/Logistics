<?php 
include("library/class.mysqldb.php");
include("library/config.inc.php");
$latitude = $_GET["latitude"];
$longitude = $_GET["longitude"];
$car_id = $_GET["car_id"];

mysql_query("INSERT INTO `location` (
	`location_id`, 
	`location_latitude`, 
	`location_longitude`, 
    `car_id` 
	) VALUES (
	NULL,  
	'".$latitude."', 
    '".$longitude."', 
    '".$car_id."'
  );");
?>