<?php
session_start();
require 'connect.php';


if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE id_login='$username' AND password_login='$password'";

    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id_user'];
        $_SESSION['user'] = $row['name_login'];
        $_SESSION['userstatus'] = $row['status'];

        if ($_SESSION['userstatus'] == 'admin') {

            header("Location: admin.php");

        }

        if ($_SESSION['userstatus'] == 'user') {

            echo "USER STATUS";
            header("Location: viewdetailPackage.php");
        }
    } else {
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {

   echo "ERROR";
}
