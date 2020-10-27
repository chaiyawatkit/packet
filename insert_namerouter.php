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

} else if ($status == 'user') {

    echo "<script>";
    echo "alert('ไม่มีสิทธิ์เข้าใช้งาน')";
    echo "</script>";


    header("Refresh:0; url=index.php");
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
        $query = "SELECT id_service,name_ser FROM package.name_service";
        $result = mysqli_query($connect, $query);

        ?>

        <div class="container">
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-0">
                        <h5>ค่าย Internet</h5>
                        <select class="form-control" name="nameService" id="nameService">
                            <?php
                            while ($row = mysqli_fetch_array($result)) { ?>

                                <option value="<?php echo $row['id_service']; ?>"><?php echo $row['name_ser'] ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-6">
                        <h5>ชื่อ Router </h5>
                        <input type="text" class="form-control " id="nameRouter" placeholder="เช่น = Gigatex Fiber Router">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-0">
                        <h5>ประเภท Router </h5>
                        <select class="form-control" name="typeRouter" id="typeRouter">
                            <option>ADSL/VDSL Router</option>
                            <option>Fiber Router</option>
                        </select>
                    </div>

                </div>

                <center>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        ตกลง
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">การบันทึก</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ต้องการที่จะบันทึกข้อมูลหรือไม่
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary closesavedata" data-dismiss="modal">ปิด</button>
                                    <button type="button" class="btn btn-primary savedata1">บันทึก</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button>
                </center><br>
            </form>

            <?php $query1 = "SELECT name_rounter.id_rounter,name_service.name_ser,name_rounter.detail_rounter,name_rounter.type_rounter FROM name_rounter LEFT JOIN name_service ON name_service.id_service = name_rounter.id_service";
            $result1 = mysqli_query($connect, $query1);
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <h5 class="card-title">รายชื่อ Router</h5>
                        </div>
                    </div>
                    <table class="table table-striped table-hover text-center" id="data_table_router" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อผู้ให้บริการ</th>
                                <th>ชื่อ Router</th>
                                <th>ประเภท Router</th>
                                <th>ลบ</th>
                                <th>แก้ไข</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result1)) { ?>
                                <tr>
                                    <td><?php echo $row['id_rounter']; ?></td>
                                    <td><?php echo $row['name_ser']; ?> </td>
                                    <td><?php echo $row['detail_rounter']; ?> </td>
                                    <td><?php echo $row['type_rounter']; ?></td>
                                    <td><button class="btn btn-danger deleterouter" data-toggle="modal" data-target=".bd-example-modal-sm" id=<?php echo $row['id_rounter']; ?>>ลบ</button></td>
                                    <td><a href="update_namerouter.php?id_rounter=<?php echo $row['id_rounter']; ?>&name_ser=<?php echo $row['name_ser']; ?> &name_router=<?php echo $row['detail_rounter']; ?>&type_router=<?php echo $row['type_rounter']; ?> " class="btn btn-warning">แก้ไข</a></td>
                                    <!--<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">รายละเอียด</button></td>-->
                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>

                <!-- modal Delete router-->

                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">การยืนยันข้อมูล</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ยืนยันการลบหรือไม่
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                <button type="button" class="btn btn-success cfdeleterouter">ยืนยัน</button>
                            </div>
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

    </html>