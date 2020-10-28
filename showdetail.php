<?php

//include('checksession.php');
require 'connect.php';
$id = $_POST['id'];

//echo $id;
$query = "SELECT detail_package.id_log,name_service.name_ser,name_package.name_pack,name_package.type_package,name_rounter.detail_rounter,name_rounter.type_rounter,detail_package.download,detail_package.upload,detail_package.data_mobile,detail_package.min_mobile,detail_package.sim_mobile,detail_package.credit_phone,detail_package.min_phone,detail_package.network_phone,detail_package.detail,detail_package.detail_promotion,detail_package.detail_contract,detail_package.discount,detail_package.price_setup,detail_package.price_register,detail_package.price_equip,detail_package.price_month,detail_package.date_start_pro,detail_package.date_end_pro 
FROM detail_package,name_service,name_package,name_rounter 
WHERE detail_package.id_service=name_service.id_service 
AND detail_package.id_package=name_package.id_package 
AND detail_package.id_rounter=name_rounter.id_rounter 
AND detail_package.id_package = $id";

$result = mysqli_query($connect, $query);
?>
<?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $row['id_log']; ?></td>
        <td><?php echo $row['name_ser']; ?></td>
        <td><?php echo $row['name_pack']; ?></td>
        <td><?php echo $row['type_package']; ?></td>
        <td><?php echo $row['detail_rounter']; ?></td>
        <td><?php echo $row['type_rounter']; ?></td>
        <td><?php echo $row['download']; ?></td>
        <td><?php echo $row['upload']; ?></td>
        <td><?php echo $row['data_mobile']; ?></td>
        <td><?php echo $row['min_mobile']; ?></td>
        <td><?php echo $row['sim_mobile']; ?></td>
        <td><?php echo $row['credit_phone']; ?></td>
        <td><?php echo $row['min_phone']; ?></td>
        <td><?php echo $row['network_phone']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        <td><?php echo $row['detail_promotion']; ?></td>
        <td><?php echo $row['detail_contract']; ?></td>
        <td><?php echo $row['discount']; ?></td>
        <td><?php echo $row['price_setup']; ?></td>
        <td><?php echo $row['price_register']; ?></td>
        <td><?php echo $row['price_equip']; ?></td>
        <td><?php echo $row['price_month']; ?></td>
        <td><?php echo $row['date_start_pro']; ?></td>
        <td><?php echo $row['date_end_pro']; ?></td>

    </tr>
<?php } ?>