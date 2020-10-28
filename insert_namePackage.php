<<<<<<< HEAD
<?php
session_start();
//include('checksession.php');
require 'connect.php';
 $status = $_SESSION['userstatus']; 
if (!$_SESSION['id']) {

    echo "<script>";
    echo "alert('มีบางอย่างไม่ถูกต้อง')";
    echo "</script>";
    header("Refresh:0; url=index.php");

    //Header("Location: index.php");

} else if($status == 'user'){
    echo "<script>";
    echo "alert('ไม่มีสิทธิ์เข้าใช้งาน')";
    echo "</script>";
    

    header("Refresh:0; url=index.php");

}else {
    $id = $_SESSION['id'];
    $querylogin = "SELECT id_user,name_login FROM login WHERE id_user=$id";
    $resultlogin = mysqli_query($connect, $querylogin);
?>
    <html>

    <head>
        <meta http-equiv="Content-Language" content="th" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="  https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="asset/style.css">
    </head>

    <body>
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
                        <input type="text" class="form-control" id="name_package" placeholder="เช่น = 3BB FIBER FULL SPEED" data-toggle="tooltip" data-placement="bottom" title="ใส่ชื่อแพ็ตเกตที่ต้องการบันทึก">

                    </div>
                </div>


                <div class="form-row ">
                    <div class="form-group col-md-0">
                        <h5>ประเภท Package : </h5>
                    </div>
                    <div class=" col-md-0">
                        <select class="form-control" id="typepackage">
                            <option value="Official Package">Official Package</option>
                            <option value="Unofficial Package">Unofficial Package</option>

                        </select>
                    </div>
                </div>
                            
                <br>


                <center>
                    <button type="button" class="btn btn-success gotosave" data-toggle="modal" data-target="#exampleModal">
                        บันทึก
                    </button>

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
                                    คุณต้องการเพิ่มข้อมูลหรือไม่
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary savedata">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="reset" class="btn btn-danger" value="ยกเลิก">
                </center><br>


                <?php $query1 = "SELECT name_package.id_package, name_service.name_ser,name_package.name_pack,name_package.type_package FROM name_package LEFT JOIN name_service ON name_package.id_service = name_service.id_service ";
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

                        <table class=" table table-striped table-hover " id='textnaja555'>
                            <thead class="thead-dark">
                                <tr>
                                    <th>รหัสแพ็ตเกต</th>
                                    <th>ชื่อผู้ให้บริการ</th>
                                    <th>ชื่อแพ็กเกต</th>
                                    <th>ประเภท Package</th>
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
                                        <td> <?php echo $row['type_package']; ?></td>

                                        <td><button type="button" class="btn btn-danger deletepackage " data-toggle="modal" data-target=".bd-example-modal-sm" id='<?php echo $row['id_package']; ?>'>ลบ</button></td>
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
                                    <table class="table text-center table-hover table-responsive" id="detalsingle">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ลำดับที่</th>
                                                <th>ชื่อ ผู้บริการ</th>
                                                <th>ชื่อ PACKAGE</th>
                                                <th>ประเภท Package</th>
                                                <th>ชื่อ ROUTER</th>
                                                <th>ประเภท ROUTER</th>
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
                                            </tr>
                                        </thead>

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

            <center>
    <br>
      <h6>Copyright © คะเมียวตำปรู๊ช คะเมียวตรำปร๊าช V.5.2.1</h6>
      <br>
    </center>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="asset/app.js"></script>

    </body>

=======
<?php
session_start();
//include('checksession.php');
require 'connect.php';
 $status = $_SESSION['userstatus']; 
if (!$_SESSION['id']) {

    echo "<script>";
    echo "alert('มีบางอย่างไม่ถูกต้อง')";
    echo "</script>";
    header("Refresh:0; url=index.php");

    //Header("Location: index.php");

} else if($status == 'user'){
    echo "<script>";
    echo "alert('ไม่มีสิทธิ์เข้าใช้งาน')";
    echo "</script>";
    

    header("Refresh:0; url=index.php");

}else {
    $id = $_SESSION['id'];
    $querylogin = "SELECT id_user,name_login FROM login WHERE id_user=$id";
    $resultlogin = mysqli_query($connect, $querylogin);
?>
    <html>

    <head>
        <meta http-equiv="Content-Language" content="th" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="  https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="asset/style.css">
    </head>

    <body>
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
                        <input type="text" class="form-control" id="name_package" placeholder="เช่น = 3BB FIBER FULL SPEED" data-toggle="tooltip" data-placement="bottom" title="ใส่ชื่อแพ็ตเกตที่ต้องการบันทึก">

                    </div>
                </div>


                <div class="form-row ">
                    <div class="form-group col-md-0">
                        <h5>ประเภท Package : </h5>
                    </div>
                    <div class=" col-md-0">
                        <select class="form-control" id="typepackage">
                            <option value="Official Package">Official Package</option>
                            <option value="Unofficial Package">Unofficial Package</option>

                        </select>
                    </div>
                </div>
                            
                <br>


                <center>
                    <button type="button" class="btn btn-success gotosave" data-toggle="modal" data-target="#exampleModal">
                        บันทึก
                    </button>

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
                                    คุณต้องการเพิ่มข้อมูลหรือไม่
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary savedata">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="reset" class="btn btn-danger" value="ยกเลิก">
                </center><br>


                <?php $query1 = "SELECT name_package.id_package, name_service.name_ser,name_package.name_pack,name_package.type_package FROM name_package LEFT JOIN name_service ON name_package.id_service = name_service.id_service ";
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

                        <table class=" table table-striped table-hover " id='textnaja555'>
                            <thead class="thead-dark">
                                <tr>
                                    <th>รหัสแพ็ตเกต</th>
                                    <th>ชื่อผู้ให้บริการ</th>
                                    <th>ชื่อแพ็กเกต</th>
                                    <th>ประเภท Package</th>
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
                                        <td> <?php echo $row['type_package']; ?></td>

                                        <td><button type="button" class="btn btn-danger deletepackage " data-toggle="modal" data-target=".bd-example-modal-sm" id='<?php echo $row['id_package']; ?>'>ลบ</button></td>
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
                                    <table class="table text-center table-hover table-responsive" id="detalsingle">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ลำดับที่</th>
                                                <th>ชื่อ ผู้บริการ</th>
                                                <th>ชื่อ PACKAGE</th>
                                                <th>ประเภท Package</th>
                                                <th>ชื่อ ROUTER</th>
                                                <th>ประเภท ROUTER</th>
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
                                            </tr>
                                        </thead>

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

          
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="asset/app.js"></script>

    </body>

>>>>>>> fb6bc8399dd511f70caa7539d8baa13f5d3f8853
    </html>