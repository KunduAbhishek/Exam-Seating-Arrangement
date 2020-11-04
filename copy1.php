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
<style>
.con{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	
	padding-bottom:1000px;
	height:550px;
	background-image:url(images/brown.png);
	background-position:center;
	background-repeat:repeat-y;
	
	width:100%;
	height:700px;
	color:black;

	background-attachment:scroll;
	
}

</style>
</head>

<body>
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
<a class="navbar-brand" href="index.html"><font size="6px">Bangalore Institute Of Technology</font><span>Department of CSE</span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 
						<li class="hvr-sweep-to-bottom"><a href="roomdetail.html">Room Arrangement</a></li>
						<li class="hvr-sweep-to-bottom"><a href="updatedetails.php" class="scroll">Update Details>
						<li class="hvr-sweep-to-bottom"><a href="view.html" class="scroll">View Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="logout.php" class="scroll">Logout</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>


<div class="con">
<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1></h1>
		<h2>Exam Seating Arrangement</h2>
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
  </div>
 
	<!--//forms-->
	</div>
<?php
include "stylee.css";
require "connect.inc.php";
echo "<style>
table,td,th{
	border:solid 1px black;
	font-size:15px;
	font-family:sans-serif;
	text-align:center;
	padding:2px;
	width:550px;
}
tbody tr:nth-child(odd){
	background-color:DarkGrey;
}	
tbody tr:nth-child(even){
	background-color:lightGrey;
}	
.roundedCorners { 
  border: 1px solid DarkOrange;
  border-radius: 13px; 
  border-spacing: 0;
  }
.roundedCorners td, 
.roundedCorners th { 
  border-bottom: 1px solid DarkOrange;
  padding: 10px; 
  }
.roundedCorners tr:last-child > td {
  border-bottom: none;
}

</style>";
//invigilator
$inv1=$_POST['inv1'];
if(isset($_POST['inv2']))
	$inv2=$_POST['inv2'];
if(isset($_POST['inv3']))
	$inv3=$_POST['inv3'];
if(isset($_POST['inv4']))
	$inv4=$_POST['inv4'];
if(isset($_POST['inv5']))
	$inv5=$_POST['inv5'];
if(isset($_POST['inv6']))
	$inv6=$_POST['inv6'];
if(isset($_POST['inv7']))
	$inv7=$_POST['inv7'];
if(isset($_POST['inv8']))
	$inv8=$_POST['inv8'];
if(isset($_POST['inv9']))
	$inv9=$_POST['inv9'];
if(isset($_POST['inv10']))
	$inv10=$_POST['inv10'];
if(isset($_POST['inv11']))
	$inv11=$_POST['inv11'];
if(isset($_POST['inv12']))
	$inv12=$_POST['inv12'];
if(isset($_POST['inv13']))
	$inv13=$_POST['inv13'];
if(isset($_POST['inv14']))
	$inv14=$_POST['inv14'];
if(isset($_POST['inv15']))
	$inv15=$_POST['inv15'];
if(isset($_POST['inv16']))
	$inv16=$_POST['inv16'];
if(isset($_POST['inv17']))
	$inv17=$_POST['inv17'];
if(isset($_POST['inv18']))
	$inv18=$_POST['inv18'];
if(isset($_POST['inv19']))
	$inv19=$_POST['inv19'];
