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
    
    <!-- <div class="container mt-4">

        <a href="index.php" class="text-white text-decoration-none">
            <h1 class="hammersmith-one-regular">CRUD APPLICATION</h1>
        </a>
    </div> -->

   <div class="container d-flex justify-content-center mt-5">
    <form action="php/signup_config.php" method="POST" class="mt-5" style="width:450px;">
        <h1 class="text-center text-warning">Sign Up</h1>
        <!-- NAME -->
        <div class="input-container mt-3">
            <input class="text-white" name="name" type="name" id="inputField" >
            <label id="name_input" for="inputField">name: </label>
        </div>

        <!-- EMAIL -->
        <div class="input-container mt-3">
            <input class="text-white" name="email" type="email" id="inputField" >
            <label id="name_input" for="inputField">Email: </label>
        </div>


        <!-- password -->
        <div class="input-container mt-3">
            <input class="text-white" name="password" type="password" id="inputField" >
            <label id="name_input" for="inputField">password: </label>
        </div>

        <!-- confirm password -->
        <div class="input-container mt-3">
            <input class="text-white" name="password" type="password" id="inputField" required>
            <label id="name_input" for="inputField">confirm password: </label>
        </div>

       
        <input type="submit" name="submit" value="Signup"  class="btn btn-warning mt-2" >
    
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