<?php
   session_start();
   if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['id'])) {
    ?>

<?php include 'php/db_config.php'; ?>
<?php

$id = $_GET["id"];

$sql = "DELETE FROM student_table WHERE student_table.id = $id";

// deleting the record.
if ($conn->query($sql) === TRUE) {
    $delete_success = true;
} else {
    $delete_success = false;
    $delete_error_message = "Error" . $sql . "<br>" . $conn->error;
}

// CLOSING THE CONNECTION.
$conn->close();

// passing the success variable to index.php
header("Location: index.php?delete_success=" . ($delete_success ? 'true' : 'false') . "&delete_error_message=" . urlencode($delete_error_message));
?>


<?php
}else{
header("Location: login.php");
} 

?>