<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $apartmentname = $_REQUEST['apartmentname'];   
    $address = $_REQUEST['address'];
    $landmark = $_REQUEST['landmark'];
    $blocks = $_REQUEST['blocks'];
    $floors = $_REQUEST['floors'];
    $unitvalue = $_REQUEST['unitvalue'];
    $parking = $_REQUEST['parking'];
    
    $query1 = "INSERT INTO apartments(name,address,landmark,block,floor,total_unit,parking_type)
                VALUES('$apartmentname','$address','$landmark','$blocks','$floors','$unitvalue','$parking')";
    if (mysqli_query($db, $query1)) {
        $last_id = $db->insert_id ;
        for ($i = 0; $i < count($_POST['sno']); $i++) {
            $block = $_POST['block'][$i];
            $unit = $_POST['unit'][$i];
            $type = $_POST['type'][$i];
            $floor = $_POST['floor'][$i];
            $description = $_POST['description'][$i];
            $query2 = "INSERT INTO apartment_details(apartment_id,blocks,unit,type,floor,description)
                    VALUES('$last_id','$block','$unit','$type','$floor','$description')";
            if (mysqli_query($db, $query2)) {
                header("Location: apartment.php"); 
                exit();
                
            } else {
                echo "last Query Error";
            }
        }
    } else {
        echo "Error All";
    }
    $rows = array();
    // loop through the submitted data and add each row to the $rows array
    for ($i = 0; $i < count($_POST['sno']); $i++) {
        $row = array(
            'sno' => $_POST['sno'][$i],
            'unit' => $_POST['unit'][$i],
            'type' => $_POST['type'][$i],
            'floor' => $_POST['floor'][$i],
            'block' => $_POST['block'][$i],
            'description' => $_POST['description'][$i]
        );
        $rows[] = $row;
    }
    // display the apartment details and table of rows
    // echo $apartmentname . "<br>";
    // echo $address . "<br>";
    // echo $landmark . "<br>";
    // echo $blocks . "<br>";
    // echo $floors . "<br>";
    // echo $unitvalue . "<br>";
    // echo $parking . "<br>";
    // echo '<table>';
    // echo '<tr><th>sno</th><th>unit</th><th>type</th><th>floor</th><th>description</th><th>block</th></tr>';
    // // loop through the $rows array and print each row in a table row
    // foreach ($rows as $row) {
    //     echo "<tr><td>{$row['sno']}</td>  <td>{$row['unit']}</td>  <td>{$row['type']}</td>  <td>{$row['floor']}</td>  <td>{$row['description']}</td> <td>{$row['block']}</td>  </tr>";
    // }
    // echo "</table>";
}
?>