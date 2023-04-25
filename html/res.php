<?php include 'config.php'; ?>
<?php 
$unitnumber_id=$_POST['unit_data'];
// $unitnumber=$_POST['unitnumber'];


$unit="SELECT addowner_details.*, resident_details.first_name AS fname,resident_details.last_name AS lname , resident_details.email AS fmail, resident_details.contact AS con, resident_details.date_of_birth AS birth, resident_details.nationality AS contry, resident_details.date_of_residency AS resident, resident_details.year_of_agreement AS agreement, resident_details.total_elders AS elders, resident_details.total_childrens AS childrens


FROM addowner_details
LEFT JOIN resident_details ON addowner_details.units = resident_details.unit AND resident_details.current_status = 1
WHERE addowner_details.units = '$unitnumber_id' AND addowner_details.current_status = 1


UNION
SELECT addowner_details.*, resident_details.first_name AS fname  , resident_details.last_name AS lname ,resident_details.email AS fmail, resident_details.contact AS con, resident_details.date_of_birth AS birth, resident_details.nationality AS contry, resident_details.date_of_residency AS resident, resident_details.year_of_agreement AS agreement, resident_details.total_elders AS elders, resident_details.total_childrens AS childrens

FROM addowner_details
RIGHT JOIN resident_details ON addowner_details.units = resident_details.unit AND addowner_details.current_status = 1
WHERE resident_details.unit = '$unitnumber_id' AND resident_details.current_status = 1";

// $unit="SELECT * FROM addowner_details WHERE units = $unitnumber_id AND current_status=1";
$result = mysqli_query($db, $unit);
$data = array();


while ($row = $result->fetch_assoc()) {
    $data[]= $row;
   
}
echo json_encode($data);
 ?>
