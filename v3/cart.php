<?php
    session_start();

    if(isset($_SESSION["sess_user"])){  
        echo "it worked";
        $icon = "<a id='login-cart' class='nav-link' href='menu.php'>Cart</a>";
    } else {
        echo "did not work";
        $icon = "<a id='login-cart' class='nav-link' href='login.php'>Login</a>";
    }

    // if(!isset($_SESSION['cart'])) {
    //     $_SESSION['cart'] = array();
    // }

    // if( isset($_POST['addToCart'])) {
    //     $_SESSION['cart'][] = $_POST['item_type'];
    // }

    // $_SESSION['cart'] = array(); NOT NECESSARY
    // $_SESSION['cart'][] = "1"; NOT NECESSARY
    // $_SESSION['cart'][] = "2"; NOT NECESSARY
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart | Silk City Platters</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="home.css" rel="stylesheet"> -->
</head>

<body>
<!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand active" href="index.php">Silk City Platters</a>
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
                    <li class="nav-item">
                        <a href='#'><?php echo $icon ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?php echo $logout ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
    



    </main>


</body>
</html>

