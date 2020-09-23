<?php 
include('checksession.php');
require 'connect.php';

echo $id_pk = $_POST['id_pk'];
echo $service = $_POST['service'];
echo $name_package = $_POST['name_package'];
$type_package = $_POST['typepackage'];

$query = "UPDATE package.name_package SET id_service=$service,name_pack='$name_package',type_package='$type_package' WHERE id_package=$id_pk";
if (mysqli_query($connect, $query)) {
    echo "Record updated successfully";
    header('Location: insert_namerouter.php');
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }






?>