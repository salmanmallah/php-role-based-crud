<?php
session_start();
include 'php/db_config.php';

// start of data filteration
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$role = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $role = test_input($_POST["role"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}
// end of data filteration

// varifying that php is getting the form value
echo "<h1>";
echo $role;
echo $email;
echo $password;
echo "</h1>";


// CREATING QUERY TO SELECT THE USER IF EXISTS..
$sql = "SELECT * FROM login_table WHERE email = '$email' AND password= '$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($email == $row['email'] && $password == $row["password"] && $role == $row["role"]){
        echo "password email successfuly matched.";
        $success = true;
        $_SESSION['id'] = $row["id"];
        $_SESSION['name'] = $row["name"];
        $_SESSION['role'] = $row["role"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['name'] = $row["name"];
        // passing the success variable  to index.html

        header("Location: index.php?login_success=" . ($success ? 'true' : 'false'));
    }else {
    echo "login failed?";
    $login_success = false;
    header("Location: login.php?login_success=" . ($success ? 'true' : 'false'));
    }
} else {
    echo "login failed?";
    $login_failed = true;
    header("Location: login.php?login_failed=" . ($success ? 'true' : 'false'));
}
$conn->close();

// passing the success variable  to index.html
// header("Location: ../login.php?signup_success=" . ($success ? 'true' : 'false') . "&signup_error_message=" . urlencode($error_message));


?>