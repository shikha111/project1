<?php 

session_start();
$con = mysqli_connect("localhost","root","","resume");

if(mysqli_connect_errno()){
	echo "failed to connect to mysql" .mysqli_connect_error();
}
else{
	echo "";
}








?>