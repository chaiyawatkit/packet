<?php 
include('checksession.php');
$host="localhost";
$user="root";
$password="";
$database="package";
$connect = mysqli_connect($host,$user,$password,$database) or die ("error connect");
?>

