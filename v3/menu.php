<?php  
session_start();

$logout = "";
if(isset($_SESSION["sess_user"])){   
    $icon = "<a id='login-cart' class='nav-link' href='cart.php'>Cart</a>";
    $logout = "<a id='logout' class='nav-link' href='logout.php'>Logout</a>";
} else {
  $icon = "<a id='login-cart' class='nav-link' href='login.php'>Login</a>";
}

require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {

switch($_GET["action"]) {
case "add":
if(!empty($_POST["quantity"])) {
  $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
  $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
  
  if(!empty($_SESSION["cart_item"])) {
    if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($productByCode[0]["code"] == $k) {
            if(empty($_SESSION["cart_item"][$k]["quantity"])) {
              $_SESSION["cart_item"][$k]["quantity"] = 0;
            }
            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
          }
      }
    } else {
      $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
    }
  } else {
    $_SESSION["cart_item"] = $itemArray;
  }
    }
    
break;

case "remove":
if(!empty($_SESSION["cart_item"])) {
  foreach($_SESSION["cart_item"] as $k => $v) {
      if($_GET["code"] == $k)
        unset($_SESSION["cart_item"][$k]);				
      if(empty($_SESSION["cart_item"]))
        unset($_SESSION["cart_item"]);
  }
    }
    
break;

case "empty":
unset($_SESSION["cart_item"]);
break;	
}
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
    <link href="main-style.css" rel="stylesheet">

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

    <?php
      $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
      if (!empty($product_array)) { 
        for($key = 0; $key < sizeof($product_array); $key+=3){
    ?>

    <!-- Menu Items -->
    <div class="container">
      <div class="row menu_style1">
        <div class="col-md-4">
            <div class="single_menu_list">
            <div><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
              <!-- <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt=""> -->
              <div class="menu_content">
                  <h4><?php echo $product_array[$key]["name"]; ?>  <span><?php echo ('$'.$product_array[$key]["price"]); ?></span></h4>
                  <p><?php echo $product_array[$key]["description"]; ?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single_menu_list">
            <div><img src="<?php echo $product_array[$key+1]["image"]; ?>"></div>
              <!-- <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg" alt=""> -->
              <div class="menu_content">
              <h4><?php echo $product_array[$key+1]["name"]; ?>  <span><?php echo ('$'.$product_array[$key+1]["price"]); ?></span></h4>
                  <p><?php echo $product_array[$key+1]["description"]; ?></p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single_menu_list">
            <div><img src="<?php echo $product_array[$key+2]["image"]; ?>"></div>
              <!-- <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt=""> -->
              <div class="menu_content">
              <h4><?php echo $product_array[$key+2]["name"]; ?>  <span><?php echo ('$'.$product_array[$key+2]["price"]); ?></span></h4>
                  <p><?php echo $product_array[$key+2]["description"]; ?></p>
              </div>
            </div>
        </div>
    </div>

    <?php
          }
        }
    ?>

    <div id="product-grid">
    <?php
    $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
    if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
    ?>
      <div class="product-item">
        <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
        <div class="product-tile-footer">
        <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
        <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
        <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
        </div>
        </form>
      </div>
    <?php
      }
    }
    ?>
  </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>