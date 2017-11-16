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
    <title>Cari pekerjaan</title>
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
                </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"  id="nav-accordion ">
              
                  <p class="centered"><a href="profile.php"><img src="images/team/1.jpg" class="img-circle" width="150"></a></p>
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
              <div class="templatemo-content-widget white-bg col-lg-7">
                      <div class="media margin-bottom-30">
                        <div class="media-body">
                          <h2 class="media-heading text blue-text">Cari Pekerjaan</h2>
                        </div>        
                      </div>
                     <div class="custom-bar-chart">
                        <div class="media">
                             <div class="media-body">
                              <div class="col-lg-6">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                                </span>
                              </div>
                             </div>
                             <div class="col-lg-6">
                            <select class="form-control" >
                              <option value="volvo">Design</option>
                               <option value="saab">Programming</option>
                                <option value="mercedes">Bangunan</option>
                               <option value="audi">Input Data</option>
                              <option value="audi">Jaga Toko</option>
                            </select> 
                          </div>
                        </div>
                      </div>
                      <br>
                       <center>
                         <p>Jenis Pekerjaan</p>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="">Partime
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="">Projek
                        </label>
                       </center>
                       <div class="media">
                       <!--tabel responsived-->
                        <div class="table-responsive">          
                            <table class="table" style="background-color:white">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Pekerjaan/Projek</th>
                                  <th>Tanggal Mulai</th>
                                  <th>Upah (Rp)</th>
                                  <th>Lokasi</th>
                                  <th>Detail</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Buat Logo Komunitas</td>
                                  <td>30/April/2016</td>
                                  <td>300.000</td>
                                  <td>Semarang</td>
                                  <td><a href="#" class="btn btn-success">Detail </a></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Jaga Toko</td>
                                  <td>25/April/2016</td>
                                  <td>700.000</td>
                                  <td>Semarang</td>
                                  <td><a href="#" class="btn btn-success">Detail </a></td>
                                </tr>
                              </tbody>
                            </table>
                            </div>
                            <!--tabel responsived-->
                          </div>
                      </div>        
                    </div> 
                <div class="col-lg-4 templatemo-content-widget white-bg col-1 templatemo-position-relative">
              <div class="ds ">
                <h3>NOTIFICATIONS</h3>
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>2 Minutes Ago</muted><br/>
                             <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                          </p>
                        </div>
                      </div>
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>3 Hours Ago</muted><br/>
                             <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                          </p>
                        </div>
                      </div>
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>7 Hours Ago</muted><br/>
                             <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                          </p>
                        </div>
                      </div>
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>11 Hours Ago</muted><br/>
                             <a href="#">Mark Twain</a> commented your post.<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>18 Hours Ago</muted><br/>
                             <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                          </p>
                        </div>
                      </div>    
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->                       
              </form>
            </div>
          </div>
        </section>
      </section>

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