//Rooms
$id=1;
$rm1=$_POST['roomno1'];
$qu2="SELECT row FROM rooms where room_no='$rm1'";
$res1=mysqli_query($conn,$qu2);
$rows1 = mysqli_num_rows($res1);
if($rows1==1){
	 $r1=mysqli_result($res1,0);
}
$qu3="SELECT col FROM rooms where room_no='$rm1'";
$res1=mysqli_query($conn,$qu3);
$rows1 = mysqli_num_rows($res1);
if($rows1==1){
	 $c1=mysqli_result($res1,0);
}
$id=sitting($conn,$r1,$c1,$rm1,$id,$inv1);
if(isset($_POST['roomno2']))
{
	$rm2=$_POST['roomno2'];
	$row2=get_row($conn,$rm2);
	$col2=get_col($conn,$rm2);
	$id= sitting($conn,$row2,$col2,$rm2,$id+1,$inv2);
}
if(isset($_POST['roomno3']))
{
	$rm3=$_POST['roomno3'];
	$row3=get_row($conn,$rm3);
	$col3=get_col($conn,$rm3);
	$id=sitting($conn,$row3,$col3,$rm3,$id+1,$inv4);
}
if(isset($_POST['roomno4']))
{
	$rm4=$_POST['roomno4'];
	$row4=get_row($conn,$rm4);
	$col4=get_col($conn,$rm4);
	$id=sitting($conn,$row4,$col4,$rm4,$id+1,$inv5);
}
if(isset($_POST['roomno5']))
{
	$rm5=$_POST['roomno5'];
	$row5=get_row($conn,$rm5);
	$col5=get_col($conn,$rm5);
	$id=sitting($conn,$r0w5,$col5,$rm5,$id+1,$inv5);
}
if(isset($_POST['roomno6']))
{
	$rm6=$_POST['roomno6'];
	$row6=get_row($conn,$rm6);
	$col6=get_col($conn,$rm6);
	$id=sitting($conn,$row6,$col6,$rm6,$id+1,$inv6);
}
if(isset($_POST['roomno7']))
{
	$rm7=$_POST['roomno7'];
	$row7=get_row($conn,$rm7);
	$col7=get_col($conn,$rm7);
	$id=sitting($conn,$row7,$col7,$rm7,$id+1,$inv7);
}
if(isset($_POST['roomno8']))
{
	$rm8=$_POST['roomno8'];
	$row8=get_row($conn,$rm8);
	$col8=get_col($conn,$rm8);
	$id=sitting($conn,$row8,$col8,$rm8,$id+1,$inv8);
}
if(isset($_POST['roomno9']))
{
	$rm9=$_POST['roomno9'];
	$row9=get_row($conn,$rm9);
	$col9=get_col($conn,$rm9);
	$id=sitting($conn,$row9,$col9,$rm9,$id+1,$inv9);
}
if(isset($_POST['roomno10']))
{
	$rm10=$_POST['roomno10'];
	$row10=get_row($conn,$rm10);
	$col10=get_col($conn,$rm10);
	$id=sitting($conn,$row10,$col10,$rm10,$id+1,$inv10);
}
if(isset($_POST['roomno11']))
{
	$rm11=$_POST['roomno11'];
	$row11=get_row($conn,$rm11);
	$col11=get_col($conn,$rm11);
	$id=sitting($conn,$row11,$col11,$rm11,$id+1,$inv11);
}
if(isset($_POST['roomno12']))
{
	$rm12=$_POST['roomno12'];
	$row12=get_row($conn,$rm12);
	$col12=get_col($conn,$rm12);
	$id=sitting($conn,$row12,$col12,$rm12,$id+1,$inv12);
}
if(isset($_POST['roomno13']))
{
	$rm13=$_POST['roomno13'];
	$row13=get_row($conn,$rm13);
	$col13=get_col($conn,$rm13);
	$id=sitting($conn,$row13,$col13,$rm13,$id+1,$inv13);
}
if(isset($_POST['roomno14']))
{
	$rm14=$_POST['roomno14'];
	$row14=get_row($conn,$rm14);
	$col14=get_col($conn,$rm14);
	$id=sitting($conn,$row14,$col14,$rm14,$id+1,$inv14);
}
if(isset($_POST['roomno15']))
{
	$rm15=$_POST['roomno15'];
	$row15=get_row($conn,$rm15);
	$col15=get_col($conn,$rm15);
	$id=sitting($conn,$row15,$col15,$rm15,$id+1,$inv15);
}
if(isset($_POST['roomno16']))
{
	$rm16=$_POST['roomno16'];
	$row16=get_row($conn,$rm16);
	$col16=get_col($conn,$rm16);
	$id=sitting($conn,$row16,$col16,$rm16,$id+1,$inv16);
}
if(isset($_POST['roomno17']))
{
	$rm17=$_POST['roomno17'];
	$row17=get_row($conn,$rm17);
	$col17=get_col($conn,$rm17);
	$id=sitting($conn,$row17,$col17,$rm17,$id+1,$inv17);
}
if(isset($_POST['roomno18']))
{
	$rm18=$_POST['roomno18'];
	$row18=get_row($conn,$rm18);
	$col18=get_col($conn,$rm18);
	$id=sitting($conn,$row18,$c0l18,$rm18,$id+1,$inv18);
}
if(isset($_POST['roomno19']))
{
	$rm19=$_POST['roomno19'];
	$row19=get_row($conn,$rm19);
	$col19=get_col($conn,$rm19);
	$id=sitting($conn,$row19,$col19,$rm19,$id+1,$inv19);
}

	


