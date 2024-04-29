

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- hammersmith one font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <?php include 'all_alerts.php'; ?>

   <div class="container d-flex justify-content-center mt-5">
    <form action="login_config.php" method="POST" class="mt-5" style="width:450px;">
        <h1 class="text-center text-warning">Login</h1>
        <!-- NAME -->
        <div class="input-container mt-3">
            <input class="text-white" name="email" type="email" id="inputField" required>
            <label id="name_input" for="inputField">Email: </label>
        </div>

        <!-- EMAIL -->
        <div class="input-container mt-3">
            <input class="text-white" name="password" type="text" id="inputField" required>
            <label id="name_input" for="inputField">password: </label>
        </div>

        <!-- ROLE -->
        <div class="input-container mt-3">
            <select name="role" class="text-white" id="role" required>
                <option value="" disabled selected>Select Role:</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <!-- <label for="role">Role: </label> -->
        </div>
        
        <div class="row">
            <div class="col">
                <input type="submit" name="submit" value="Login"  class="btn btn-warning " >

            </div>
            <div class="col">
                <h5><a href="signup.php" class="text-muted text-decoration-none">Create Account!</a></h5>
            </div>
        </div>
    </form>
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

