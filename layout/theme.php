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
                                <a href="lihatposting.php">Lihat Pekerjaan saya</a>
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