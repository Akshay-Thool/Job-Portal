<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php
if (isset($_POST['submit'])) 
{
	
    $Image=$_FILES["images"]["name"];
    $Target="resume/".basename($_FILES["images"]["name"]);       
    

        $Query="INSERT INTO resume(res)VALUES('$Image')";
		$Execute=mysql_query($Query);	
        move_uploaded_file($_FILES["images"]["tmp_name"],$Target);	

       	if($Execute)
        {
            
            ?>   <script type="text/javascript">alert("Resume Uploaded Successfully We will contact you shortly");</script> <?php           

        }
        else
        {
		    ?>   <script type="text/javascript">alert("Something Went Wrong");</script> <?php			
        }
		

}


 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Upload Resume</title>
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
<?php Include('header.php'); ?>
<div class="banner_1">
	<div class="container">
		<div class="container">
		<div id="search_wrapper1">
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
</div>	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Upload Your Resume</h2>
        <div class="search_form1">
		    <form action="" method="post" enctype="multipart/form-data">
			  <br>
			  <input type="file" name="images">
			  <input type="submit" name="submit" value="Post your CV">
	        </form>
	    </div>
    </div>
 </div> 
</div>
<?php Include('footer.php'); ?>
</body>
</html>	