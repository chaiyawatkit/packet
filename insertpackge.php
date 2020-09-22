<?php 
include('checksession.php');
require 'connect.php';
echo  $name=$_POST['name'];
echo $name_package=$_POST['name_package'];

$sql = "INSERT INTO name_package  VALUES ('', '$name', '$name_package')";

if($name!= "" && $name_package!=""){
$result = mysqli_query($connect, $sql);
header('Location: insert_namePackage.php');
}else {
    echo '<script>';
    echo 'alert("ห้ามเว้นว่าง")';
    echo '</script>';
    header('Location: insert_namePackage.php');
}
