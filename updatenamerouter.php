<?php 
include('checksession.php');
require 'connect.php';

 $id_router = $_POST['id_router'];
 $nameService = $_POST['nameService'];
 $nameRouter = $_POST['nameRouter'];
 $typeRouter = $_POST['typeRouter'];

$query = " UPDATE package.name_rounter SET id_service=$nameService,detail_rounter='$nameRouter',type_rounter='$typeRouter' WHERE id_rounter=$id_router";

if (mysqli_query($connect, $query)) {
    echo "Record updated successfully";
    header('Location: insert_namerouter.php');
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

?>