<?php
require('connect.inc.php');
//include 'nlogin.html';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$ref=$_SERVER['HTTP_REFERER'];
/*$ip_addr=$_SERVER['REMOTE_ADDR'];
$q="INSERT INTO visitors VALUES('$ip_addr')";

mysqli_query($q);
*/

function loggedin()
{ //echo "to check";
  if(isset($_SESSION['users_id']))
          return true;
  else return false;

 }
  function mysqli_result($res, $row, $field=0) {
    $res->data_seek($row);
    $datarow = $res->fetch_array();
    return $datarow[$field];
}
 function getusers($conn,$field)
 { //echo $field;
   //echo "to get username";
   $id=$_SESSION['users_id'];
   //echo $id;
    $query = "SELECT $field FROM `users` WHERE users_id='$id'";
 $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
 $rows = mysqli_num_rows($result);
 if($rows==1){
 return mysqli_result($result,0,$field);

 }
 }



  ?>