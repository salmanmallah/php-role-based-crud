<?php
include 'db_config.php';

// start of data filteration
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}
// end of data filteration


// CREATING QUERY TO INSERT DATA INTO LOGIN-TABLE.
$sql = "INSERT INTO login_table (role, name, email, password) VALUES ('user', '$name', '$email', '$password')";

if ($conn->query($sql) === TRUE){
    $success = true;
}else{
    $success = false;
    $error_message = "Error" . $sql . "<br>" . $conn->error;
}

// CLOSING THE CONNECTION.
$conn->close();

// passing the success variable  to index.html
header("Location: ../login.php?signup_success=" . ($success ? 'true' : 'false') . "&signup_error_message=" . urlencode($error_message));


?>