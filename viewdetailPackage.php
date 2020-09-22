<?php
session_start();
//include('checksession.php');

require 'connect.php';

if (!$_SESSION['id']){ 
    
    echo "<script>";
    echo "alert('มีบางอย่างไม่ถูกต้อง')";
    echo "</script>";
       echo "<a href='index.php'>กลับไปหน้าหลัก</a>";
       
       //Header("Location: index.php");
   
   }else {
    $id = $_SESSION['id'];
    $querylogin = "SELECT id_user,name_login FROM login WHERE id_user=$id";
    $resultlogin = mysqli_query($connect,$querylogin);
?>
<html>

<head>
    <meta http-equiv="Content-Language" content="th" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="asset/style.css">

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link btn btn-outline-primary" href="admin.php">Home <span class="sr-only ">(current)</span></a>
      </li>
<!-- เพิ่มเรื่อง 
      <li class="nav-item">
        
      </li>-->

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          การจัดการ
        </a>
        <div class="dropdown-menu" aria-labelledby="menudropdown">
                    <a class="dropdown-item" href="insert_namePackage.php">รายชื่อ Package</a>
                    <a class="dropdown-item" href="insert_detailPackage.php">รายละเอียด Package</a>
                    <a class="dropdown-item" href="insert_namerouter.php">รายชื่อ Rounter</a>
                   
                </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <?php while($rowlogin = mysqli_fetch_array($resultlogin)){ ?>
        <h3 class="mr-sm-2"><?php echo $rowlogin['name_login'];?></h3>
        <?php }?>
    <a href="logout.php" class="btn btn-danger mr-sm-2">Logout</a>
    </form>
  </div>
</nav>
<br>

    <?php
//$query1 = "SELECT * FROM package.detail_package";
    $query = "SELECT detail_package.id_log,name_service.name_ser,name_package.name_pack,name_rounter.detail_rounter,detail_package.download,detail_package.upload,detail_package.data_mobile,detail_package.min_mobile,detail_package.sim_mobile,detail_package.credit_phone,detail_package.min_phone,detail_package.network_phone,detail_package.detail,detail_package.detail_promotion,detail_package.detail_contract,detail_package.discount,detail_package.price_setup,detail_package.price_register,detail_package.price_equip,detail_package.price_month,detail_package.date_start_pro,detail_package.date_end_pro 
    FROM detail_package,name_service,name_package,name_rounter 
    WHERE detail_package.id_service=name_service.id_service 
    AND detail_package.id_package=name_package.id_package 
    AND detail_package.id_rounter=name_rounter.id_rounter";
    $result = mysqli_query($connect, $query);

    ?>
    <div class="container-fluid">
        <div class="row">

        </div><br>
        <table class=" table table-bordered table-light text-center table-hover table-striped table-responsive " id='textnaja' width="100%">
            <thead class="thead-dark">
                <tr>
                    <th>ลำดับที่</th>
                    <th>ชื่อ ผู้บริการ</th>
                    <th>ชื่อ PACKAGE</th>
                    <th>ชื่อ ROUTER</th>
                    <th>DOWN SPEED/MB</th>
                    <th>UP SPEED/MB</th>
                    <th>ข้อมูลมอถือ/Gb</th>
                    <th>จำนวนการใช้งาน/นาที</th>
                    <th>จำนวน sim ที่ใช้งาน</th>
                    <th>แต้มในการโทร</th>
                    <th>จำนวนการใช้งาน(phone)</th>
                    <th>จำนวน NETWORK</th>
                    <th>รายละเอียด</th>
                    <th>รายละเอียด PROMOTION</th>
                    <th>รายละเอียดสัญญา</th>
                    <th>ส่วนลด</th>
                    <th>ค่าติดตั้ง</th>
                    <th>ค่าลงทะเบียน</th>
                    <th>ค่าอุปกรณ์</th>
                    <th>ค่ารายเดือน</th>
                    <th>วันเริ่ม PROMOTION</th>
                    <th>วันสินสุด PROMOTION</th>
                    <th>จัดการลบ</th>
                    <th>จัดการแก้ไข</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr font size="1">
                        <td font size="1"><?php echo $row['id_log']; ?></td>
                        <td><?php echo $row['name_ser']; ?></td>
                        <td><?php echo $row['name_pack']; ?></td>
                        <td><?php echo $row['detail_rounter']; ?></td>
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
                        <td><button class="btn btn-danger deletedetail" data-toggle="modal" data-target=".bd-example-modal-sm" id=<?php echo $row['id_log']; ?>>ลบ</button></td>
                        <td><a href="update_detailPackage.php?id_log=<?php echo $row['id_log'];?>" class="btn btn-warning">แก้ไข</td>
                    

                    <?php } ?>
                    </tr>
            </tbody>
        </table>

    </div>
    <!-- modal delete detail -->

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ลบ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ยืนยันการลบหรือไม่
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-info cf">ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>







    </div>





</body>

                <?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/app.js"></script>

</html>