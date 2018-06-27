<section class="sidebar">
      <!-- Sidebar user panel -->
      
      <div class="user-panel" <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
        <div class="pull-left info">
          <p><?php $rs=mysql_fetch_object(mysql_query("select * from entrepreneur where Enter_user_ref='".$_SESSION["xuser_ref"]."'")); echo $rs->Enter_Name; ?></p>
          <li><i class="fa fa-circle text-success"></i> Online</li>
        </div>
        <br><br>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>></li>
        <!-- <li class="header">MAIN NAVIGATION</li> -->

        <li>
          <a href="home.php">
            <i class="fa fa-desktop"></i> 
            <span>หน้าหลัก</span>
          </a>
        </li>

        <li>
          <a href="logistic.php">
            <i class="fa fa-truck"></i> 
            <span>ข้อมูลโลจิสติกส์</span>
          </a>
        </li>
        <li>
        </li>
        <li class = "service">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" id="clickservice"> <i class="fa fa-list"></i>&nbsp;&nbsp;<span>บริการ</span</a>
          <ul class="collapse" id="homeSubmenu">
          <li  data-toggle="collapse" data-target="#products" class="collapsed active">
            <a href="#"><i class="glyphicon glyphicon-tasks"></i><span>&nbsp;จัดการการขนส่ง</span></a>
          </li>
<<<<<<< HEAD
            <ul class="sub-menu collapse" id="products" style="padding-left:25px;">
              <li><a href="createTask.php"><span>สร้างใบงาน</span></a></li>
              <li><a href="createOrdersPaid.php"><span>ออกใบสั่งจ้าง</span></a></li>
              <li><a href="checkDelivery.php"><span>ตรวจสอบข้อมูลการส่งสินค้า</span></a></li>
=======
            <ul class="sub-menu collapse" id="products">
              <li><a href="createTask.php">สร้างใบงาน</a></li>
              <li><a href="createOrdersPaid.php">ออกใบสั่งจ้าง</a></li>
              <li><a href="checkDelivery.php">ตรวจสอบข้อมูลการส่งสินค้า</a></li>
              <li><a href="request.php">ร้องขอผู้ส่ง</a></li>
>>>>>>> 4495fe2fa2157c65c0e8de364393caba027bea1b
            </ul>
            <li><a href="route.php"><i class="fa fa-rocket"></i><span>&nbsp;&nbsp;จัดการเส้นทาง</span></a></li>
            <li><a href="fuelResources.php"><i class="fa fa-tint"></i><span>&nbsp;&nbsp;จัดการทรัพยากรเชื้อเพลิง</span></a></li>
            <li><a href="managementAccounting.php"><i class="fa fa-user"></i><span>&nbsp;&nbsp;จัดการทางบัญชี</span></a></li>
            <li><a href="checkPayments.php"><i class="fa fa-dollar"></i><span>&nbsp;&nbsp;ตรวจสอบการชำระเงิน</span></a></li>
            <li><a href="message.php"><i class="fa fa-comments"></i><span>&nbsp;&nbsp;จัดส่งข้อความ</span></a></li>
            <li><a href="statistic.php"><i class="fa fa-bar-chart"></i><span>&nbsp;&nbsp;สถิติ</span></a></li>
            <li><a href="report.php"><i class="fa fa-rocket"></i><span>&nbsp;&nbsp;พิมพ์รายงาน</span></a></li>
          </ul>
        </li>
        
        <li>
          <a href="news.php">
            <i class="fa fa-bullhorn"></i> 
            <span>ข่าวสารและกิจกรรม</span>
          </a>
        </li>

        <li>
          <a href="contact.php">
            <i class="fa fa-paper-plane"></i> 
            <span>ติดต่อเรา</span>
          </a>
        </li>
        <!-- <li>
          <a href="request.php">
            <i class="fa fa-user"></i> 
            <span>Request Car</span>
          </a>
        </li>
        
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> 
            <span>Main Control</span>
          </a>
        </li>
        
        <li>
          <a href="product.php">
            <i class="fa fa-shopping-basket"></i> 
            <span>Pending Send</span>
          </a>
        </li>
        
        <li>
          <a href="order.php">
            <i class="fa fa-shopping-basket"></i> 
            <span>Pending Recieve</span>
          </a>
        </li>
        
        <li>
          <a href="history.php">
            <i class="fa fa-history"></i> 
            <span>Order have been sent</span>
          </a>
        </li>
        
        <li>
          <a href="report.php">
            <i class="fa fa-newspaper-o"></i> 
            <span>Report</span>
          </a>
        </li>
         -->
        <li <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> 
            <span>ออกจากระบบ</span>
          </a>
        </li>
        <li <?php if(isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
              <a href="../login.php">
                <i class="fa fa-user"></i>
                <span>เข้าสู่ระบบ
                </span>
              </a>
            </li>

            <li <?php if(isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
              <a href="../register_all.php">
                <i class="fa fa-user"></i>
                <span>สมัครสมาชิก
                </span>
              </a>
            </li>
        <!-- <li><a href="#">จัดการชำระเงิน</a></li>
        <li><a href="#">จัดส่งข้อความ</a></li>
        <li><a href="#">สถิติ</a></li>
        <li><a href="report.php">พิมพ์รายงาน</a></li> -->
      </ul>
    </section>
    <style>
    #products{    
    width: 190px;
    padding-top: 5px;
    padding-bottom:5px;    
    padding-left: 10px;
    }
    #products>li{
      padding-top: 8px;
    }
    .service>ul>li{
      padding-top:10px;
    }
    </style>
        <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>

    <script>
    var togglestatus = false
    $(document).ready(function(){
      $('#Toggle').click(function(){
        togglestatus=!togglestatus        
        if($('#clickservice').attr("aria-expanded")==="true") {
          
          $('#clickservice').click();                
        }     
      });
      $('#clickservice').click(function(){
        if($('#clickservice').attr("aria-expanded")==="false" && togglestatus == true) {
          $('#Toggle').click()            
        }
        else if($('#clickservice').attr("aria-expanded")==="true" && togglestatus == true){
          $('#clickservice').click
          $('#Toggle').click()
        }
        
      });
    });
      
    </script>
    
