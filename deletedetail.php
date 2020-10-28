<?php 
include('checksession.php');
require 'connect.php';
echo $id_log = $_REQUEST['id'];

$query = "DELETE FROM package.detail_package WHERE id_log= '$id_log'";
$result = mysqli_query($connect,$query);

if($result){

   header('location: viewdetailPackage.php');

}

?>