<?php /*
include('checksession.php');
require 'connect.php';
$sql = "UPDATE package.detail_package  SET  
 id_service=5050,
 id_package=1070,
 id_rounter=5,
 download='100',
 upload='100',
 data_mobile='100',
 min_mobile='100',
 sim_mobile='100',
 credit_phone='100',
 min_phone='100',
 network_phone='100',
 detail='100',
 detail_promotion='hthtfjry',
 detail_contract='http',
 discount='9000%',
 price_setup='100',
 price_register=' 100',
 price_equip=' 100',
 price_month='100',
 date_start_pro='100-5',
 date_end_pro='100-2' 
 WHERE id_log=5";



if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
    //header('Location: insert_detailPackage.php');
  } else {
    echo "Error updating record: " . mysqli_error($connect);
  }
*/
require 'connect.php';
?>

<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  

 


</head>

<body>
<?php 

$querytrue = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service
ON name_package.id_service=name_service.id_service WHERE name_package.id_service=5050";
$resulttrue = mysqli_query($connect,$querytrue);

$queryais = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service
ON name_package.id_service=name_service.id_service WHERE name_package.id_service=5060";
$resultais = mysqli_query($connect,$queryais);

$query3bb = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service
ON name_package.id_service=name_service.id_service WHERE name_package.id_service=5070";
$result3bb = mysqli_query($connect,$query3bb);

$querycat = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service
ON name_package.id_service=name_service.id_service WHERE name_package.id_service=5080";
$resultcat = mysqli_query($connect,$querycat);

$querytot = "SELECT name_package.id_package,name_service.name_ser,name_package.name_pack FROM name_package LEFT JOIN name_service
ON name_package.id_service=name_service.id_service WHERE name_package.id_service=5080";
$resulttot = mysqli_query($connect,$querytot);
?>
  <div class="container">
  <div class="row">
  <div class="col-sm-5">
    <select class="form-control">
    <optgroup label="True Package">

      <?php while($rowtrue = mysqli_fetch_array($resulttrue)){?>
      <option>
        <?php echo $rowtrue['name_pack'];?>
      </option>
      <?php } ?>
    </optgroup>

    <optgroup label="AIS Package">
  
    <?php while($rowais = mysqli_fetch_array($resultais)){?>
      <option>
        <?php echo $rowais['name_pack'];?>
      </option>
      <?php } ?>
  
  </optgroup>

  <optgroup label="3BB">
  
    <?php while($row3bb = mysqli_fetch_array($result3bb)){?>
      <option>
        <?php echo $row3bb['name_pack'];?>
      </option>
      <?php } ?>
  
  </optgroup>

  <optgroup label="cat">
  
    <?php while($rowcat = mysqli_fetch_array($resultcat)){?>
      <option>
        <?php echo $rowcat['name_pack'];?>
      </option>
      <?php } ?>
  
  </optgroup>

  <optgroup label="tot">
  
    <?php while($rowtot = mysqli_fetch_array($resulttot)){?>
      <option>
        <?php echo $rowtot['name_pack'];?>
      </option>
      <?php } ?>
  
  </optgroup>
      
    </select>
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