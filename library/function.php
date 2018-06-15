<?php

function GetAdminLogin($id){
	$sql="SELECT a_id FROM admin WHERE admin.a_id = '$id'";
	$result = mysql_query($sql);
	$arr = mysql_fetch_array($result);
	if($arr[a_id]){ return "T"; }else{ return "F"; }
}

function GetAdminAllow($id){
$sql="SELECT * FROM admin WHERE admin.a_id = '$id'";
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
for ($i = 1; $i <= 36; $i++) {
switch ($i) {
    case 1:
        $tooltrip=_a1;
        break;
    case 2:
        $tooltrip=_a2;
        break;
    case 3:
        $tooltrip=_a3;
        break;
    case 4:
        $tooltrip=_a4;
        break;
    case 5:
        $tooltrip=_a5;
        break;
    case 6:
        $tooltrip=_a6;
        break;
    case 7:
        $tooltrip=_a7;
        break;
    case 8:
        $tooltrip=_a8;
        break;
    case 9:
        $tooltrip=_a9;
        break;
    case 10:
        $tooltrip=_a10;
        break;
    case 11:
        $tooltrip=_a11;
        break;
    case 12:
        $tooltrip=_a12;
        break;
    case 13:
        $tooltrip=_a14;
        break;
    case 14:
        $tooltrip=_a14;
        break;
    case 15:
        $tooltrip=_a15;
        break;
    case 16:
        $tooltrip=_a16;
        break;
    case 17:
        $tooltrip=_a17;
        break;
    case 18:
        $tooltrip=_a18;
        break;		
    case 19:
        $tooltrip=_a19;
        break;
    case 20:
        $tooltrip=_a20;
        break;
    case 21:
        $tooltrip=_a21;
        break;
	case 22:
        $tooltrip=_a22;
        break;
	case 23:
        $tooltrip=_a23;
        break;
	case 24:
        $tooltrip=_a24;
        break;
	case 25:
        $tooltrip=_a25;
        break;
	case 26:
        $tooltrip=_a26;
        break;
	case 27:
        $tooltrip=_a27;
        break;
	case 28:
        $tooltrip=_a28;
        break;
	case 29:
        $tooltrip=_a29;
        break;
	case 30:
        $tooltrip=_a30;
        break;
	case 31:
        $tooltrip=_a31;
        break;
	case 32:
        $tooltrip=_a32;
        break;
	case 33:
        $tooltrip=_a33;
        break;
    case 34:
        $tooltrip=_a34;
        break;		
	case 35:
        $tooltrip=_a35;
        break;		
	case 36:
        $tooltrip=_a36;
        break;		
}		
		if(($arr["a_".$i]=="1") && (($i == 20) || ($i == 40))){ 
			echo "&nbsp;<a class=\"tips\" href=\"#\" original-title=\"$tooltrip\"><img src=\"./includes/img/admin/a_$i.png\" width=\"20\"></a><br />&nbsp;&nbsp;"; 
		}elseif(($arr["a_".$i]=="1") && ($i != 20)){
			echo "&nbsp;<a class=\"tips\" href=\"#\" original-title=\"$tooltrip\"><img src=\"./includes/img/admin/a_$i.png\" width=\"20\"></a>&nbsp;&nbsp;"; 
		}
	}
}

