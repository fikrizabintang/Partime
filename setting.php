<?php
  require_once("session.php");
  require_once("class.user.php");
  $auth_user = new USER();
  $user_id = $_SESSION['user_session'];
  $stmt = $auth_user->runQuery("SELECT * FROM buatakun WHERE user_id=:user_id");
  $stmt->execute(array(":user_id"=>$user_id));
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Setting</title>

    <!-- Bootstrap core CSS -->
    <link href="login/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="login/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="login/lineicons/style.css">  
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link href="css/templatemo-style.css" rel="stylesheet">  
    
    <!-- Custom styles for this template -->
    <link href="login/css/style.css" rel="stylesheet">
    <link href="login/css/style-responsive.css" rel="stylesheet">

    <script src="login/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >
      <!--header start-->

      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Profile"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"><b><font color="#ffffff">PARTTIMER</font></b></a>
            <!--logo end--> 
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-tasks"></i>
                            <span>Kerja</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                            <a href="search.php">Cari Pekerjaan</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" >
                            <span>Memperkerjakan</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <a href="buatpekerjaan.php">Buat Pekerjaan</a>
                            </li>
                            <li>
                                <a href="index.html#">Lihat Pekerjaan saya</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>

        </header>
      <!--header end-->

      
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"  id="nav-accordion ">
              
                  <p class="centered"><a href="profile.php"><img src="images/team/1.jpg" class="img-circle"  width="150"></a></p>
                  <h5 class="centered"><?php print($userRow['user_name']); ?></h5>
                    
                  <li class="mt">
                      <a class="active" href="dashboard.php">
                          <i class="fa fa-user"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="setting.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Setting</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-question"></i>
                          <span>Help</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="index.php" >
                          <i class=" fa fa-sign-out"></i>
                          <span>Log out</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Setting</h2>
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="John">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Smith">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="email">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputConfirmNewPassword">
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">Alamat</label>
                    <input type="text" class="form-control" id="inputWithSuccess">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">kota</label>
                    <input type="text" class="form-control" id="inputWithSuccess">
                </div> 
              </div><div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">Provinsi</label>
                    <input type="text" class="form-control" id="inputWithSuccess">
                </div> 
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>                           
            </form>
          </div>
        </div>
           
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->

      <!--footer start-->
    <div class="templatemo_footerwrapper">
  <div class="container" align="center">
    <div class="row">
      <div class="col-md-12">Copyright &copy; 2016 <a href="#">Company Name</a></div>
    </div>
  </div>
</div>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="login/js/jquery.js"></script>
    <script src="login/js/jquery-1.8.3.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="login/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="login/js/jquery.scrollTo.min.js"></script>
    <script src="login/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="login/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="login/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="login/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="login/js/gritter-conf.js"></script>

  </body>
</html>
