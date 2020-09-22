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

    $id_log = $_REQUEST['id_log'];

    $query1 = "SELECT detail_package.id_log,detail_package.id_service,detail_package.id_package,detail_package.id_rounter,name_service.name_ser,name_package.name_pack,name_rounter.detail_rounter,detail_package.download,detail_package.upload,detail_package.data_mobile,detail_package.min_mobile,detail_package.sim_mobile,detail_package.credit_phone,detail_package.min_phone,detail_package.network_phone,detail_package.detail,detail_package.detail_promotion,detail_package.detail_contract,detail_package.discount,detail_package.price_setup,detail_package.price_register,detail_package.price_equip,detail_package.price_month,detail_package.date_start_pro,detail_package.date_end_pro 
FROM detail_package,name_service,name_package,name_rounter 
WHERE detail_package.id_service=name_service.id_service 
AND detail_package.id_package=name_package.id_package 
AND detail_package.id_rounter=name_rounter.id_rounter
AND detail_package.id_log=$id_log";

$result1 = mysqli_query($connect, $query1);




/*echo $name_ser = $_REQUEST['name_ser']."<br>";
echo $name_package = $_REQUEST['name_pack']."<br>";
echo $download = $_REQUEST['download']."\n";
echo $upload = $_REQUEST['upload'] ;echo "\n";
echo $data_mobile = $_REQUEST['data_mobile'];
echo $min_mobile = $_REQUEST['min_mobile'];
echo $sim_mobile = $_REQUEST['sim_mobile'];
echo $credit_phone = $_REQUEST['credit_phone'];
echo $min_phone = $_REQUEST['min_phone'];
echo $network = $_REQUEST['network'];
echo $name_router = $_REQUEST['name_router'];
echo $detail = $_REQUEST['detail'];*/
?>
<html>

