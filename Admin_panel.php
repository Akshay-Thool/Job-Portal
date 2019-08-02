<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 

/*if (isset($_POST['login'])) 
{
	$Username=mysql_real_escape_string($_POST["Uname"]);
	$Password=mysql_real_escape_string($_POST["pass"]);

	if (empty($Username) || empty($Password)) 
	{
		$_SESSION['ErrorMessage']="All fields must be field out";
		Redirect_to("Admin.php");
	}
	else
	{
		$Found_Account=Admin_Login_attempt($Username,$Password);
		$_SESSION["User_Id"]=$Found_Account["id"];
		$_SESSION["User-name"]=$Found_Account["db_name"];
		
	}
}*/

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
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
		       		        
		       
		        <li><a href="add_new_job.php">Add New Job</a></li>
		        <li><a href="resume.php">Logout</a></li>

		         
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>








<div class="banner_1">
	 
</div>	
<div class="container">
    <div class="single">  
	   
<div class="table table-responsive">	   	  
	 <table class="table table-striped table-hover">
	 	<tr>
	 		<th>Sr.No.</th>
	 		<th>Banner</th>
	 		<th>Name</th>
	 		<th>Date</th>
	 		
	 		
	 		<th>Description</th>
	 		<th>Job Details</th>
	 		<th>Company Details</th>
	 		<th>Actions</th>
	 		<th>Preview</th>
	 	</tr>
<?php  $Connection;

$ViewQuery="SELECT * FROM jobs";
$ViewExecute=mysql_query($ViewQuery);
$SRNO="0";
while ($DataRows=mysql_fetch_array($ViewExecute)) 
{
	$FID=$DataRows['id'];
	$FDATE=$DataRows['date'];
	$FNAME=$DataRows['name'];
	$FDESC=$DataRows['desp'];
	$FDETAILS=$DataRows['details'];
	$FCPROFILE=$DataRows['cprofile'];
	$FLOGO=$DataRows['logo'];
	$SRNO++;
	?>

	<tr>
		<td> <?php echo $SRNO; ?> </td>
		<td> <img width="200px" height="110px" src="images/<?php echo $FLOGO; ?>"> </td>
		<td style="color: blue"> <?php if (strlen($FNAME)>20) { $FNAME=substr($FNAME,0,20)."..."; }
		 echo $FNAME; ?> </td>
		<td> <?php echo $FDATE ?> </td>
		
		
		<td> <?php if (strlen($FDESC)>20) { $FDESC=substr($FDESC,0,20)."..."; }
		 echo $FDESC; ?> </td>
		<td> <?php if (strlen($FDETAILS)>12) { $FDETAILS=substr($FDETAILS,0,12)."..."; }
		 echo $FDETAILS; ?> </td>
		<td> <?php if (strlen($FCPROFILE)>20) { $FCPROFILE=substr($FCPROFILE,0,20)."..."; }
		echo $FCPROFILE; ?> </td>

		<td>
				<a href="Editjob.php?Update=<?php echo $FID; ?>"><span class="btn btn-warning">Edit</span></a>
				<a href="DeleteJob.php?Delete=<?php echo $FID; ?>"><span class="btn btn-danger">Delete</span></a>
		</td>
		<td>
				<a href="jobs_single.php?click=<?php echo $FID; ?>" ><span class="btn btn-success">Preview</span></a><br>			
		</td>

	</tr>	

<?php } ?>


 
	 </table>
	   	  
	 
	 
   </div>
   </div>

 </div>
</div>

<?php Include('footer.php'); ?>
</body>
</html>	