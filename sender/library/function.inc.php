<?PHP
# คำนวณจำนวนคืน
function calcNight($inDate, $outDate){
	$inDate = strtotime($inDate);
	$outDate = strtotime($outDate);
	return ($outDate - $inDate) / 60 / 60 / 24;
}
# คำนวณจำนวนวัน
function calcDay($inDate, $outDate){
	return ((strtotime($outDate) - strtotime($inDate))/  ( 60 * 60 * 24 )) + 1;
}


# สุ่มหมายเลขบัตรประชาชน
function randomCitizenID(){
	for($i=0;$i<12;$i++){
		$k = abs($i + (-13));
		$m = rand(0,9);
		$firstNumber .= $m; // ตัวเลขชุดแรก (12 หลัก)
		$numberCalc += ($k * $m);
	}
	$lastNumber = 11 - ($numberCalc % 11); // ตัวเลขหลักสุดท้าย
	return $firstNumber.$lastNumber;
}

function backNof($message = "ดำเนินการสำเร็จแล้ว", $type = true, $url = ''){
	$url = ($url) ? $url : $_SERVER['HTTP_REFERER'];
	if($type == true){
		$_SESSION['success'] = $message;
	}else{
		$_SESSION['error'] = $message;
	}
	header("location:".$url);
/*	echo "<script type='text/javascript'>";
	echo "location.href='$url'";
	echo "</script>";*/
	exit();
}

# alert แล้วดีดกลับ
function back($msg,$url){
	echo "
	<script>
	alert('$msg');
	location.href='$url';
	</script>
	";
	exit();
}

# alert ธรรมดา
function alert($msg){
	echo "
	<script language='JavaScript'>
	alert('$msg');
	</script>
	";
}

# url ปัจจุบัน
function current_url() {
	$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	return $url;
}

# เปลี่ยนตัวเลขเป็นตัวอักษร
function genNumberToText($number){
	$txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
	$txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');
	$number = str_replace(",","",$number);
	$number = str_replace(" ","",$number);
	$number = str_replace("บาท","",$number);
	$number = explode(".",$number);
	if(sizeof($number)>2){
		return 'ทศนิยมหลายตัวนะจ๊ะ';
		exit;
	}
	$strlen = strlen($number[0]);
	$convert = '';
	for($i=0;$i<$strlen;$i++){
		$n = substr($number[0], $i,1);
		if($n!=0){
			if($i==($strlen-1) AND $n==1){ $convert .= 'เอ็ด'; }
			elseif($i==($strlen-2) AND $n==2){ $convert .= 'ยี่'; }
			elseif($i==($strlen-2) AND $n==1){ $convert .= ''; }
			else{ $convert .= $txtnum1[$n]; }
			$convert .= $txtnum2[$strlen-$i-1];
		}
	}
	$convert .= 'บาท';
	if($number[1]=='0' OR $number[1]=='00' OR $number[1]==''){
		$convert .= 'ถ้วน';
	}else{
		$strlen = strlen($number[1]);
		for($i=0;$i<$strlen;$i++){
			$n = substr($number[1], $i,1);
			if($n!=0){
				if($i==($strlen-1) AND $n==1){$convert .= 'เอ็ด';}
				elseif($i==($strlen-2) AND $n==2){$convert .= 'ยี่';}
				elseif($i==($strlen-2) AND $n==1){$convert .= '';}
				else{ $convert .= $txtnum1[$n];}
				$convert .= $txtnum2[$strlen-$i-1];
			}
		}
		$convert .= 'สตางค์';
	}
	return $convert;
}
// เอาไว้ถอดตัวอักษรที่อันตรายต่อการบุกรุกด้วยวิธี sql injection
function check_post()
{
	foreach($_POST as $var => $val)
	{
		#$_POST[$var] = str_replace(array('"', "'"," ",";"), '', $_POST[$var]);
		$_POST[$var] = str_replace(array('"', "'",";"), '', $_POST[$var]);
	}
}

// เอาไว้ถอดตัวอักษรที่อันตรายต่อการบุกรุกด้วยวิธี sql injection
function check_get()
{
	foreach($_GET as $var => $val)
	{
		$_GET[$var] = str_replace(array('"', "'"," ",";"), '', $_GET[$var]);
	}
}

// กัน sql injection ใช้คร่อมตัวแปรที่รับค่ามาจากหน้าก่อนหน้านี้ ไม่ว่าจะเป็น GET หรือ POST (ต้องเชื่อมต่อฐานข้อมูลไว้ก่อนด้วย)
function inj($val)
{
	return mysql_real_escape_string($val);
}