<body>

    <head>
        <meta http-equiv="Content-Language" content="th" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.css">
    </head>

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
                    <a class="dropdown-item" href="viewdetailPackage.php">ดูรายละเอียด Package</a>
                </div>
      </li>
      <li class="nav-item">
      <a href="viewdetailPackage.php" class="btn ">ดูรายละเอียด</a>
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

    <input type="hidden" id="id_log" value="<?php echo $id_log; ?>">
    <?php $query = "SELECT id_service,name_ser FROM package.name_service";
    $result = mysqli_query($connect, $query); ?>
    <div class="container">
        <form>
            <?php while ($row1 = mysqli_fetch_array($result1)) { ?>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">ค่าย Internet</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class=" form-group col-md-0">
                        <select class="form-control"name="nameService" id="nameService">
                            <option value="<?php echo $row1['id_service']; ?>"><?php echo $row1['name_ser']; ?></option>
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['id_service']; ?>"> <?php echo $row['name_ser']; ?></option>

                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">Package</h5>
                    </div>
                </div>
                <?php
                $query3 = "SELECT id_package,name_pack FROM package.name_package";
                $result3 = mysqli_query($connect, $query3);

                ?>
                <div class="form-row">
                    <div class="form-group col-md-0">
                        <select class="form-control" name="namePackage" id="namePackage">
                            <option value="<?php echo $row1['id_package']; ?>"><?php echo $row1['name_pack']; ?></option>
                            <?php
                            while ($row = mysqli_fetch_array($result3)) { ?>
                                <option value="<?php echo $row['id_package']; ?>"><?php echo $row['name_pack']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">Speed internet</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="download" placeholder="ความเร็วดาวน์โหลด" value="<?php echo $row1['download']; ?>">
                    </div>


                    <div class="form-group col-md-6">

                        <input type="number" class="form-control" id="upload" value="<?php echo $row1['upload']; ?>" placeholder="ความเร็วอัพโหลด " required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">Mobile</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="data" value="<?php echo $row1['data_mobile']; ?>" placeholder="ให้ข้อมูลสูงสุด">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="call" value="<?php echo $row1['min_mobile']; ?>" placeholder="minite">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="input" class="form-control" id="sim" value="<?php echo $row1['sim_mobile']; ?>" placeholder="ใช้ได้กี่ Sim">
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">Telephone</h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="cradit" value="<?php echo $row1['credit_phone']; ?>" placeholder="แต้ม">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="call_phone" value="<?php echo $row1['min_phone']; ?>" placeholder="เวลาในการใช้โทร">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="network" value="<?php echo $row1['network_phone']; ?>" placeholder="network">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">Rounter</h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-0">
                        <label for="router">กรุณาเลือกรายชื่อ Router : </label>
                        <select class="form-control" name="router" id="router">
                            
                            <optgroup label="ADSL/VDSL Router">
                                <!--ต้องเอาข้อมูลจากฐานข้อมูลมา-->
                                <?php
                                $query1 = "SELECT id_rounter,detail_rounter,type_rounter FROM package.name_rounter WHERE type_rounter ='ADSL/VDSL Router'";
                                $result1 = mysqli_query($connect, $query1); ?>

                                <?php while ($row = mysqli_fetch_array($result1)) { ?>
                                    <option value="<?php echo $row1['id_rounter']; ?>"><?php echo $row1['detail_rounter']; ?></option>
                                    <option value="<?php echo $row['id_rounter']; ?>"><?php echo $row['detail_rounter']; ?></option>

                                <?php     } ?>
                            </optgroup>

                            <optgroup label="Fiber Router">
                                <!--ต้องเอาข้อมูลจากฐานข้อมูลมา-->
                                <?php
                                $query2 = "SELECT id_rounter,detail_rounter,type_rounter FROM package.name_rounter WHERE type_rounter ='Fiber Router'";
                                $result2 = mysqli_query($connect, $query2);
                                while ($row = mysqli_fetch_array($result2)) { ?>
                                    <option value="<?php echo $row['id_rounter']; ?>"><?php echo $row['detail_rounter']; ?></option>
                                <?php }
                                ?>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">รายละเอียด</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <textarea class="form-control" row="10" id="detail" placeholder="ลายละเอียดต่างๆ"><?php echo $row1['detail']; ?></textarea>

                    </div>


                    <div class=" form-group col-md-6">
                        <textarea class="form-control" row="10" id="pomotionDetail" placeholder="ลายละเอียดโปรโมชั่นต่างๆ"><?php echo $row1['detail_promotion']; ?></textarea>
                    </div>
                </div>
    



    <div class="form-row">
        <div class="form-group col-md-12">
            <h5 class="card-title">รายละเอียดสัญญา</h5>
        </div>
    </div>

    <div class="form-row">
        <div class=" col-md-6">
            <textarea class="form-group form-control" row="7" name="contract" id="contract" placeholder="ลายละเอียดสัญญา"><?php echo $row1['detail_contract']; ?></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <h5 class="card-title">ค่าบริการต่างๆ</h5>
        </div>
    </div>
    <div class="form-row">
        <p>ส่วนลด : </p>
        <select name="discount" id="discount">
            <option value="<?php echo $row1['discount']; ?>"><?php echo $row1['discount']; ?></option>
            <option value="0%">0%</option>
            <option value="5%">5%</option>
            <option value="10%">10%</option>
            <option value="15%">15%</option>
            <option value="20%">20%</option>
            <option value="25%">25%</option>
            <option value="30%">30%</option>
            <option value="35%">35%</option>
            <option value="40%">40%</option>
            <option value="45%">45%</option>
            <option value="50%">50%</option>
            <option value="55%">55%</option>
            <option value="60%">60%</option>
            <option value="65%">65%</option>
            <option value="70%">70%</option>
            <option value="75%">75%</option>
            <option value="80%">80%</option>
            <option value="85%">85%</option>
            <option value="90%">90%</option>
            <option value="95%">95%</option>
            <option value="100%">100%</option>

        </select>
    </div><br>

    <div class="form-row">
        <div class="form-group col-md-3">
            <input required type="number" class="form-control" placeholder="ค่าติดตั้ง" id="costInstall" value="<?php echo $row1['price_setup']; ?>">
        </div>
        <div class="form-group col-md-3">
            <input type="number" class="form-control" placeholder="ค่าลงทะเบียน" id="costRegister" value="<?php echo $row1['price_register']; ?>">
        </div>
        <div class="form-group col-md-3">
            <input type="number" class="form-control" placeholder="ค่าอุปกรณ์" id="costEquipment" value="<?php echo $row1['price_equip']; ?>">
        </div>
        <div class="form-group col-md-3">
            <input required type="number" class="form-control" placeholder="ค่ารายเดือน" id="costMonth" value="<?php echo $row1['price_month']; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <h5 class="card-title">ระยะเวลาโปรโมชั่น</h5>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <input required type="date" class="form-control" id="dateStart" value="<?php echo $row1['date_start_pro']; ?>" name="dateStart">
        </div>
        <div class="form-group col-md-6">
            <input required type="date" class="form-control" id="dateEnd" value="<?php echo $row1['date_end_pro']; ?>" name="dateEnd">
        </div>
    </div>
    <center>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            บันทึก
        </button>
        <button type="reset" class="btn btn-danger">ยกเลิก</button>
    </center>
    </form>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ยืนยันข้อมูล</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ต้องการที่จะบันทึกการแก้ไขใช่มั้ย!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary updatedetail">บันทึก</button>
                </div>
            </div>
        </div>
    </div><?php } ?>

    <?php } ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="asset/app.js"></script>
</body>

</html>