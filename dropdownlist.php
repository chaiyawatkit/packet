<?php 
require 'connect.php';
$id_service = $_POST['id_service'];

$query = "SELECT * FROM package.name_package WHERE id_service=$id_service";
$result = mysqli_query($connect,$query);


if($result){
    while($row = mysqli_fetch_array($result)){ ?>
    
    <option value="<?php echo $row['id_package'];?>"><?php echo $row['name_pack'];?></option>
    
    
    <?php } ?>
    
    <?php } else { ?>
        
        <option value="<?php echo $row['id_package'];?>">No Data.....</option>?>
    
        <?php } ?>
    ?>