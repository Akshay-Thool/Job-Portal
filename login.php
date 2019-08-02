<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 
session_destroy();



if (isset($_POST['login'])) 
{
	$Username=mysql_real_escape_string($_POST["Uname"]);
	$Password=mysql_real_escape_string($_POST["pass"]);

	session_start();

//session_destroy();

if (isset($_SESSION['Uname'])) 
{
	
}
else if(isset($_POST['Uname']))
{
	$username=$_POST['Uname'];
	$_SESSION['Uname']=$username;
	
}

	if (empty($Username) || empty($Password)) 
	{
			?>   <script type="text/javascript">alert("All fields must be field out");</script> <?php
	}
	else
	{
		$Found_Account=Login_attempt($Username,$Password);
		$_SESSION["User_Id"]=$Found_Account["id"];
		$_SESSION["User-name"]=$Found_Account["db_name"];
		
		if ($Found_Account) 
		{
			$_SESSION['SuccessMessage']="Welcome {$_SESSION["User-name"]}";
			Redirect_to("jobs.php");
		}
		else
		{
			$_SESSION['ErrorMessage']="Username / Password not matched";
			Redirect_to("login.php");
			
		}
	}
}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
</head>  
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		       
		        
		        
		       
		        <li><a href="index.php">Home</a></li>
		        <li><a href="login.php">Login</a></li>
		        <li><a href="Admin.php">Admin</a></li>
		        <li><a href="about.php">About Us</a></li>	

		        
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3">
	   	  
	   	  </div>
	   	  
	   	  
	 </div>
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    <form action="" method="post">
                        <div class="section-title">
                            <h3>LogIn to your Account</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" name="Uname" required="required" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="pass" required="required" class="form-control " placeholder="Password">
                            </div>
                        </div>
                      
					     <div class="clearfix"> </div>
			        </div>
					<div class="login-btn">
					   <input type="submit" name="login" value="Log in">
					</div>
					</form>
					<div class="login-bottom">
					 <div class="social-icons">
						
						<h4>Don,t have an Account? <a href="register.php"> Register Now!</a></h4><br>
					 </div>
		           </div>
                </div>
         </div>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>	