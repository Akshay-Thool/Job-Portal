<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 

$getid=$_GET['click'];
$Query="SELECT * FROM jobs WHERE id='$getid' ";
$Execute=mysql_query($Query);
while($DataRows=mysql_fetch_array($Execute))
{
	$EName=$DataRows['name'];
	$EDesc=$DataRows['desp'];
	$EDetails=$DataRows['details'];
	$Eprofile=$DataRows['cprofile'];
	$Elogo=$DataRows['logo'];

	$FJNAME=$DataRows['jname'];
	$FNUMBER=$DataRows['number'];
    $FDB_EMAIL=$DataRows['db_email'];
    $FWORK=$DataRows['work'];
    $FLOGO=$DataRows['logo'];
   	$FDATE=$DataRows['date'];
   	$FCLOC=$DataRows['location'];
}	

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal</title>
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
<?php include("header.php"); ?>
<div class="banner_1">
	<div class="container">
		
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	   	<h2> <?php echo $FJNAME; ?> </h2>
	   	<h3>Company Name :</h3>
	   		<div><?php echo $EName; ?><br><?php echo $FDATE; ?><br>Location : <?php echo $FCLOC; ?> </div><br>
	   	<h3>Company Profile :</h3>
		<p>	
				<?php echo $Eprofile; ?>
		</p>	
	   	<h3>Description :</h3>
	       <p> <?php echo $EDesc; ?> </p>
<h3>Other Details :</h3>
	       <p> <?php echo $EDetails; ?> </p>	       <br>
<h3>Experience</h3>
			<p>At Least: <?php echo $FWORK; ?> year</p><br>
<h3>Contact Details</h3>
	<div>
		<h5>Email : </h5><?php echo $FDB_EMAIL; ?><br>
		<h5>Contact US : </h5><?php echo $FNUMBER; ?><br>
	</div>	       

<form action="" method="" >
	<br><input class="btn btn-success btn-lg" type="submit" name="send" value="Apply for job"><br><br>
</form>  
          
       </div>

        <div class="col-md-3">
	   	  <img height="500px" width="500px" src="images/<?php echo $Elogo; ?>" class="img-responsive" alt=""/></div>
       </div>
       <div class="clearfix"><br> </div>
    </div>
</div>    
<?php Include('footer.php'); ?>
</body>
</html>	
