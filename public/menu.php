<?php
    #load all functions
    require_once('../private/initialize.php');
?>

<!doctype html>
<html lang="en">
    <!-- Set page title -->
    <?php $page_title = 'Menu'; ?>
    <?php
        #load head
        require_once('../private/shared/head.php');
    ?>

    <style>
      body {
      font-family: 'Montserrat', sans-serif;
      color: #333;
      line-height: 1.6;
    }
    .pt-100{
        padding-top:100px;
    }
    .pb-100{
        padding-top:100px;
    }
    .mb-60 {
      margin-bottom: 60px;
    }
    .section-title p {
      font-size: 24px;
      font-family: Oleo Script;
      margin-bottom: 0px;
      margin-top:50px;
    }
    .section-title h4 {
      font-size: 40px;
      text-transform: capitalize;
      color: #FF5E18;
      position: relative;
      display: inline-block;
      padding-bottom: 25px;
    }
    .section-title h4::before {
      width: 80px;
      height: 1.5px;
      bottom: 0;
      left: 50%;
      margin-left: -40px;
    }
    .section-title h4::before, .section-title h4::after {
      position: absolute;
      content: "";
      background-color: #FF5E18;
    }
    .single_menu_list img {
      max-width: 30%;
      position: absolute;
      left: 0px;
      top: 0;
      border: 1px solid #ddd;
      padding: 3px;
      border-radius: 50%;
      transition: .4s;
    }
    .menu_style1 .single_menu_list img {
      position: static;
      width: 100%;
      display: block;
      margin: 0 auto;
      margin-bottom: 45px;
    }
    .single_menu_list h4 {
      font-size: 20px;
      border-bottom: 1px dashed #333;
      padding-bottom: 15px;
      margin-bottom: 10px;
    }
    .single_menu_list h4 span {
      float: right;
      font-weight: bold;
      color: #FF5E18;
      font-style: italic;
    }
    p {
      font-weight: 300;
      font-size: 14px;
    }
    .menu_style1 .single_menu_list {
      text-align: center;
    }
    .single_menu_list:hover img {
      border-radius: 0;
      transition: .4s;
    }
    </style>

  <body>
    <!-- Navigation -->
    <?php
        #load navigation
        require_once('../private/shared/nav.php');
    ?>

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