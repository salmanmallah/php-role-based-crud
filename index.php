<?php
   session_start();
   if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['id'])) {
    ?>

<?php include 'php/db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- hammersmith one font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <style>
    /* Custom Styles */
    .navbar {
        background-color: #1d2530 !important;
    }
    #successAlert {
    right: 0; /* Position it to the right side */
    top: 14%; /* Adjust vertical positioning if needed */
    transform: translateY(-50%); /* Center vertically */
    z-index: 1000; /* Ensure it's on top of other content */
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
    <a href="index.php" class="navbar-brand">
    <h1 class="hammersmith-one-regular text-white">CRUD APPLICATION</h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">logout <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  </div>
</div>  
</nav>

    
    <div class="container mt-4">
        <?php include 'all_alerts.php';?>

        
        
        

        <form action="insert.php" method="POST" class="mt-3">
            <div class="row">
                <div class="col-md-6">
                    <!-- NAME -->
                    <div class="input-container mt-3">
                        <input class="text-white" name="name" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Name: </label>
                    </div>

                    <!-- FATHER NAME -->
                    <div class="input-container mt-3">
                        <input class="text-white" name="father_name" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Father Name: </label>
                    </div>
                    
                    <!-- EMAIL -->
                     <div class="input-container mt-3">
                        <input class="text-white" name="email" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Email: </label>
                    </div>
                    
                    
                </div>
                <div class="col-md-6">

                    <!-- ROLL NUMBER -->
                    <div class="input-container mt-3">
                        <input class="text-white" name="roll_number" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Roll Number: </label>
                    </div>

                    <!-- AGE -->
                    <div class="input-container mt-3">
                        <input class="text-white" name="age" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Age: </label>
                    </div>

                    <!-- PHONE -->
                     <div class="input-container mt-3">
                        <input class="text-white" name="phone" type="text" id="inputField" required>
                        <label id="name_input" for="inputField">Phone: </label>
                    </div>
                </div>    
            </div>
            <input type="submit" name="submit" value="Insert Data"  class="btn btn-warning mt-2" >
        </form>

        <hr class="bg-dark mt-4 mb-4">

        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <?php  if ($_SESSION["role"] == "admin"){
                    ?>
                        <th scope="col">Admin Operation</th>
                    <?php
                    }    
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = "SELECT * FROM student_table ORDER BY student_table.id DESC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $counter = 1;
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                            echo "<th scope='row'>" . $counter . "</th>"; // Assuming you have an ID column
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["father_name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["roll_number"] . "</td>";
                            echo "<td>" . $row["age"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            if ($_SESSION["role"] == "admin"){

                                echo "<td>
                                    <a href='update.php?id=" .  $row['id'] . "' class='btn btn-success'>Update</a>
                                    <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>delete</a>
                                </td>";
    
                                echo "</tr>";
                            }
                            
                            $counter += 1;
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>


    </div>
    


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript to make alerts disappear after a few seconds
        $(document).ready(function(){
            $("#successAlert").fadeTo(2000, 500).slideUp(500, function(){
                $("#successAlert").slideUp(500);
            });
            $("#errorAlert").fadeTo(2000, 500).slideUp(500, function(){
                $("#errorAlert").slideUp(500);
            });
        });
    </script>

</body>
</html>
    <?php
   }else{
    header("Location: login.php");
   } 

?>