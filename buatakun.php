<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('dashboard.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "provide username !";	
	}
	else if($umail=="")	{
		$error[] = "provide email id !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM buatakun WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "sorry username already taken !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('buatakun.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
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

    <title>Buat Akun</title>

    <!-- Bootstrap core CSS -->
    <link href="login/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="login/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="login/css/style.css" rel="stylesheet">
    <link href="login/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">Buat akun sekarang</h2>
					        <?php
						if(isset($error))
						{
						 	foreach($error as $error)
						 	{
								 ?>
			                     <div class="alert alert-danger">
			                        <i class="fa fa-warning"></i> &nbsp; <?php echo $error; ?>
			                     </div>
			                     <?php
							}
						}
						else if(isset($_GET['joined']))
						{
							 ?>
			                 <div class="alert alert-info">
			                      <i class="fa fa-sign-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
			                 </div>
			                 <?php
						}
						?>
		        <div class="login-wrap">
	                	<input type="tex" class="form-control"  name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $uname;}?>" />
						<!--<input type="text" class="form-control" maxlength="12"  placeholder="No Handphone" onkeypress="return">-->
			            <input type="text" class="form-control"  name="txt_umail" placeholder="Email" value="<?php if(isset($error)){echo $umail;}?>" />
			            <input type="password" class="form-control" name="txt_upass" placeholder="Password">
			            <br>
			             <div class="clearfix"></div>
						    <div class="form-group">
				            	<button type="submit" name="btn-signup" class="btn btn-primary btn-block" ><i class="fa fa-lock"></i>&nbsp;Buat Akun</button>
				            </div>
			            <hr>
			            
			            <div class="login-social-link centered">
			            <p>atau kamu bisa masuk melalui jaringan sosial</p>
			                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
			                <button class="btn btn-google" type="submit"><i class="fa fa-google"></i> Google+</button>
			            </div>
			            <div class="registration">
			                atau kembali<br/>
			                 
			                <a class="" href="login.php">
			                    <i class="fa fa-sign-in"></i>login
			                </a>
			                <a>||</a>
			                <a class="" href="index.php">
			                    <i class="fa fa-home"></i>Home
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
