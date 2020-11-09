
<?php
session_start();
session_destroy();


echo "<script>alert('ได้ทำการ logout ออกจากระบบเรียบร้อย')</script>";
header("Refresh:0; url=index.php");	

?>