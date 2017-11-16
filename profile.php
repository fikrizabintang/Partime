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
    <title>Profile</title>
    <!-- Bootstrap core CSS -->
    <link href="login/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="login/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Profile"></div>
              </div>
            <a href="dashboard.php" class="logo"><b><font color="#ffffff">PARTTIMER</font></b></a>
            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu">
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
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">
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
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"  id="nav-accordion ">
              
                  <p class="centered"><img src="images/team/1.jpg" class="img-circle" width="150"></a></p>
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
                  <li><a href="logout.php?logout=true"><span class= "fa fa-sign-out"></span>&nbsp;Sign Out</a></li>
                      
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
            <form  class="templatemo-login-form" method="post" enctype="multipart/form-data">
            <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
            <button name="btn-login" class="btn btn-theme btn-block" href="dashboard.php" type="submit"><i class="fa fa-edit"></i>&nbsp; Edit Profil</button>
            </div>
            <div class="templatemo-content-widget white-bg col-2">
              <div class="media margin-bottom-30">
                <div class="media-body">
                  <h2 class="media-heading text blue-text"><?php print($userRow['user_name']); ?></h2>
                  <p>Project Manager</p>
                </div>        
              </div>
               <div class="media-body">
                             Partimer adalah sebuah aplikasi berbasis web yang bisa menjadikan waktu luangmu menjadi uang yang bisa menaikan produktifitasmu , dengan berbagai fitur yang kami sediakan
                </div>            
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <img src="images/team/1.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text blue-text margin-bottom-5">@<?php print($userRow['user_name']); ?></h2>
              <h3 class="text-uppercase margin-bottom-70">Managing Director</h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>
           
          </div>                         
            </form>
          </div>
        </div>
           
    </section><! --/wrapper -->
      </section>
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
