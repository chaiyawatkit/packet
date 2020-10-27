<?php
include('checksession.php');
require 'connect.php';

 echo $nameService = $_POST['nameService'];
 echo $namePackage = $_POST['namePackage'];
 echo $router = $_POST['router'];
 echo $download = $_POST['download'];
 echo $upload = $_POST['upload'];
 echo $data = $_POST['data'];
 echo $call = $_POST['call'];
 echo $sim = $_POST['sim'];
 echo $cradit = $_POST['cradit'];
 echo $call_phone = $_POST['call_phone'];
 echo $network = $_POST['network'];
 echo $detail = $_POST['detail'];
 echo $pomotionDetail = $_POST['pomotionDetail'];
 echo $contract = $_POST['contract'];
 echo $discount = $_POST['discount'];
 echo $costInstall = $_POST['costInstall'];
 echo $costRegister = $_POST['costRegister'];
 echo $costEquipment = $_POST['costEquipment'];
 echo $costMonth = $_POST['costMonth'];
 echo $dateStart = $_POST['dateStart'];
 echo $dateEnd = $_POST['dateEnd'];

 
 $sql = "INSERT INTO detail_package VALUES ('','$nameService','$namePackage','$router','$download','$upload','$data','$call','$sim','$cradit','$call_phone','$network','$detail','$pomotionDetail','$contract','$discount','$costInstall','$costRegister','$costEquipment','$costMonth','$dateStart','$dateEnd')";

if( mysqli_query($connect, $sql)){
header('Location: viewdetailPackage.php');
}else {
    echo "ERROR = ".mysqli_error($connect);
}