function average($module,$condition='',$percent=''){
	switch($module){
		case "present":
			if($condition=='การประชุมวิชาการระดับชาติ'){
				return ($percent*10)/100;
			}elseif($condition=='การประชุมวิชาการระดับนานาชาติ'){
				return ($percent*20)/100;
			}
			break;
		case "article":
			if($condition=='ตีพิมพ์วารสารหน่วยงาน/ภายนอก'){
				return ($percent*1)/100;
			}elseif($condition=='ตีพิมพ์วารสารระดับชาติ'){
				return ($percent*10)/100;
			}elseif($condition=='ตีพิมพ์วารสารระดับชาติที่อยู่ในฐานข้อมูล'){
				return ($percent*13)/100;
            }elseif($condition=='ตีพิมพ์วารสารระดับชาติที่อยู่ในฐานข้อมูลTCI กลุ่ม1'){
				return ($percent*13)/100;
            }elseif($condition=='ตีพิมพ์วารสารระดับชาติที่อยู่ในฐานข้อมูลTCI กลุ่ม2'){
				return ($percent*13)/100;				
			}elseif($condition=='ตีพิมพ์วารสารระดับนานาชาติที่ไม่อยู่ในฐานข้อมูล'){
				return ($percent*20)/100;
			}elseif($condition=='Q1ตีพิมพ์วารสารระดับนานาชาติที่อยู่ในฐานข้อมูลที่กำหนด'){
				return ($percent*20)/100;
			}elseif($condition=='Q2ตีพิมพ์วารสารระดับนานาชาติที่อยู่ในฐานข้อมูลที่กำหนด'){
				return ($percent*20)/100;
			}elseif($condition=='Q3ตีพิมพ์วารสารระดับนานาชาติที่อยู่ในฐานข้อมูลที่กำหนด'){
				return ($percent*20)/100;
			}elseif($condition=='Q4ตีพิมพ์วารสารระดับนานาชาติที่อยู่ในฐานข้อมูลที่กำหนด'){
				return ($percent*20)/100;
			}elseif($condition=='อนุสิทธิบัตร'){
				return ($percent*15)/100;
			}elseif($condition=='สิทธิบัตร'){
				return ($percent*20)/100;
			}
			break;
		case "document":
			if($condition=='เนื้อหา 50 – 100'){
				return ($percent*5)/100;
			}elseif($condition=='เนื้อหา 101- 150 หน้า'){
				return ($percent*8)/100;
			}elseif($condition=='เนื้อหา 151- 200 หน้า'){
				return ($percent*10)/100;
			}elseif($condition=='เนื้อหามากกว่า 200 หน้า'){
				return ($percent*12)/100;
			}
			break;
		case "research":
			if($condition=='ทุนสนับสนุนจากงบประมาณแผ่นดิน/เงินนอกงบประมาณ'){
				return ($percent*13)/100;
			}elseif($condition=='ทุนส่วนตัว'){
				return ($percent*10)/100;
			}elseif($condition=='ทุนสนับสนุนจากภายนอก1'){
				return ($percent*15)/100;
			}elseif($condition=='ทุนสนับสนุนจากภายนอก2'){
				return ($percent*20)/100;
			}elseif($condition=='ทุนสนับสนุนจากภายนอก3'){
				return ($percent*25)/100;
			}
			break;
		case "management":
			if($condition=='001'){
				return 35;
			}elseif($condition=='002'){
				return 28;
			}elseif($condition=='003'){
				return 26;
			}elseif($condition=='004'){
				return 22;
			}elseif($condition=='005'){
				return 18;
			}
			break;
		case "assigned":
			//return 0.5*$condition;
			if($condition=='สำหรับการคุมสอบ'){
				//return 0.1;
				return $percent*0.1;
			}elseif($condition=='งานที่ได้รับมอบหมายเป็นครั้งคราว'){
				//return 0.5;
				return $percent*0.5;
			}elseif($condition=='กรรมการกำหนดคุณสมบัติ ครุภัณฑ์ เกิน 5 แสนบาท'){
				//return 3;
				return $percent*3;
			}elseif($condition=='กรรมการเปิดซอง ครุภัณฑ์ เกิน 5 แสนบาท'){
				//return 2;
				return $percent*2;
			}elseif($condition=='กรรมการตรวจรับ ครุภัณฑ์ เกิน 5 แสนบาท'){
				//return 3;
				return $percent*3;
			}elseif($condition=='กรรมการกำหนดคุณสมบัติ ครุภัณฑ์ ต่ำกว่า 5 แสนบาท'){
				//return 2;
				return $percent*2;
			}elseif($condition=='กรรมการเปิดซอง ครุภัณฑ์ ต่ำกว่า 5 แสนบาท'){
				//return 1;
				return $percent*1;
			}elseif($condition=='กรรมการตรวจรับ ครุภัณฑ์ ต่ำกว่า 5 แสนบาท'){
				//return 2;
				return $percent*2;
			}	
			break;			
		case "development":
			return 0.5*$condition;
			break;
		case "others":
			if($condition=='ออกข้อสอบที่ไม่มีค่าตอบแทน'){
				//return 1.5;
				return $percent*1.5;
			}elseif($condition=='ประธานสภาคณาจารย์'){
				//return 5;
				return $percent*5;
			}elseif($condition=='ประธานคณะบุคคลที่รับผิดชอบและทำงานตลอดปี'){
				//return 5;
				return $percent*5;
			}elseif($condition=='รองประธานและกรรมการและเลขาฯ ที่ทำงานและรับผิดชอบตลอดปี'){
				//return 4;
				return $percent*4;
			}elseif($condition=='กรรมการและเลขาฯ สภาคณาจารย์/ส่งเสริมฯ/สภาวิชาการ/คณะกรรมการประจำคณะ/ศูนย์/สำนัก หรือเทียบเท่า'){
				//return 4;
				return $percent*4;
			}elseif($condition=='กรรมการ สภาคณาจารย์/ส่งเสริมฯ/สภาวิชาการ/คณะกรรมการประจำคณะ/ศูนย์/สำนัก หรือเทียบเท่า'){
				//return 2;
				return $percent*2;
			}elseif($condition=='กรรมการสภามหาวิทยาลัย'){
				//return 3;
				return $percent*3;
			}elseif($condition=='งานที่มหาวิทยาลัยมอบหมายระยะยาว เช่น คุมงาน'){
				//return 10;
				return $percent*10;
			}elseif($condition=='หัวหน้าโครงการที่จัดให้กับนักศึกษา'){
				//return 1;
				return $percent*1;
			}elseif($condition=='ที่ปรึกษาโครงงานนักศึกษา'){
				//return 1;
				return $percent*1;
			}elseif($condition=='ที่ปรึกษาปัญหาพิเศษ/โครงงาน/โครงการฝึกประสบการณ์วิชาชีพ/งานวิจัยในชั้นเรียน/งานอื่นที่กำหนดไว้ในหลักสูตรของมหาวิทยาลัย'){
				//return 1;
				return $percent*1;
			}elseif($condition=='ที่ปรึกษารายงานรายวิชาสัมมนา'){
				//return 0.5;
				return $percent*0.5;
			}elseif($condition=='ที่ปรึกษาวิทยานิพนธ์ปริญญาโท'){
				//return 4;
				return $percent*4;
			}elseif($condition=='ที่ปรึกษาวิทยานิพนธ์ปริญญาเอก'){
				//return 10;
				return $percent*10;
			}elseif($condition=='กรรมการหลักสูตร'){
				//return 3;
				return $percent*3;
			}elseif($condition=='อาจารย์ผู้รับรายวิชาฝึกประสบการณ์วิชาชีพ'){
				//return 3;
				return $percent*3;
			}elseif($condition=='ผู้ประสานงานรายวิชาฝึกประสบการณ์วิชาชีพครู'){
				//return 1.5;
				return $percent*1.5;
			}elseif($condition=='บทเรียนออนไลน์ LMS/e-learning'){
				//return 5;
				return $percent*5;
			}elseif($condition=='Power point สำหรับสอนในรายวิชา'){
				//return 2;
				return $percent*2;
			}
			break;

		case "practice":
			return $condition*10;
			break;
		case "teaching":
			if($condition < 60){
				return 2;
			}elseif(($condition >= 61) && ($condition <=100)){
				return 3;
			}elseif($condition >= 101){
				return 4;
			}
			break;
		case "adviser":
			$sum = $condition * 3;
			if($sum >= 6){
				return 6;
			}else{
				return $sum;
			}
			break;
		case "academic":
//			if($condition=='วิทยากร'){
//				return $percent*0.5;
//			}elseif($condition=='ตรวจผลงานวิชาการ'){
//				return $percent*2;
//			}elseif($condition=='ที่ปรึกษางานวิชาภายนอก'){
//				return $percent*2;
//			}elseif($condition=='บริการวิชาการอื่น'){
//				return $percent*0.5;
//			}
//			break;
			if($condition=='วิทยากร ภายในมหาวิทยาลัย'){
				return $percent*0.5;
			}elseif($condition=='วิทยากร ภายนอกมหาวิทยาลัย'){
				return $percent*1;
			}elseif($condition=='ตรวจบทความ ระดับชาติ'){
				return $percent*0.5;
			}elseif($condition=='ตรวจบทความ ระดับนานาชาติ'){
				return $percent*1;
			}elseif($condition=='ประเมินโครงการวิจัย หัวข้อเสนอโครงการวิจัย'){
				return $percent*1;
			}elseif($condition=='ประเมินโครงการวิจัย ความก้าวหน้าโครงการวิจัย'){
				return $percent*0.5;
			}elseif($condition=='ประเมินโครงการวิจัย งานวิจัยฉบับสมบูรณ์'){
				return $percent*3;
			}elseif($condition=='กรรมการสอบหัวข้อวิทยานิพนธ์'){
				return $percent*1;
			}elseif($condition=='กรรมการสอบวิทยานิพนธ์'){
				return $percent*3;
			}elseif($condition=='ที่ปรึกษาหรือกรรมการ ระดับท้องถิ่น'){
				return $percent*1;
			}elseif($condition=='ที่ปรึกษาหรือกรรมการ ระดับชาติ'){
				return $percent*2;
			}elseif($condition=='ทที่ปรึกษาหรือกรรมการ ระดับนานาชาติ'){
				return $percent*3;
			}elseif($condition=='บริการวิชาการ/ทดสอบ/วิเคราะห์ เครื่องมือ/แบบสอบถาม'){
				return $percent*1;
			}elseif($condition=='จัดแสดงนิทรรศการ ระดับชาติ'){
				return $percent*1;
			}elseif($condition=='จัดแสดงนิทรรศการ ระดับนานาชาติ'){
				return $percent*2;
			}elseif($condition=='ผู้ทรงคุณวุฒิ ภายในมหาวิทยาลัย'){
				return $percent*1;
			}elseif($condition=='ผู้ทรงคุณวุฒิ ภายนอกมหาวิทยาลัย'){
				return $percent*2;
			}elseif($condition=='บรรณาธิการ'){
				return $percent*4;
			}elseif($condition=='ผู้ช่วยบรรณาธิการ'){
				return $percent*2;
			}
			break;
	}
}

