<?php 
include('checksession.php');
require 'connect.php';
echo  $name=$_POST['name'];
echo $name_package=$_POST['name_package'];
$type_package = $_POST['typepackage'];

$sql = "INSERT INTO name_package  VALUES ('', '$name', '$name_package','$type_package')";


$result = mysqli_query($connect, $sql);

if($result){
    echo '<script>';
    echo 'alert("เพิ่มข้อมูลสำเร็จ")';
    echo '</script>';
    header("Refresh:0; url=insert_namePackage.php");

}else {
    echo '<script>';
    echo 'alert("ห้ามเว้นว่าง")';
    echo '</script>';
    header('Location: insert_namePackage.php');
}
