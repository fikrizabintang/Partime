<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('dashboard.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('dashboard.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Login</title>

    <link href="login/css/bootstrap.css" rel="stylesheet">
    <link href="login/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="login/css/style.css" rel="stylesheet">
    <link href="login/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" id="login-form">
		        <h2 class="form-login-heading">masuk sekarang</h2>
					<div id="error">
				        <?php
							if(isset($error))
							{
								?>
				                <div class="alert alert-danger">
				                   <i class="fa fa-warning"></i> &nbsp; <?php echo $error; ?> !
				                </div>
				                <?php
							}
						?>
				    </div>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" required />
        				<span id="check-e"></span>
		            <br>
		            <input type="password" class="form-control" name="txt_password" placeholder="Your Password" />
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.php#myModal"> Lupa password ?</a>
		
		                </span>
		            </label>
		            <button name="btn-login" class="btn btn-theme btn-block" href="dashboard.php" type="submit"><i class="fa fa-sign-in"></i>&nbsp; MASUK</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>atau kamu bisa masuk melalui jaringan sosial</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-google" type="submit"><i class="fa fa-google"></i> Google+</button>
		            </div>
		            <div class="registration">
		                tidak mempunyai akun ?<br/>
		                <a class="" href="buatakun.php">
		                    Buat akun
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Lupa password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Masukkan alamat e-mail kamu di bawah ini untuk mereset password</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="login/js/jquery.js"></script>
    <script src="login/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="login/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("images/login/login-back.png", {speed: 500});
    </script>
  </body>
</html>