function count_row($module,$session_id){
	switch($module){
	case "government":
		$sql = "SELECT COUNT(government.order_gs) 
				FROM government 
				INNER JOIN gs_id ON gs_id.order_gs=government.order_gs 
				WHERE gs_id.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(government.order_gs)'];
		break;
	case "missive":
		$sql = "SELECT COUNT(file_book.file_book_id)  
				FROM file_book 
				INNER JOIN sended ON sended.file_book_id=file_book.file_book_id 
				INNER JOIN type_book ON file_book.file_book_type=type_book.id
				WHERE sended.personal_id='$session_id'";		
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(file_book.file_book_id)'];
		break;
	case "project":
		$sql = "SELECT COUNT(pj_id) 
				FROM project 
				WHERE pj_charge='$session_id'";	
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(pj_id)'];
		break;
	case "mua":
		$sql = "SELECT COUNT(subjects.subjects_order)
				FROM subjects 
				INNER JOIN course ON subjects.course_id=course.course_id 
				WHERE subjects.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(subjects.subjects_order)'];
		break;
	case "adviser":
		$sql = "SELECT COUNT(adviser_id) 
				FROM adviser 
				WHERE personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(adviser_id)'];
		break;
	case "research":
		$sql = "SELECT COUNT(research.research_id) 
				FROM research 
				INNER JOIN rs_id ON rs_id.research_id=research.research_id
				INNER JOIN personal ON personal.personal_id=rs_id.personal_id 
				WHERE personal.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(research.research_id)'];
		break;	
	case "document":
		$sql = "SELECT COUNT(document.document_id) 
				FROM document 
				INNER JOIN doc_id ON document.document_id=doc_id.document_id
				INNER JOIN personal ON doc_id.personal_id = personal.personal_id
				WHERE personal.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(document.document_id)'];
		break;	
	case "article":
		$sql = "SELECT COUNT(article.article_id) 
				FROM article
				INNER JOIN at_id ON at_id.article_id=article.article_id
				INNER JOIN personal ON personal.personal_id=at_id.personal_id 
				WHERE personal.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(article.article_id)'];
		break;
	case "present":
		$sql = "SELECT COUNT(present.present_id) 
				FROM present
				INNER JOIN ps_id ON ps_id.present_id = present.present_id
				INNER JOIN personal ON ps_id.personal_id = personal.personal_id	
				WHERE personal.personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(present.present_id)'];
		break;
	case "academic":
		$sql = "SELECT COUNT(academic_id) 
				FROM academic 
				WHERE personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(academic_id)'];
		break;	
	case "teaching":
		$sql = "SELECT COUNT(teaching_id) 
				FROM teaching 
				WHERE personal_id='$session_id'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		return $row['COUNT(teaching_id)'];
		break;	
	}
}