// กันโพสค่าจากเว็บอื่น ใช้ในหน้าที่ต้อง add ลงฐานข้อมูล
function check_site()
{
	if (!eregi(URLSITE,URLBACK)) {
		echo "Sorry, not found your request.";
		die();
	}
}

# ตรวจสอบหน้าก่อนหน้านี้ว่าเป็นหน้าที่กำหนดหรือไม่ เช่น preURL('confirm')
function preURL($str='')
{
	if(!eregi($str, $_SERVER['HTTP_REFERER']))
	{
		echo "Invalid Process";
		die();
	}
}

// เว้นวรรค์ และขึ้นบรรทัดใหม่ ให้ข้อความที่แอดลง DB ออกมาแสดงได้ถูกต้อง
function showTextDB($str){
	$str = str_replace(" ","&nbsp;",$str); // เว้นวรรค
	$str = nl2br($str); // ขึ้นบรรทัดใหม่
	return $str;
}

// ตรวจสอบรหัสบัตรประชาชนว่าถูกต้องหรือเปล่า
function checkID($id) {

	if(strlen($id) != 13) return false;

	for($i=0, $sum=0; $i<12;$i++)

	$sum += (int)($id{$i})*(13-$i);

	if((11-($sum%11))%10 == (int)($id{12}))

	return true;

	return false;

}

// แปลงวันที่ Ymd ให้เป็น d-m-Y+543
function genDateToThai($val, $str='-')
{
	$val = explode("-",$val);
	return $val[2].$str.$val[1].$str.$val[0];
}

// แปลงวันที่ ไทย ให้เป็นเหมือนเดิม
function genDateToEng($val, $str='-')
{
	$val = explode("-",$val);
	$val[2]-=543;
	return $val[2].$str.$val[1].$str.$val[0];
}

// หาค่า URL เต็มๆ ของหน้านั้นๆ
function selfURL() {
	$s = empty($_SERVER["HTTPS"]) ? ''
	: ($_SERVER["HTTPS"] == "on") ? "s"
	: "";
	$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
	: (":".$_SERVER["SERVER_PORT"]);
	return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}
function strleft($s1, $s2) {
	return substr($s1, 0, strpos($s1, $s2));
}

// เอา ip
function getIP()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

// ฟังก์ชั่น แบ่งหน้า
function pageQuery($sql,$ListPerPage)
{
	global $page;
	global $totalpage;
	global $PerPage;
	
	$page=trim(addslashes($_GET["page"]));
	
	$PerPage=$ListPerPage;
	

	$result=mysql_query($sql);
	if (empty($page))	$page=1;
	$num=mysql_num_rows($result);
	$rt = $num%$ListPerPage;

	//หาจำนวนหน้าทั้งหมด
	$totalpage = ($rt!=0) ? floor($num/$ListPerPage)+1 : floor($num/$ListPerPage);
	$goto = ($page-1)*$ListPerPage;

	$sql .= " LIMIT $goto,$ListPerPage";
	//echo $sql;
	$result=mysql_query($sql);

	return $result;
}

function pageLoop($option="",$align="center")
{
	global $page;
	global $totalpage;

	// รูปแบบตัวแปร option คือ $option = "id=$c_id";
	// ถ้ามีหลายตัวแปรก็จะเป็น  $option = "id=$c_id&name=$myname&action=$action";

	echo "<table align='center' width='100%' border='0' cellspacing='10' cellpadding='2'>\n";
	echo "<tr><td align='$align'>\n";
	echo "<font color='#686898'>\n";

	// สร้าง link เพื่อไปหน้าก่อน-หน้าถัดไป
	echo "กำลังแสดงหน้าที่  ";
	if($page>1 && $page<=$totalpage) {
		$prevpage = $page-1;
		echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$prevpage' title='Back'><-Click</a>\n";
	}

	echo " <b>$page/$totalpage</b> ";

	if($page!=$totalpage) {
		$nextpage = $page+1;
		echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$nextpage' title='Next'>Click-></a>\n";
	}

	echo "</font>\n";
	echo "</td></tr>\n";
	echo "<tr><td align='$align'>\n";

	// วนลูปแสดงเลขหน้าทั้งหมด แบบเป็นช่วงๆ ช่วงละ 10 หน้า
	$b=floor($page/10);
	$c=(($b*10));

	if($c>1) {
		$prevpage = $c-1;
		echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$prevpage' title='10 หน้าก่อนนี้'><<</a> \n";
	}
	else{
		echo "<<\n";
	}

	echo " <b>";

	for($i=$c; $i<$page ; $i++) {
		if($i>0)
		echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$i'>$i</a> \n";
	}

	echo "<font color='red'>$page</font> \n";

	for($i=($page+1); $i<($c+10) ; $i++) {
		if($i<=$totalpage)
		echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$i'>$i</a> \n";
	}

	echo "</b> ";

	if($c>=0) {
		if(($c+10)<$totalpage){
			$nextpage = $c+10;
			echo "<a href='".$_SERVER['PHP_SELF']."?$option&page=$nextpage' title='10 หน้าถัดไป'>>></a> \n";
		}
		else
		echo ">>\n";
	}
	else{
		echo ">>\n";
	}

	echo "</td></tr>\n";
	echo "</table>\n";
}


