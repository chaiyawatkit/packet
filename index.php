<?php session_start();
?>
<html>

<head>
    <meta http-equiv="Content-Language" content="th" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    
    <div id="login">
        <br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Login | <span>ระบบการจัดเก็บรายละเอียด Promotion</span></marquee>
                    </h3>
                </div>
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-4">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="checklogin.php" method="post">
                                <br>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="username" class="text">Username:</label><br>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="text">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                        
                                        </div>
                                        </div>
                                        <center>
                                            <input type="submit" name="submit" class="btn btn-success btn-md" value="ตกลง">
                                            <input type="reset" name="reset" class="btn btn-danger" value="ยกเลิก">
                                        </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>
<script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script src="asset/app.js" ></script>


</html>