function CountImgGallery($id){
$sql="SELECT Count(gallery_img.ref_g) AS sum FROM gallery_img WHERE gallery_img.ref_g = '$id'";
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
return $arr[sum]; 
}

function GetAdminName($id){
$sql="SELECT a_name FROM admin WHERE a_id = '$id'";
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
return $arr[a_name]; 
}

function GetNewsCat($id){
$sql="SELECT nc_name FROM news_cat WHERE nc_id = '$id'";
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
return $arr[nc_name]; 
}

function GetDays($sStartDate, $sEndDate){
 $days = (strtotime($sEndDate) - strtotime($sStartDate)) / (60 * 60 * 24);
  return $days; 
}

function Thai_date($day){
$date = $day;
$thyear = substr($date,0,4);$month = substr($date,5,2);$thday = substr($date,8,2);
    if($thday <10)
       $thday = substr($thday,1,1);
       
    /*$thMonth = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน",
                     "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");*/
    
    $thMonth = array("ม.ค.","ก.พ.","มี.ค.","ม.ย.","พ.ค.","มิ.ย.",
                     "ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
    
    $thyear +=543;
    
    $day = $thday." ".$thMonth[$month-1]." ".$thyear;  
    return $day;
}

function ThaiTimeConvert($timestamp="",$full="",$showtime=""){
	global $SHORT_MONTH, $FULL_MONTH, $DAY_SHORT_TEXT, $DAY_FULL_TEXT;
	$day = @date("l",$timestamp);
	$month = @date("n",$timestamp);
	$year = @date("Y",$timestamp);
	$time = @date("H:i:s",$timestamp);
	$times = @date("H:i",$timestamp);
	if($full){
		$ThaiText = $DAY_FULL_TEXT[$day]." ที่ ".@date("j",$timestamp)." เดือน ".$FULL_MONTH[$month]." พ.ศ.".($year+543) ;
	}else{
		$ThaiText = @date("j",$timestamp)." / ".$SHORT_MONTH[$month]." / ".($year+543);
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



$DAY_FULL_TEXT = array(
"Sunday" => "อาทิตย์",
"Monday" => "จันทร์",
"Tuesday" => "อังคาร",
"Wednesday" => "พุธ",
"Thursday" => "พฤหัสบดี",
"Friday" => "ศุกร์",
"Saturday" => "เสาร์"
);

$DAY_SHORT_TEXT = array(
"Sunday" => "อา.",
"Monday" => "จ.",
"Tuesday" => "อ.",
"Wednesday" => "พ.",
"Thursday" => "พฤ.",
"Friday" => "ศ.",
"Saturday" => "ส."
);

$SHORT_MONTH = array(
"1" => "ม.ค.",
"2" => "ก.พ.",
"3" => "มี.ค.",
"4" => "เม.ย.",
"5" => "พ.ค.",
"6" => "มิ.ย.",
"7" => "ก.ค.",
"8" => "ส.ค.",
"9" => "ก.ย.",
"10" => "ต.ค.",
"11" => "พ.ย.",
"12" => "ธ.ค."
);

$FULL_MONTH = array(
"1" => "มกราคม",
"2" => "กุมภาพันธ์",
"3" => "มีนาคม",
"4" => "เมษายน",
"5" => "พฤษภาคม",
"6" => "มิถุนายน",
"7" => "กรกฏาคม",
"8" => "สิงหาคม",
"9" => "กันยายน",
"10" => "ตุลาคม",
"11" => "พฤศจิกายน",
"12" => "ธันวาคม"
);

$FULL_MONTH2 = array(
"01" => "มกราคม",
"02" => "กุมภาพันธ์",
"03" => "มีนาคม",
"04" => "เมษายน",
"05" => "พฤษภาคม",
"06" => "มิถุนายน",
"07" => "กรกฏาคม",
"08" => "สิงหาคม",
"09" => "กันยายน",
"10" => "ตุลาคม",
"11" => "พฤศจิกายน",
"12" => "ธันวาคม"
);

function dateDiff($date1,$date2){
	$diff = abs(strtotime($date2) - strtotime($date1));
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	if(($year==0) && ($months==0) && ($days==0)){
		return "A FEW HOURS AGO";
	}elseif(($year==0) && ($months==0)){
		return "$days DAYS AGO";
	}elseif($year==0){
		return "$months MONTHS $days DAYS AGO";
	}else{
		return "$years YEARS $months MONTHS $days DAYS AGO";
	}
}

function dateDiff_piya($date1,$date2){
	$diff = abs(strtotime($date2) - strtotime($date1));
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	if(($year==0) && ($months==0) && ($days==0)){
		return "1";
	}elseif(($year==0) && ($months==0)){
		return $days+1;
	}elseif($year==0){
		return $months.' เดือน '.$days+1;
	}else{
		return $years.' ปี '.$months.' เดือน '.$days+1;
	}
}


?>
