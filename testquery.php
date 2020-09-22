<?php 
include('checksession.php');
require 'connect.php';
$sql = "UPDATE package.detail_package  SET  
 id_service=5050,
 id_package=1070,
 id_rounter=5,
 download='100',
 upload='100',
 data_mobile='100',
 min_mobile='100',
 sim_mobile='100',
 credit_phone='100',
 min_phone='100',
 network_phone='100',
 detail='100',
 detail_promotion='hthtfjry',
 detail_contract='http',
 discount='9000%',
 price_setup='100',
 price_register=' 100',
 price_equip=' 100',
 price_month='100',
 date_start_pro='100-5',
 date_end_pro='100-2' 
 WHERE id_log=5";



if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
    //header('Location: insert_detailPackage.php');
  } else {
    echo "Error updating record: " . mysqli_error($connect);
  }

?>
