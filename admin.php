<?php session_start();
require 'connect.php';

 $status = $_SESSION['userstatus']; 

if (!$_SESSION['id'] ) {

    echo "<script>";
    echo "alert('มีบางอย่างไม่ถูกต้อง')";
    echo "</script>";
    echo "<a href='index.php'>กลับไปหน้าหลัก</a>";

    Header("Location: index.php");

} else if($status == 'user'){
    echo "<script>";
    echo "alert('ไม่มีสิทธิ์เข้าใช้งาน')";
    echo "</script>";
    echo "<a href='index.php'>กลับไปหน้าหลัก</a>";

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
        <link rel="stylesheet" href="asset/style.css">

    </head>

    <body>
        <div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: red">

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

        <!--<nav aria-label="breadcrumb">
        <ol class="breadcrumb nav-tabs">

            <a href="admin.php" class="btn btn-outline-primary">HOME</a>
            <div class="dropdown">
                <button type="button" class="btn  dropdown-toggle" type="button" id="menudropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="bottom" title="เมนูเพิ่มข้อมูลหรือดูข้อมูลต่างๆ">การจัดการ package
                </button>

                <div class="dropdown-menu" aria-labelledby="menudropdown">
                    <a class="dropdown-item" href="insert_namePackage.php">รายชื่อ Package</a>
                    <a class="dropdown-item" href="insert_detailPackage.php">รายละเอียด Package</a>
                    <a class="dropdown-item" href="insert_namerouter.php">รายชื่อ Rounter</a>
                    <a class="dropdown-item" href="viewdetailPackage.php">ดูรายละเอียด Package</a>
                </div>
            </div>
            <a href="viewdetailPackage.php" class="btn ">ดูรายละเอียด</a>

            <a href="logout.php" class="btn btn-info mr-sm-2">Logout</a>
    
        </ol>

    </nav>-->


        <div class="container-md text-center">

            <div class="card text-white bg-success mb-3">
                <div class="card-body text-left">
                    <h1 class="card-title">TEST</h1>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();">
                        <h3>ทดสอบ | <span>การทำข้อความวิ่งไปๆมาๆ</span></h3>
                    </marquee>
                    <a href="https://www.gamehub.in.th/" class="btn btn-info">เพิ่มเติม</a>
                </div>
            </div>
            <hr>
            <div class="card   bg-warning mb-3">
                <div class="card-body text-left">
                    <h1 class="card-title">TEST</h1>
                    <p>ทดสอบหน้า index</p>
                    <a href="#" class="btn btn-info">เพิ่มเติม</a>
                </div>
            </div>
            <hr>
            <div class="card bg-danger mb-3">
                <div class="card-body text-left">
                    <h1 class="card-title">TEST</h1>
                    <p>ทดสอบหน้า index</p>
                    <a href="#" class="btn btn-info ">เพิ่มเติม</a>
                </div>
            </div>
        </div>

    <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    </html>