<?php 
include('checksession.php');
require 'connect.php';
echo $id_delete = $_REQUEST['id'];

$sql = "DELETE FROM package.name_package WHERE id_package = $id_delete";

if($result = mysqli_query($connect, $sql)){

    echo "<script>";
    echo "alert('ลบข้อมูลออกแล้ว')";
    echo "</script>";

header( "location: insert_namePackage.php" );


}else {
    echo "<script>";
    echo "alert('Errordeleteing.....')";
    echo "</script>";

    echo mysqli_error($connect);
    }



    
       



    

?>