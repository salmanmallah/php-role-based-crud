<?php
   session_start();
   if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['id'])) {
    ?>
<?php

include 'php/db_config.php';

// getting values 
$user_id = $_POST["id"];
$name = $_POST["name"];
$father_name = $_POST["father_name"];
$email =  $_POST["email"];
$roll_number = $_POST["roll_number"];
$age = $_POST["age"];
$phone = $_POST["phone"];

// CREATING QUERY TO UPDATE DATA INTO STUDENT_TABLE.
$update_query = "UPDATE student_table SET 
    name = '$name', 
    father_name = '$father_name', 
    email = '$email', 
    roll_number = '$roll_number',
    age = '$age',
    phone = '$phone'
    WHERE id = $user_id";

if ($conn->query($update_query) === TRUE){
    $update_success = true;
}else{
    $update_success = false;
    $udpate_error_message = "Error" . $sql . "<br>" . $conn->error;
}

// CLOSING THE CONNECTION.
$conn->close();

// passing the success variable  to index.html
header("Location: index.php?update_success=" . ($update_success ? 'true' : 'false') . "&udpate_error_message=" . urlencode($udpate_error_message));
?>


<?php
}else{
header("Location: login.php");
} 

?>