<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include('config.php');


   $block = $_REQUEST['block'];
   $unitnumber = $_REQUEST['unitnumber'];
   $id = $_REQUEST['id'];
   $firstname = $_REQUEST['firstname1'];
   $lastname = $_REQUEST['lastname1'];
   $email = $_REQUEST['email1'];
   $contact = $_REQUEST['contact1'];
   $dateofbirth = $_REQUEST['dateofbirth1'];
   $nationality = $_REQUEST['nationality1'];
   $dateofpurchase = $_REQUEST['dateofpurchase1'];
   $use = $_REQUEST['purpose1'];
   $block = $_REQUEST['block'];
   $type = $_REQUEST['type'];

   $query1 = "UPDATE addowner_details SET current_status = 0 WHERE id = '$id'";
   if (mysqli_query($db, $query1)) {

   } else {
      echo "First Query Error";
   }
   $query2 = "INSERT INTO addowner_details(units,first_name,last_name,email,contact,date_of_birth,nationality,
    date_of_purchase,`use`,block,type)
    VALUES('$unitnumber','$firstname','$lastname','$email','$contact','$dateofbirth',
    '$nationality','$dateofpurchase','$use',' $block','$type')";

   if (mysqli_query($db, $query2)) {

   } else {
      echo "last Query Error";
   }

   echo $block . "<br>";
   echo $unitnumber . "<br>";
   echo $id . "<br>";
   echo $firstname . "<br>";
   echo $lastname . "<br>";
   echo $email . "<br>";
   echo $contact . "<br>";
   echo $dateofbirth . "<br>";
   echo $nationality . "<br>";
   echo $dateofpurchase . "<br>";
   echo $use . "<br>";


}





?>