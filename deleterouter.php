<?php 
include('checksession.php');
require 'connect.php';
echo $id_delete = $_REQUEST['id'];
$sql = "DELETE FROM package.name_rounter WHERE id_rounter = $id_delete";
$result = mysqli_query($connect, $sql);

if($result){

    header( "location: insert_namerouter.php" );
}else {

    echo "ERROR = ".mysqli_error($connect);
}
?>