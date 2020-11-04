<?php
$conn_error='could not connect';
$host='localhost';
$user='root';
$pass='';
$db='ipp';
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn->connect_error)
	die("Connection failed:".$conn->connect_error);



?>