$qu1="Select COUNT(*) as total FROM student";
$res2=mysqli_query($conn,$qu1);
$rows2 = mysqli_num_rows($res2);
if($rows2==1)
	 $st=mysqli_result($res2,0);

function sitting($conn,$r1,$c1,$rm,$id,$inv){
	$tm=$_POST['time'];
	$cap=1;
	$yr1=$_POST['y1'];
$yr2=$_POST['y2'];
$yr3=$_POST['y3'];
	echo "<table  class='roundedCorners' align='center'><caption><h2><center>Room No: ".$rm." Invigilator: ".$inv." Time: ".$tm." Room Count ".($r1*$c1)."</center></h2></caption><tr><th>".$yr1."</th><th>".$yr2."</th><th>".$yr3."</th></tr>";
	while($cap<=($r1*$c1/3)){
	$sql="Select * From student where id='$id'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_num_rows($result);
	if($rows>0){
		while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["Second_Year"]."</td><td>".$row["Third_Year"]."</td><td>".$row["Fourth_Year"]."</td></tr>";
		$v1=$row["Second_Year"];
		$v2=$row["Third_Year"];
		$v3=$row["Fourth_Year"];
		$sql1="INSERT INTO allotment VALUES('$rm','$v1','$v2','$v3','$inv','$tm')";
		mysqli_query($conn,$sql1);
		}
	}
	$id=$id+1;
	$cap=$cap+1;
	
}
$id=$r1*$c1/3;
echo "</table>";
return $id;
}

function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

function get_row($conn,$rm)
{
	$qu2="SELECT row FROM rooms where room_no='$rm'";
$res1=mysqli_query($conn,$qu2);
$rows1 = mysqli_num_rows($res1);
if($rows1==1){
	 $r1=mysqli_result($res1,0);
}
return $r1;	
}

function get_col($conn,$rm)
{
	$qu3="SELECT col FROM rooms where room_no='$rm'";
$res1=mysqli_query($conn,$qu3);
$rows1 = mysqli_num_rows($res1);
if($rows1==1){
	 $c1=mysqli_result($res1,0);
}
return $c1;
}

/**$cap=$r1*$r2;

$t1=$a1+$cap/3;
$t2=$b1+$cap/3;
$t3=$c1+$cap/3;

echo "Next Roll number to be allocated for ".$yr1." year is ".$t1."<br>";
echo "Next Roll number to be allocated for ".$yr2." year is ".$t2."<br>";
echo "Next Roll number to be allocated for ".$yr3." year is ".$t3."<br>";
echo "<table align='center'><caption><h2><center>Room No: ".$rm."</center></h2></caption><tr><th>".$yr1."</th><th>".$yr2."</th><th>".$yr3."</th></tr>";

for($i=0;$i<$cap/3;$i++){
if(strlen($a1)==1) $a1="00".$a1;
if(strlen($b1)==1) $b1="00".$b1;
if(strlen($c1)==1) $c1="00".$c1;
if(strlen($a1)==2) $a1="0".$a1;
if(strlen($b1)==2) $b1="0".$b1;
if(strlen($c1)==2) $c1="0".$c1;
echo "<tr>";
$usn1="1BI18CS".$a1;
$usn2="1BI17CS".$b1;
$usn3="1BI16CS".$c1;
echo "<td>".$usn1."</td>";
echo "<td>".$usn2."</td>";
echo "<td>".$usn3."</td>";

echo "</tr>";
$qu3="INSERT INTO allotment VALUES('$rn','$usn1','$usn2','$usn3')";
mysqli_query($conn,$qu3);
$a1=$a1+1;
$b1=$b1+1;
$c1=$c1+1;
}
echo "</table>";*/

?>

	</div>


</body>
</html>
