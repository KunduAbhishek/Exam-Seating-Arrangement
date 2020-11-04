<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

</head>
<body>
<?php
 require('connect.inc.php');
 session_start();
 $ip_addr=$_SERVER['REMOTE_ADDR'];

 if (isset($_POST['username'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysqli_real_escape_string($conn,$username);
 $password = stripslashes($password);
 $password = mysqli_real_escape_string($conn,$password);
 //Checking is user existing in the database or not
 //$password='".md5($password)."';
 //echo $password;
 $query = "SELECT users_id FROM `users` WHERE username='$username' and password='$password'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}

 if($rows==1){
	 $users_id=mysqli_result($result,0);
 $_SESSION['users_id'] = $users_id;
 header("Location: core.php"); // Redirect user to index.php
 }else{
 header("Location: wrong.html");//echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.html'>Login</a></div>";
function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
 }
 }
?>


</body>
</html>


