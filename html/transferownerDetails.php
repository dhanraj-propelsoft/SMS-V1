<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    // $block = $_REQUEST['block'];
    // $unitnumber = $_REQUEST['unitnumber'];
    // $firstname = $_REQUEST['firstname'];
    // $lastname = $_REQUEST['lastname'];
    // $email = $_REQUEST['email'];
    // $contact = $_REQUEST['contact'];
    // $dateofbirth = $_REQUEST['dateofbirth'];
    // $nationality = $_REQUEST['nationality'];
    // $dateofpurchase = $_REQUEST['dateofpurchase'];
    // $use = $_REQUEST['purpose'];




    // echo $block . "<br>";
    // echo $unitnumber . "<br>";
    // echo $firstname . "<br>";
    // echo $lastname . "<br>";
    // echo $email . "<br>";
    // echo $contact . "<br>";
    // echo $dateofbirth . "<br>";
    // echo $nationality . "<br>";
    // echo $dateofpurchase . "<br>";
    // echo $use . "<br>";

    $block = $_REQUEST['block'];
    $unitnumber = $_REQUEST['unitnumber'];
    $firstname = $_REQUEST['firstname1'];
    $lastname = $_REQUEST['lastname1'];
    $email = $_REQUEST['email1'];
    $contact = $_REQUEST['contact1'];
    $dateofbirth = $_REQUEST['dateofbirth1'];
    $nationality = $_REQUEST['nationality1'];
    $dateofpurchase = $_REQUEST['dateofpurchase1'];
    $use = $_REQUEST['purpose1'];
       




    echo $block . "<br>";
    echo   $unitnumber . "<br>";
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