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


$id_pk = $_REQUEST['id_package'];

$query = "SELECT name_package.id_package,name_service.id_service, name_service.name_ser,name_package.name_pack 
FROM name_package 
LEFT JOIN name_service ON name_package.id_service = name_service.id_service WHERE name_package.id_package=$id_pk ";
$result = mysqli_query($connect, $query);

$querynsv = "SELECT * FROM package.name_service";
$resultnsv = mysqli_query($connect, $querynsv);

?>

<html>

<head>
    <meta http-equiv="Content-Language" content="th" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
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

    <?php



    ?>
    <div class="container">

        <input type="hidden" value="<?php echo $id_pk; ?>" id="id_pk">
        <form method="POST" action="update_namePackage.php">
            <div class="form-row">
                <div class="form-group col-md-0">
                    <h5>ค่าย Internet</h5>
                    <select class="form-control" name="service" id="service">
                        <?php while ($row = mysqli_fetch_array($resultnsv)) {  ?>
                            <option value="<?php echo $row['id_service']; ?>"><?php echo $row['name_ser'];
                                                                            } ?></option>
                            <?php while ($row = mysqli_fetch_array($result)) {  ?>
                                <option value="<?php echo $row['id_service']; ?>" selected disabled hidden><?php echo $row['name_ser']; ?></option>
                    </select>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md">
                    <h5>ชื่อ Package </h5>

                    <input type="text" value="<?php echo $row['name_pack'];
                                            } ?>" class="form-control" id="name_package" placeholder="เช่น = 3BB FIBER FULL SPEED" require>
                </div>

            </div>
            <center>
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModal">
                    แก้ไข
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
                                คุณต้องการแก้ไขข้อมูลใช่หรือไม่
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                <button type="button" class="btn btn-success updatepk">ยืนยัน</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
            </center><br>




            <?php $query1 = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service ON name_package.id_service = name_service.id_service ";
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
                    <table class="table table-striped table-hover " id='viewdatapackageupdate'>

                        <thead  class="thead-dark" >
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อผู้ให้บริการ</th>
                                <th scope="col">ชื่อ Package</th>
                                <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($result1)) { ?>
                                <tr>

                                    <td> <?php echo $row['id_package']; ?></td>
                                    <td> <?php echo $row['name_ser']; ?></td>
                                    <td> <?php echo $row['name_pack']; ?></td>
                                    <td><button type="button" class="btn btn-danger deleteupdatepackage" id=<?php echo $row['id_package']; ?> data-toggle="modal" data-target=".bd-example-modal-sm">ลบ</button></td>
                                <?php  } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>


    </form>
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ยืนยันข้อมูล</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ต้องการลบใช่หรือไม่
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-success cfdeleteupdatepackage">ลบ</button>
                </div>
            </div>
        </div>
    </div>
                            <?php }?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="asset/app.js"></script>
</body>

</html>