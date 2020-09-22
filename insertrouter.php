<?php 
include('checksession.php');
require 'connect.php';
echo  $_nameService=$_POST['nameService'];
echo $_nameRouter=$_POST['nameRouter'];
echo $_typeRouter = $_POST['typeRouter'];

$sql = "INSERT INTO name_rounter  VALUES ('', '$_nameService', '$_nameRouter','$_typeRouter')";

if($_nameService != "" && $_nameRouter !="" && $_typeRouter ){
$result = mysqli_query($connect, $sql);
header('Location: insert_namerouter.php');
}else {

    echo '<script>';
    echo 'alert("ห้ามเว้นว่าง")';
    echo '</script>';
    header('Location: insert_namerouter.php');
}
?>