<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>


<!DOCTYPE HTML>
<html>
<head>	
    <style type="text/css">
        div
        {
            border: 1px solid blac;
        }
    </style>
<title> About US </title>
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
		      <div id="search_wrapper">
         <div id="search_form" class="clearfix">
         <h1>Start your job search</h1>
            <p>
                <form action="jobs.php">
             <input type="text" class="text" name="search" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
            
             <label class="btn2 btn-2 btn2-1b"><input type="submit" name="btnsearch" value="Find Jobs"></label>
            </form>
            </p>
         </div>
       </div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div>
        
        <h2>About Us</h2>

       <div class="col-md-4">
           
       </div>
         <div class="col-md-4" style="text-align: center;">
           <h3 style="color: #F15F43">
               Job Portal site
           </h3><br>
           <p>Copyright © 2018 Job Portal . All Rights Reserved . </p>
           <p>Design and Developed by Saurabh Bhende</p><br>
           <h3 style="color: #F15F43">Contact Us</h3>
           Mob : 7020499227<br>
           Email : saurabhkalaskar50@gmail.com
       </div>
        <div class="col-md-4">
           
       </div>
        
    </div>
 </div>
</div><br><br><br>

<?php include "footer.php"; ?>
</body>
</html>	