<!-- HOME PAGE -->

<?php
    #load all functions
    require_once('../private/initialize.php');
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Set page title -->
    <?php $page_title = 'Home'; ?>
    <?php
        #load head
        require_once('../private/shared/head.php');
    ?>

    <body>  
        <?php
            #load navigation
            require_once('../private/shared/nav.php');
        ?>

        <!-- Main content of home page -->
        <main>
            <!-- HERO -->
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-5 p-lg-5 mx-auto my-5 text-white">
                    <h1 class="display-3 font-weight-normal">TASTE IT. LOVE IT. SHARE IT.</h1>
                    <a class="btn btn-outline-light mt-5" href="menu.php">ORDER NOW</a>
                    <!-- EDIT ORDER NOW button href to menu-->
                </div>

                <div class="product-device box-shadow d-none d-md-block"></div>
                <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
            </div>
            
            <!-- OUR STORY -->
            <div class="container">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h2 class="display-4 font-weight-normal">OUR STORY</h2>
                    </div>
                    <div class="row text-center text-lg-left">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                            deserunt mollit anim id est laborum.
        
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                            dolore magna aliqua. In nisl nisi scelerisque eu ultrices vitae auctor. Magna fermentum iaculis eu non 
                            diam phasellus vestibulum lorem. Pellentesque elit eget gravida cum. Adipiscing bibendum est ultricies 
                            integer quis auctor elit sed vulputate. Est velit egestas dui id ornare arcu odio. Turpis egestas sed 
                            tempus urna et pharetra pharetra massa. Tristique sollicitudin nibh sit amet commodo. Sed elementum tempus 
                            egestas sed sed risus pretium quam. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. 
                            Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis.
                        </p>
                    </div>
                </div>
            </div> <!-- END our story container -->
            
            <!-- GALLERY -->
            <div class="container">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h2 class="display-4 font-weight-normal">GALLERY</h2>
                    </div>

                    <!-- Pictures -->
                    <div class="row text-center text-lg-left">
                    
                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/falafel.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/burger.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/catering.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/condiments.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/condiments.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/catering.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/falafel.jpg" alt="">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                        <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="./images/burger.jpg" alt="">
                            </a>
                        </div>

                    </div> <!-- END Pictures div-->
                </div> <!-- END position div-->
            </div> <!-- END Gallery container -->
        </main>

        <?php
            #load footer
            require_once('../private/shared/footer.php');
        ?>

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>