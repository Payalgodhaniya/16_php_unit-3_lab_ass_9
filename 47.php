<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "mydb";
//Creating a connection
$con = mysqli_connect($host, $username, $passwd, $dbname);
//Closing the connection
$res = mysqli_close($con);
if($res){
print("Connection Closed");