function pageLoop2($option="",$align="center")
{
	global $page;
	global $totalpage;

	// รูปแบบตัวแปร option คือ $option = "id=$c_id";
	// ถ้ามีหลายตัวแปรก็จะเป็น  $option = "id=$c_id&name=$myname&action=$action";

	echo "<table align='center' width='100%' border='0' cellspacing='10' cellpadding='2'>\n";
	echo "<tr><td align='$align'>\n";
	echo "<font color='#686898'>\n";

	// สร้าง link เพื่อไปหน้าก่อน-หน้าถัดไป
	echo "กำลังแสดงหน้าที่  ";
	if($page>1 && $page<=$totalpage) {
		$prevpage = $page-1;
		echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$prevpage'\") title='Back'><-Click</a>\n";
	}

	echo " <b>$page/$totalpage</b> ";

	if($page!=$totalpage) {
		$nextpage = $page+1;
		echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$nextpage'\") title='Next'>Click-></a>\n";
	}

	echo "</font>\n";
	echo "</td></tr>\n";
	echo "<tr><td align='$align'>\n";

	// วนลูปแสดงเลขหน้าทั้งหมด แบบเป็นช่วงๆ ช่วงละ 10 หน้า
	$b=floor($page/10);
	$c=(($b*10));

	if($c>1) {
		$prevpage = $c-1;
		echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$prevpage'\") title='10 หน้าก่อนนี้'><<</a> \n";
	}
	else{
		echo "<<\n";
	}

	echo " <b>";

	for($i=$c; $i<$page ; $i++) {
		if($i>0)
		echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$i'\")>$i</a> \n";
	}

	echo "<font color='red'>$page</font> \n";

	for($i=($page+1); $i<($c+10) ; $i++) {
		if($i<=$totalpage)
		echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$i'\")>$i</a> \n";
	}

	echo "</b> ";

	if($c>=0) {
		if(($c+10)<$totalpage){
			$nextpage = $c+10;
			echo "<a href='#' onClick='loadData(\"".$_SERVER['PHP_SELF']."?$option&page=$nextpage'\") title='10 หน้าถัดไป'>>></a> \n";
		}
		else
		echo ">>\n";
	}
	else{
		echo ">>\n";
	}

	echo "</td></tr>\n";
	echo "</table>\n";
}


//ฟังก์ชั่นเปลี่ยนข้อความเว็บและเมล์ให้เป็นลิงก์
function CHANGE_LINK($Message = ""){
	$Message = eregi_replace("([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])","<a href=\"\\1://\\2\\3\" target=\"_blank\">\\1://\\2\\3</a>",$Message);
	$Message = eregi_replace("([[:alnum:]]+)@([^[:space:]]*)([[:alnum:]])","<a href=mailto:\\1@\\2\\3>\\1@\\2\\3</a>",$Message);
	return ($Message);
}

