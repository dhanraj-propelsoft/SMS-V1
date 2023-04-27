<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $block = $_REQUEST['block'];
    $unitnumber = $_REQUEST['unitnumber'];
    $ownername = $_REQUEST['ownername'];
    $firstname = $_REQUEST['firstName'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    $dateofbirth = $_REQUEST['dateofbirth'];
    $nationality = $_REQUEST['nationality'];
    $dateofresidency = $_REQUEST['dateofresidency'];
    $yearofagreement = $_REQUEST['yearofagreement'];
    $numberofelders = $_REQUEST['numberofelders'];
    $numberofchildrens = $_REQUEST['numberofchildrens'];
    $query1 = "INSERT INTO vacate_details(block,unit,owner_name,first_name,last_name,email,contact_number,date_of_birth,nationality,
    date_of_residency,year_of_agreement,total_elders,total_childrens)
    VALUES('$block','$unitnumber','$ownername','$firstname','$lastname','$email','$contact','$dateofbirth',
    '$nationality','$dateofresidency','$yearofagreement','$numberofelders','$numberofchildrens')";
    if (mysqli_query($db, $query1)) {
        
    } else {
        echo "last Query Error";
    }

    // echo $block . "<br>";
    // echo $unitnumber . "<br>";
    // echo $ownername . "<br>";
    // echo $lastname . "<br>";
    // echo $email . "<br>";
    // echo $contact . "<br>";
    // echo $dateofbirth . "<br>";
    // echo $nationality . "<br>";
    // echo $dateofresidency . "<br>";
    // echo $yearofagreement . "<br>";
    // echo $numberofelders . "<br>";
    // echo $numberofchildrens . "<br>";

    $idValue = $_POST['id'];

    // Create a SQL query to delete the row with the specified ID

    $sql = "DELETE FROM resident_details WHERE id='$idValue'";
    // if($sql){
//     echo '<script>alert("ID: '.$sql.'");</script>';

    // }
    if (mysqli_query($db, $sql)) {
        // Display a success message using JavaScript
        echo '<script>alert("vacate Resident");</script>';
        header("Location: vacateresident.php"); 
        exit();

    } else {
        // Display an error message using JavaScript
        // echo '<script>alert("Error deleting row: ' . mysqli_error($db) . '");</script>';
    }

}

?>
 <script>    

// function showMessage() {
//     alert("ID: '.$id.'");
// }
function showMessage() {
    
    var idInput = document.getElementById("id");

   
    var idValue = idInput.value;

   
    // alert("ID: " + idValue);
}

</script>