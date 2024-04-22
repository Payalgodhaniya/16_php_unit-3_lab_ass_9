<?php
$host = "localhost";
$username = "root";
$passwd = " ";
$dbname = "user";
$con = mysqli_connect($host, $username, $passwd, $dbname);
if($con){
print("Connection Established Successfully");
}else{
print("Connection Failed ");
}?>
