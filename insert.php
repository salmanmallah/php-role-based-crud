<?php
include 'php/db_config.php';


   // GETTING DATA FROM HTML FORM.
$name = $_POST["name"];
$father_name = $_POST["father_name"];
$email =  $_POST["email"];
$roll_number = $_POST["roll_number"];
$age = $_POST["age"];
$phone = $_POST["phone"];

// CREATING QUERY TO INSERT DATA INTO STUDENT-TABLE.
$sql = "INSERT INTO student_table (name, father_name, email, roll_number, age, phone) VALUES ('$name', '$father_name', '$email', '$roll_number', '$age', '$phone')";

if ($conn->query($sql) === TRUE){
    $success = true;
}else{
    $success = false;
    $error_message = "Error" . $sql . "<br>" . $conn->error;
}

// CLOSING THE CONNECTION.
$conn->close();

// passing the success variable  to index.html
header("Location: index.php?success=" . ($success ? 'true' : 'false') . "&error_message=" . urlencode($error_message));
?>