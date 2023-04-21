<?php include 'config.php'; ?>
<?php 
$unitnumber_id=$_POST['unit_data'];

$unit="SELECT * FROM resident_details WHERE id = $unitnumber_id";
$result = mysqli_query($db, $unit);
$data = array();


while ($row1 = $result->fetch_assoc()) {
    $data[]= $row1;
   
}


echo json_encode($data);
 ?>
