<?php
include('checksession.php');
require 'connect.php';
 $id_log = $_POST['id_log'];
  $nameService = $_POST['nameService'];
  $namePackage = $_POST['namePackage'];
  $router = $_POST['router'];
  $download = $_POST['download'];
  $upload = $_POST['upload'];
  $data = $_POST['data'];
  $call = $_POST['call'];
  $sim = $_POST['sim'];
  $cradit = $_POST['cradit'];
  $call_phone = $_POST['call_phone'];
  $network = $_POST['network'];
  $detail = $_POST['detail'];
  $pomotionDetail = $_POST['pomotionDetail'];
  $contract = $_POST['contract'];
  $discount = $_POST['discount'];
  $costInstall = $_POST['costInstall'];
  $costRegister = $_POST['costRegister'];
  $costEquipment = $_POST['costEquipment'];
  $costMonth = $_POST['costMonth'];
  $dateStart = $_POST['dateStart'];
  $dateEnd = $_POST['dateEnd'];


 $sql = "UPDATE package.detail_package  SET  
 id_service=$nameService,
 id_package=$namePackage,
 id_rounter=$router,
 download='$download',
 upload='$upload',
 data_mobile='$data',
 min_mobile='$call',
 sim_mobile='$sim',
 credit_phone='$cradit',
 min_phone='$call_phone',
 network_phone='$network',
 detail='$detail',
 detail_promotion='$pomotionDetail',
 detail_contract='$contract',
 discount='$discount',
 price_setup='$costInstall',
 price_register=' $costRegister',
 price_equip=' $costEquipment',
 price_month='$costMonth',
 date_start_pro='$dateStart',
 date_end_pro='$dateEnd' 
 WHERE id_log=$id_log";



if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
    header('Location: insert_detailPackage.php');
  } else {
    echo "Error updating record: " . mysqli_error($connect);
  }

?>