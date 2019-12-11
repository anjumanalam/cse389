<?php  
session_start();

if(isset($_SESSION["sess_user"])){  
    // header("location: login.php");  
    echo "it worked";
    $icon = "<a id='login-cart' class='nav-link' href='menu.php'>Cart</a>";
    $logout = "<a id='logout' class='nav-link' href='logout.php'>Logout</a>";
} else {
  echo "did not work";
  $icon = "<a id='login-cart' class='nav-link' href='login.php'>Login</a>";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Menu | Silk City Platters</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="menu.css" rel="stylesheet">

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
                        <a class="nav-link active" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="send_form_email.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?php echo $icon ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?php echo $logout ?></a>
                    </li>
                </ul>
            </div>
        </div> <!-- close container -->
    </nav>

    <!-- Hero -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5 text-white">
        <h1 class="display-4 font-weight-normal">Menu</h1>
        <p class="lead font-weight-normal">Satisfy your hunger.</p>
      </div>
    </div>

    <!-- Menu Items -->
    <div class="container">
      <div class="row menu_style1">
        <div class="col-md-4">
            <div class="single_menu_list">
              <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
              <div class="menu_content">
                  <h4>Chicken Wings and Fries  <span>$20</span></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum libero asperiores quibusdam 
                    illo fugit nesciunt, reiciendis est quia facere quas. Omnis sunt reprehenderit eaque voluptates, 
                    minima consectetur cumque impedit provident.</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single_menu_list">
              <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg" alt="">
              <div class="menu_content">
                  <h4>Grilled Chicken and Salad <span>$15</span></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam labore maxime iusto sunt, 
                    distinctio animi, illum itaque hic quia nostrum perspiciatis blanditiis reiciendis repellat 
                    numquam repudiandae illo soluta assumenda corporis.</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single_menu_list">
              <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
              <div class="menu_content">
                  <h4>Croissants <span>$20</span></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur rem ea esse veniam amet 
                    nihil odit, reiciendis perferendis autem ab voluptatem quisquam, beatae itaque, laborum soluta! 
                    Recusandae odio cupiditate mollitia.</p>
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