<?php
session_start();
//include('checksession.php');
require 'connect.php';

if (!$_SESSION['id']) {

    echo "<script>";
    echo "alert('มีบางอย่างไม่ถูกต้อง')";
    echo "</script>";
    echo "<a href='index.php'>กลับไปหน้าหลัก</a>";

    //Header("Location: index.php");

} else {
    $id = $_SESSION['id'];
    $querylogin = "SELECT id_user,name_login FROM login WHERE id_user=$id";
    $resultlogin = mysqli_query($connect, $querylogin);
?>
    <html>

    <body>

        <head>
            <meta http-equiv="Content-Language" content="th" />
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <link rel="stylesheet" href="asset/style.css">
        </head>
        <div class="sticky-top">
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
                        <li class="nav-item">
                            <a href="viewdetailPackage.php" class="btn ">ดูรายละเอียด</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <?php while ($rowlogin = mysqli_fetch_array($resultlogin)) { ?>
                            <h3 class="mr-sm-2"><?php echo $rowlogin['name_login']; ?></h3>
                        <?php } ?>
                        <a href="logout.php" class="btn btn-danger mr-sm-2">Logout</a>
                    </form>
                </div>
            </nav>
        </div>
        <br>
        <?php $query = "SELECT id_service,name_ser FROM package.name_service";
        $result = mysqli_query($connect, $query); ?>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">ค่าย Internet</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-0">
                        <select class="form-control" name="nameService" id="nameService">
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['id_service']; ?>"> <?php echo $row['name_ser']; ?></option>

                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">Package แต่ละค่าย</h5>
                    </div>
                </div>
                <?php

                $query3 = "SELECT id_package,name_pack FROM package.name_package";
                $result3 = mysqli_query($connect, $query3);

                ?>
                <div class="form-row">
                    <div class="form-group col-md-0">
                        <select class="form-control" name="namePackage" id="namePackage">
                            <?php
                            while ($row = mysqli_fetch_array($result3)) { ?>
                                <option value="<?php echo $row['id_package']; ?>"><?php echo $row['name_pack']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title ">Speed internet / ความเร็วของ Internet</h5>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="was-validated">
                            <input type="number" class="form-control " id="download" placeholder="ความเร็วดาวน์โหลด" value="-" required>
                            <div class="invalid-feedback">
                                **กรุณาใส่ข้อมูลตรงนี้!!**
                            </div>
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                        <div class="was-validated">
                            <input type="number" class="form-control " id="upload" placeholder="ความเร็วอัพโหลด" value="-" required>
                            <div class="invalid-feedback">
                                **กรุณาใส่ข้อมูลตรงนี้!!**
                            </div>
                        </div>
                    </div>




                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">Mobile / มือถือ</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="data" value="-" placeholder="ให้ข้อมูลสูงสุด">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="call" value="-" placeholder="minite">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="sim" value="-" placeholder="ใช้ได้กี่ Sim">
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">Telephone / โทรศัพท์</h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="cradit" value="-" placeholder="แต้ม">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="call_phone" value="-" placeholder="เวลาในการใช้โทร">
                    </div>

                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" id="network" value="-" placeholder="network">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-0">
                        <h5>กรุณาเลือกรายชื่อ Router : </h5>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-0">
                            <select class="form-control" name="router" id="router">

                                <optgroup label="ADSL/VDSL Router">
                                    <!--ต้องเอาข้อมูลจากฐานข้อมูลมา-->
                                    <?php
                                    $query1 = "SELECT id_rounter,detail_rounter,type_rounter FROM package.name_rounter WHERE type_rounter ='ADSL/VDSL Router'";
                                    $result1 = mysqli_query($connect, $query1); ?>

                                    <?php while ($row = mysqli_fetch_array($result1)) { ?>

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
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">รายละเอียด</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <textarea class="form-control" rows="7" name="detail" id="detail" placeholder="ลายละเอียดต่างๆ" value="-"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <textarea class="form-control" rows="7" name="pomotionDetail" id="pomotionDetail" placeholder="ลายละเอียดโปรโมชั่นต่างๆ" value="-"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">รายละเอียดสัญญา</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <textarea class="form-control" rows="7" name="contract" id="contract" placeholder="ลายละเอียดสัญญา" value="-"></textarea>

                    </div>
                </div>

                <br>

                <div class="form-row">
                    <div class="form-group col-md-0">
                        <h5 class="card-title">ส่วนลด : </h5>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-0">
                            <select class="form-control" name="discount" id="discount">

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
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">ค่าบริการต่างๆ</h5>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input required type="number" class="form-control" placeholder="ค่าติดตั้ง" id="costInstall" value="-" name="costInstall">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="number" class="form-control" placeholder="ค่าลงทะเบียน" id="costRegister" value="-" name="costRegister">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="number" class="form-control" placeholder="ค่าอุปกรณ์" id="costEquipment" value="-" name="costEquipment">
                    </div>
                    <div class="form-group col-md-3">
                        <div class="was-validated">
                            <input required type="number" class="form-control" placeholder="ค่ารายเดือน" id="costMonth" value="-" name="costMonth">
                            <div class="invalid-feedback">
                                **กรุณาใส่ข้อมูลตรงนี้!!**
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h5 class="card-title">ระยะเวลาโปรโมชั่น</h5>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input required type="date" class="form-control" id="dateStart" value="-" name="dateStart">
                    </div>
                    <div class="form-group col-md-6">
                        <input required type="date" class="form-control" id="dateEnd" value="-" name="dateEnd">
                    </div>
                </div>
                <center>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        บันทึก
                    </button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                </center>
                </>

        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ยืนยันข้อมูล</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ต้องการที่จะบันทึกใช่หรือไม่
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="button" class="btn btn-primary savedatadetail">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="asset/app.js"></script>
    </body>

    </html>