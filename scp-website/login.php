<?php
if(isset($_POST["submit"])){
    // if user inputs values into both the username and password fields
    if(!empty($_POST['username']) && !empty($_POST['password'])) {  
        $user=$_POST['username'];  //store username value into user variable
        $pass=$_POST['password'];  //store password value into pass variable
      
        // Connect to database
        $con=mysqli_connect('localhost','root','', 'scp') or die(mysql_error());  
        mysqli_select_db($con, 'scp') or die("cannot select DB");

        // Query database for matching credentials
        $query=mysqli_query($con, "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0) {
            while($row=mysqli_fetch_assoc($query)){
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
            }

            if($user == $dbusername && $pass == $dbpassword) {  
                session_start();  
                $_SESSION['sess_user']=$user;
                /* Redirect browser */  
                header("Location: menu.php");
            }
        }
        // if username and password were not found in the query
        else {
            echo '<script type="text/javascript">';
            echo ' alert("Incorrect username or password.")';
            echo '</script>';
        }
    }
    // If username or password is empty
    else {
        echo '<script type="text/javascript">';
        echo ' alert("All fields required!")';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login | Silk City Platters</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- External Stylesheet -->
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Silk City Platters</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="send_form_email.php">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../project-content/New SCP LOGO.png" class="brand_logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form_container">
                    <!-- FORM -->
                    <form action="login.php" method="POST" role="form">
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input id="username" type="text" name="username" class="form-control input_user" value="" placeholder="username">
                        </div> <!-- END username input -->

                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                        </div> <!-- END password input -->

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input class="btn btn-primary" name="submit" type="submit" id="btn" value="Login">
                        </div>
                    </form>   
                </div> <!-- END form container -->
            </div> <!-- END user card -->
        </div>
    </div> <!-- END container -->



    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>