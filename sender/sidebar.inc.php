<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left info">
          <p><?php $rs=mysql_fetch_object(mysql_query("select * from sender where sen_user_ref='".$_SESSION["xuser_ref"]."'")); echo $rs->sen_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <br />
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> 
            <span>Main Control</span>
          </a>
        </li>
        
        <li>
          <a href="order.php">
            <i class="ion ion-archive"></i>
            <span>Request</span>
          </a>
        </li>
        
        <li>
          <a href="cars.php">
            <i class="fa fa-car"></i> 
            <span>Lists of Cars</span>
          </a>
        </li>
        
        <li>
          <a href="drivers.php">
            <i class="fa fa-user"></i> 
            <span>Lists of Driver</span>
          </a>
        </li>
        
        <li>
          <a href="request.php">
            <i class="fa fa-car"></i> 
            <span>Request Car</span>
          </a>
        </li>
        
        <li>
          <a href="logout.php">
            <i class="fa fa-sign-out"></i> 
            <span>Logout</span>
          </a>
        </li>

      </ul>
    </section>