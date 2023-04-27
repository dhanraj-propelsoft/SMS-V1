<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // collect value of input field
    $id = $_REQUEST['id'];
    $blocks=$_REQUEST['block'];
   $unitnumber=$_REQUEST['unitnumber'];
   $ownername=$_REQUEST['ownername'];
   $purpose = $_REQUEST['use']; 
   $types = $_REQUEST['type'];
    $firstName = $_REQUEST['firstName'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $dateofbirth = $_REQUEST['dateofbirth'];
    $nationality = $_REQUEST['nationality'];
    $dateofresidency = $_REQUEST['dateofresidency'];
    $yearofagreement = $_REQUEST['yearofagreement'];
    $numberofelders = $_REQUEST['numberofelders'];
    $numberofchildrens = $_REQUEST['numberofchildrens'];

    $query1 = "UPDATE resident_details SET current_status = 0 WHERE unit = '$unitnumber'";
   if (mysqli_query($db, $query1)) {
      
   } else {
      echo "First Query Error";
   }
   
    $query2 = "INSERT INTO resident_details(blocks,unit,owner_name,type,purpose,first_name,last_name,email,contact,date_of_birth,nationality,
    date_of_residency,year_of_agreement,total_elders,total_childrens)
    VALUES('$blocks','$unitnumber','$ownername','$types','$purpose','$firstName','$lastname','$email','$contact','$dateofbirth',
    '$nationality','$dateofresidency','$yearofagreement','$numberofelders','$numberofchildrens')";

                if(mysqli_query($db, $query2)){  
                  header("Location: addresident.php"); 
                    exit();
                             
                   
                }else{
                   echo"last Query Error";
                }        
    
      //   echo $blocks."<br>";
      //   echo $unitnumber."<br>";
      //   echo $ownername."<br>";
      //   echo $purpose."<br>";        
      //   echo $lastname."<br>";
      //   echo  $email."<br>";
      //   echo $contact."<br>";
      //   echo $dateofbirth."<br>";
      //   echo $nationality."<br>";
      //   echo $dateofresidency."<br>";
      //   echo $yearofagreement."<br>";
      //   echo $numberofelders."<br>";
      //   echo $numberofchildrens."<br>";
      //   echo $types."<br>";
       
    }

?>