//ทำการแบ่งหน้า
function SplitPage($page="",$totalpage="",$option=""){
	global $ShowSumPages , $ShowPages ;
	// สร้าง link เพื่อไปหน้าก่อน-หน้าถัดไป
	$ShowSumPages .= "<B>กำลังแสดงหน้าที่  </B>";
	if($page>1 && $page<=$totalpage) {
		$prevpage = $page-1;
		$ShowSumPages .= "<a href='".$option."&page=$prevpage' title='Back'><B><-</B></a>\n";
	}
	$ShowSumPages .= " <b>$page/$totalpage</b> ";
	if($page!=$totalpage) {
		$nextpage = $page+1;
		if($nextpage >= $totalpage){
			$nextpage = $totalpage ;
		}
		$ShowSumPages .= "<a href='".$option."&page=$nextpage' title='Next'><B>-></B></a>\n";
	}

	// วนลูปแสดงเลขหน้าทั้งหมด แบบเป็นช่วงๆ ช่วงละ 10 หน้า
	$b=floor($page/10);
	$c=(($b*10));

	if($c>1) {
		$prevpage = $c-1;
		$ShowPages .= "<a href='".$option."&page=$prevpage' title='10 หน้าก่อนนี้'><<</a> \n";
	}
	else{
		$ShowPages .= "<B><<</B>\n";
	}
	$ShowPages .= " <b>";
	for($i=$c; $i<$page ; $i++) {
		if($i>0)
		$ShowPages .= "<a href='".$option."&page=$i'>$i</a> \n";
	}
	$ShowPages .= "<font color=red>$page</font> \n";
	for($i=($page+1); $i<($c+10) ; $i++) {
		if($i<=$totalpage)
		$ShowPages .= "<a href='".$option."&page=$i'>$i</a> \n";
	}
	$ShowPages .= "</b> ";
	if($c>=0) {
		if(($c+2)<$totalpage){
			$nextpage = $c+10;
			$ShowPages .= "<a href='".$option."&page=$nextpage' title='10 หน้าถัดไป'>>></a> \n";
		}
		else
		$ShowPages .= "<B>>></B>\n";
	}
	else{
		$ShowPages .= "<B>>></B>\n";
	}
}


//แปลงเวลาเป็นภาษาไทย
function ThaiTimeConvert($timestamp="",$full="",$showtime=""){
	global $SHORT_MONTH, $FULL_MONTH, $DAY_SHORT_TEXT, $DAY_FULL_TEXT;
	$day = date("l",$timestamp);
	$month = date("n",$timestamp);
	$year = date("Y",$timestamp);
	$time = date("H:i:s",$timestamp);
	$times = date("H:i",$timestamp);
	if($full){
		$ThaiText = $DAY_FULL_TEXT[$day]." ที่ ".date("j",$timestamp)." เดือน ".$FULL_MONTH[$month]." พ.ศ.".($year+543) ;
	}else{
		$ThaiText = date("j",$timestamp)." / ".$SHORT_MONTH[$month]." / ".($year+543);
	}

	if($showtime == "1"){
		return $ThaiText." เวลา ".$time;
	}else if($showtime == "2"){
		$ThaiText = date("j",$timestamp)." ".$SHORT_MONTH[$month]." ".($year+543);
		return $ThaiText." : ".$times;
	}else{
		return $ThaiText;
	}
}

//ฟังก์ชันสำหรับแปลงเดือนและปีเป็นภาษาไทยแบบย่อ
function datethai($date)
{
	$day = substr("$date",8,2);
	$month = substr("$date",5,2);
	$month = (int)$month - 1;
	$year = substr("$date",0,4);
	$year = $year + 543;
	$thaimonth = array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	$month = $thaimonth[$month];
	return (int)$day." ".$month." ".$year;
}

//ฟังก์ชันสำหรับแปลงเดือนเป็นภาษาไทยแบบย่อ
function datethai_year($date)
{
	$day = substr("$date",8,2);
	$month = substr("$date",5,2);
	$month = (int)$month - 1;
	$year = substr("$date",0,4);
	$thaimonth = array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	$month = $thaimonth[$month];
	return (int)$day." ".$month." ".$year;
}

//ฟังก์ชันสำหรับแปลง เดือน/ปี เป็นภาษาไทยแบบเต็ม
function datethaifull($date)
{
	$day = substr("$date",8,2);
	$month = substr("$date",5,2);
	$month = (int)$month - 1;
	$year = substr("$date",0,4);
	$year = $year + 543;
	$thaimonth = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	$month = $thaimonth[$month];
	return (int)$day." ".$month." ".$year;
}

//ฟังก์ชันสำหรับแปลง เดือน เป็นภาษาไทยแบบเต็ม
function monththaifull($date)
{
	$month = substr("$date",5,2);
	$month = (int)$month - 1;
	$thaimonth = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	$month = $thaimonth[$month];
	return " ".$month." ";
}


//ตัว Alert ว่าไม่สามารถเข้าใช้งานได้
function NotTrueAlert($permission="", $option="", $text=""){
	if($option == 1){
		$option = "<script language='javascript'>javascript:history.go(-1)</script>";
	}elseif($option == 2){
		$option = "<script language='javascript'>refresh_close();</script>";
	}elseif($option == 3){
		$option = "<script language='javascript'>self.close();</script>";
	}

	if(!$permission){
		echo "<script language='javascript'>" ;
		echo "alert('".$text."')" ;
		echo "</script>" ;
		echo $option ;
		exit();
	}
}


?>