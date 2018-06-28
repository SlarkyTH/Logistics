<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><strong>Entrepreneur</strong> Zone</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="padding:0px;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" id="Toggle" style="width: 45px;">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu" <?php if(!isset($_SESSION['logged'])) {echo " style='display: none'"; } ?>>
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php $rs=mysql_fetch_object(mysql_query("select * from entrepreneur where Enter_user_ref='".$_SESSION["xuser_ref"]."'")); echo $rs->Enter_Name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p><?php echo $rs->Enter_Name; ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>