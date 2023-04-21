<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // collect value of input field
    $unit= $_REQUEST['unit'];
    $firstName = $_REQUEST['firstName'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $contactno = $_REQUEST['contact'];
    $birth = $_REQUEST['dateofbirth'];
    $national = $_REQUEST['nationality'];
    $purchase = $_REQUEST['dateofpurchase'];
    $uses= $_REQUEST['use'];
    $blocks= $_REQUEST['block']; 
    $types= $_REQUEST['type']; 
        
    $query1 = "INSERT INTO addowner_details(units,first_name,last_name,email,contact,date_of_birth,nationality,date_of_purchase,`use`,block,type)
    VALUES('$unit','$firstName','$lastname','$email','$contactno','$birth','$national','$purchase','$uses','$blocks','$types')";

                if(mysqli_query($db, $query1)){                               
                    header("Location: addowner.php"); 
                    exit();
                }else{
                   echo"last Query Error";
                }       
        // echo $unit."<br>";
        // echo $firstName."<br>";
        // echo $lastname."<br>";  
        // echo $email."<br>";
        // echo $contactno."<br>";
        // echo $birth."<br>";
        // echo $national."<br>";
        // echo $purchase."<br>";
        // echo $uses."<br>";
        // echo $blocks."<br>";  
        // echo $types."<br>";       
        // echo ($use == "SELF" ? "SELF" : "TENANT") . "<br>";
        
    }

?>
