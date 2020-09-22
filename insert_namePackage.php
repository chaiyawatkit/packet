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

    <head>
        <meta http-equiv="Content-Language" content="th" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="  https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="asset/style.css">
    </head>

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
        <br>

        <?php
        $query = "SELECT id_service,name_ser FROM package.name_service ";
        $result = mysqli_query($connect, $query);

        ?>
        <form>
            <div class="container">
                <div class="form-row">
                    <div class="form-group col-0">
                        <h5>ค่าย Internet</h5>
                        <select class="form-control" name="package" id="package" data-toggle="tooltip" data-placement="bottom" title="เลือกชื่อผู้ให้บริการ">
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['id_service']; ?>"> <?php echo $name = $row['name_ser']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-row ">
                    <div class="form-group col-md-6">
                        <h5>ชื่อ Package </h5>
                    </div>
                </div>

                <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control is-validated" id="name_package" placeholder="เช่น = 3BB FIBER FULL SPEED" data-toggle="tooltip" data-placement="bottom" title="ใส่ชื่อแพ็ตเกตที่ต้องการบันทึก">

                    </div>
                </div>






                <center>
                    <button type="button" class="btn btn-success gotosave" data-toggle="modal" data-target="#exampleModal">
                        บันทึก
                    </button>
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
                                    คุณต้องการเพิ่มข้อมูลหรือไม่
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-success savedata">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="reset" class="btn btn-danger" value="ยกเลิก">
                </center><br>


                <?php $query1 = "SELECT name_package.id_package, name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service ON name_package.id_service = name_service.id_service ";
                $result1 = mysqli_query($connect, $query1); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">

                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <h5 class="card-title">รายชื่อ Package</h5>
                                </div>
                            </div>
                        </div>

                        <br>

                        <table class=" table table-striped table-hover " id='textnaja'>
                            <thead class="thead-dark">
                                <tr>
                                    <th>รหัสแพ็ตเกต</th>
                                    <th>ชื่อผู้ให้บริการ</th>
                                    <th>ชื่อแพ็กเกต</th>
                                    <th>ลบ</th>
                                    <th>แก้ไข</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_array($result1)) { ?>

                                    <tr>

                                        <td> <?php echo $row['id_package']; ?></td>
                                        <td> <?php echo $row['name_ser']; ?></td>
                                        <td> <?php echo $row['name_pack']; ?></td>
                                        <td><button type="button" class="btn btn-danger deletepackage" data-toggle="modal" data-target=".bd-example-modal-sm" id='<?php echo $row['id_package']; ?>'>ลบ</button></td>
                                        <td><a href="update_namePackage.php?id_package=<?php echo $row['id_package']; ?>" class="btn btn-warning">แก้ไข</a></td>
                                        <td><button type="button" class="btn btn-info  viewdetail" data-toggle="modal" data-target=".bd-example-modal-lg" id='<?php echo $row['id_package']; ?>'>รายละเอียด</a></td>
                                    </tr>

                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- modal ของปุ่มลบ -->

                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ยืนยันข้อมูล</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    คุณต้องการลบข้อมูลหรือไม่
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-success cfdeletepackage">ยืนยัน</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- modal viewdetail -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">รายละเอียดของ Package </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table text-center table-hover table-responsive">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th>รหัสแพ็กเกต</th>
                                                <th>ผู้ให้บริการ</th>
                                                <th>Router</th>
                                                <th>Download</th>
                                                <th>Upload</th>
                                                <th>ข้อมูลมือถือ</th>
                                                <th>จำนวนการใช้งาน</th>
                                                <th>จำนวนเค่รื่องที่ใช้</th>
                                                <th>แต้มโทรศัพท์</th>
                                                <th>จำนวนการใช้งาน Phone</th>
                                                <th>จำนวนข้อมูลโทรศัพท์</th>
                                                <th>รายละเอียด</th>
                                                <th>รายละเอียดโปรโมชั่น</th>
                                                <th>รายละเอียดสัญญา</th>
                                                <th>ส่วนลด</th>
                                                <th>ค่าติดตั้ง</th>
                                                <th>ค่าลงทะเบียน</th>
                                                <th>ค่าอุปกรณ์</th>
                                                <th>รายเดือน</th>
                                                <th>วันเริ่มโปร</th>
                                                <th>วันสิ้นสุดโปร</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        ?>
                                        <tbody class="showdetial">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <script src="asset/app.js"></script>
    </body>

    </html>