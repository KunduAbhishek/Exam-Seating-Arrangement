<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>View:: Seating Arragement</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body background-color="white">
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html"><img src="images/white.jpg" align="left" height="50" width="50"/></a>
<a class="navbar-brand" href="index.html">Bangalore Institute Of Technology<span>Department of CSE</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 <li class="hvr-sweep-to-bottom active"><a href="index.html" class="scroll">About Project</a></li>

						<li class="hvr-sweep-to-bottom active"><a href="login.html">Admin Login</a></li>
						<li class="hvr-sweep-to-bottom"><a href="faculty.php" class="scroll">Faculty</a></li>
						<li class="hvr-sweep-to-bottom"><a href="student.php" class="scroll">Student</a></li>
						
						
						<li class="hvr-sweep-to-bottom"><a href="register.html" class="scroll">Sign Up</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->


<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1>Faculty</h1>
	
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" action="" method="POST">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter your name:</label>
        <div class="col-sm-5">
           <input type="text" class="form-control" name="invg" >
        </div>
      </div>
      
	  
	  
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default btn-info">Submit</button>
        </div>
   
    </form>
  </div>
 
	<!--//forms-->
	</div>

<?php
/*echo "<form action='faculty.php' method='POST'>
ENTER YOUR NAME:<input type='text' name='invg'/><br>
<input type='submit' value='submit'/><br>
</form>";*/
require "connect.inc.php";
if(isset($_POST['invg'])){
$n=$_POST['invg'] ;
$q="SELECT ROOM_NO,Timing FROM allotment WHERE Faculty_Id='$n'";
$q1="SELECT Faculty_Name FROM faculty WHERE Faculty_Id='$n'";
$q2=@mysqli_query($conn,$q) or die(mysqli_error($conn));
$res=mysqli_query($conn,$q1)  or die(mysqli_error($conn));
$row1=mysqli_fetch_array($res,MYSQLI_BOTH);
$row = mysqli_fetch_array($q2,MYSQLI_BOTH);
echo "FACULTY NAME:  ";
echo $row1['Faculty_Name']."<br>";
echo "ROOM ALLOTED TO YOU:  ";    echo $row['ROOM_NO'];   echo "<br>";
echo "TIMING:  "; echo $row['Timing'];}
/*echo "<table>";
echo "<tr>";
echo "<td>" . $row['ROOM_NO'] . "</td>";
echo "</tr>";
echo "</table>";
*/
?>










	</div>
</div>
<!--short codes end here--></div></div>

</body>
</html>