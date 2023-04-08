<?php include 'config.php'; ?>
<?php 
$unitnumber_id=$_POST['unit_data'];

$unit="SELECT * FROM addowner_details WHERE id = $unitnumber_id";
$result = mysqli_query($db, $unit);
$data = array(); // initialize an empty array

// while ($row = $result->fetch_assoc()) {
//     $data[] = $row['first_name'];
   
//     $data[] = $row['use'];
// }

// echo json_encode($data); // convert the array to JSON and echo it


while ($row = $result->fetch_assoc()) {
    $data[]= $row;
   
}

// while($unit_row=mysqli_fetch_assoc($result)){
//     $data='<option value"'.$unit_row['id'].'">'.$unit_row['first_name'].'</option>';
// }
echo json_encode($data);
// ?>
