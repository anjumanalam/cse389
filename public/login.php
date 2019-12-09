<?php
    #load all functions
    require_once('../private/initialize.php');
?>

<!-- Login form functionality -->
<?php
session_start();

// function login();

// function login($username, $password)
// {

//     require_once '../../dbpw.php';

//     $mysqli = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

//     if (mysqli_connect_errno()) {
//       printf("Connect failed: %s\n", mysqli_connect_error());
//       exit();
//     }

//     $query = 'SELECT username FROM admins WHERE username=? AND password=?';

//     if($stmt = $mysqli->prepare($query)){
//       $stmt->bind_param('ss', $username, $password)
//       $stmt->execute();
//       $stmt->store_result();
//       $num_row = $stmt->num_rows;
//       $stmt->bind_result($username);
//       $stmt->fetch();
//       $stmt->close();
//     }else die("Failed to prepare query");

//     if( $num_row === 1 ) {
//       $_SESSION['userid'] = $username;
//       return true;
//     }
//     return false;
// }

// #validate login
// if (isset($_POST['submit'])){
//     $validLogin = login($_POST['username'], $_POST['password']);

//     if ($validLogin){
//         header("Location: menu.php");
//         exit();
//      } else {
//         echo 'Incorrect login information';
//      }
// }



if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if( isset($_POST['addToCart'])) {
    $_SESSION['cart'][] = $_POST['item_type'];
}
// $_SESSION['cart'] = array(); NOT NECESSARY
// $_SESSION['cart'][] = "1"; NOT NECESSARY
// $_SESSION['cart'][] = "2"; NOT NECESSARY

$hostname = "localhost";
$username = "mario";
$password = "password";
$db = "scp";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];

  $query = "INSERT INTO user
  VALUES ('$username', '$password')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your review.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    
    <!-- Set page title -->
    <?php $page_title = 'Login'; ?>
    <?php
        #load head
        require_once('../private/shared/head.php');
    ?>

<body>

    <!-- Navigation -->
    <?php
        #load navigation
        require_once('../private/shared/nav.php');
    ?>


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
                    <form action="index.html" method="POST" role="form">
                        <div class="input-group mb-3">
                            <label for="username"></label>
                            <input id="username" type="text" name="username" class="form-control input_user" value="" placeholder="username">
                        </div> <!-- END username input -->

                        <div class="input-group mb-2">
                            <label for="password"></label>
                            <input id="password" type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                        </div> <!-- END password input -->

                            <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="submit" class="btn login_btn">Login</button>
                    </div>
                    </form>
                    
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>


</html>