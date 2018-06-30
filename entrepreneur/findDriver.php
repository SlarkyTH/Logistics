<?php
include("../library/class.mysqldb.php");
include("../library/config.inc.php");
if (!isset($_GET['q'])){
	$sql = "SELECT * FROM driver";
}
else {
	$q = trim($_GET['q']);
	$sql = "SELECT * FROM driver where Driver_Name like '%$q%' ";
}
$result = mysqli_query($conn, $sql);
$resultJSON = array();
if ($result->num_rows > 0) {
   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   	$iteminner = array();
    $iteminner = array("id" => $row['Driver_Id'], "text" =>  $row['Driver_Name'] . " " . $row['Driver_Lastname']);
    $resultJSON[] = $iteminner;
   }
}
echo json_encode($resultJSON);
?>
?>  