<?php
 include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // collect value of input field
    $block = $_REQUEST['block'];
    $unit = $_REQUEST['unit'];
    $type = $_REQUEST['type'];
    $owner_name = $_REQUEST['owner_name'];
    $mobile_contact = $_REQUEST['mobile_contact'];
    $purchase = $_REQUEST['purchase'];    
   
   
    $query1 = "INSERT INTO apartment_details(block_name,unit,unit_type)
                VALUES('$block','$unit','$type',)";         

                 if(mysqli_query($db, $query1)) {
                    
                    $query2 = "INSERT INTO addowner_details(owner_name,mobile_contact,date_of_purchase)
                    VALUES('$owner_name','$mobile_contact','$purchase')";
                     if(mysqli_query($db, $query2)){
                        echo"SUccess All";
                     }else{
                        echo"last Query Error";
                     }

                    }

                 else{
                    echo"Error All";
                 }
                
   
}
?>
