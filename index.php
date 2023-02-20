<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Clinkers - Industry, Factory and Engineering Template </title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->


        <?php include("headers.php"); ?>

        <!-- start of hero -->
        <section class="hero hero-slider-wrapper hero-style-2">
            <div class="hero-slider">
                <div class="slide">
                    <img src="assets/images/slider/slide-2.jpg" alt class="slider-bg"  >
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                                <h2><span>One Industry</span>All Solution</h2>
                                <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="btns">
                                    <a href="about.php" class="theme-btn" style="border-radius: 25px;">About US</a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    
                </div>




        </section>
        <!-- end of hero slider -->



        <!-- start projects-section -->
        <section class="projects-section section-padding padding-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>All our products are here</h2>
                            <p>You can see all products of our company!</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                         
                                <li><a data-filter=".construction" class="current" href="#">Products</a></li>
                                <li><a data-filter=".plant" href="#">Tested products</a></li>
                                <li><a data-filter=".mechanical" href="#">Cpri Tested</a></li>
                                <li><a data-filter=".welding" href="#">Lounched Products</a></li>
                            </ul>
                        </div>
                        <div class="gallery-container">
                        <?php
                                    include("config.php");
                                    $query = "SELECT * FROM `products`";
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0 ){
                                        while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                    
                                    ?>
                       
                            <div class="box construction">
                            <img  src="backend/upload/<?php echo $row["img"]; ?>" alt="" style="width: 90%; height: 60%;">
                               
                                
                                <div class="details">
                                    <div class="info">
                                        <span class="cat"><?php echo $row['title']; ?></span>
                                        <h3><a href="#"><?php echo $row['description']; ?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <?php }  } ?>


                            
                            <?php
                                    include("config.php");
                                    $query = "SELECT * FROM `products` inner join `testing` on products.p_id = testing.p_id";
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0 ){
                                        while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                    
                                    ?>


                            <div class="box plant">
                            <img  src="backend/upload/<?php echo $row["img"]; ?>" alt="" style="width: 90%; height: 60%;">
                                <div class="details">
                                    <div class="info">
                                        <span class="cat"><?php echo $row['tester_name']; ?></span>
                                        <h3><a href="#"><?php
                                        $r = $row['result'];
                                        if($r == 1){
                                            echo "pass";
                                        }else{
                                            echo "faile";
                                        }
                                        ?></a></h3>
                                    </div>
                                </div>
                            </div>

                            <?php }  } ?>





 <?php
                                    include("config.php");
                                    $query = "SELECT * FROM `products` inner join `testing` on products.p_id = testing.p_id inner join `cpri` on testing.t_id = cpri.t_id";
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0 ){
                                        while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                    
                                    ?>



                            <div class="box mechanical">
                            <img  src="backend/upload/<?php echo $row["img"]; ?>" alt="" style="width: 90%; height: 60%;">
                                <div class="details">
                                    <div class="info">
                                        <span class="cat"><h4>Title:</h4><?php echo $row['title']; ?></span>
                                        <h3><a href="#"><h4>Cpri-Result:</h4><?php
                                        $r1 = $row['c_result'];
                                        if($r1 == 1){
                                            echo "Passed";
                                        }else{
                                            echo "Failed";
                                        }
                                        ?></a></h3>
                                    </div>
                                </div>
                            </div>

                            <?php }  } ?>



                            <?php
                                    include("config.php");
                                    $query = "SELECT * FROM `products` inner join `testing` on products.p_id = testing.p_id inner join `cpri` on testing.t_id = cpri.t_id inner join `lounch` on cpri.c_id = lounch.c_id";
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0 ){
                                        while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                    
                                    ?>






                            <div class="box welding">
                            <img  src="backend/upload/<?php echo $row["img"]; ?>" alt="" style="width: 90%; height: 60%;">
                                <div class="details">
                                    <div class="info">
                                        <span class="cat"><h4 style="color: white;">Title:</h4><?php echo $row['title']; ?></span>
                                        <h6 style="color: orange; " ><a href="#"><h4 style="color: white;" >Description:</h4><?php echo $row['description']; ?></a></h6>
                                        <h3 style="color: white;">Price:<?php echo $row['price'] ?></h3>
                                    </div>
                                </div>
                            </div>


                            <?php }  } ?>



                           


                            



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects-section -->






        <!-- start services-section-s2 -->
        <section class="services-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Our Products</h2>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids services-slider-s2">
                            <div class="grid">
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-1.png" alt></div>
                                        <h3>Products</h3>
                                    </div>
                                    <p>All products of our community you can see all products here..</p>
                                    <div class="more">
                                        <a href="services.php">See More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-2.png" alt></div>
                                        <h3>Products on Testing</h3>
                                    </div>
                                    <p>products that are testing on our company oyu can see here tested products..</p>
                                    <div class="more">
                                        <a href="service-single.php">See More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-3.png" alt></div>
                                        <h3>Cpri Tested Products</h3>
                                    </div>
                                    <p>You can see Cpri tested products here completely certified..</p>
                                    <div class="more">
                                        <a href="cpri-details.php">See More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-4.png" alt></div>
                                        <h3>All lounched products!</h3>
                                    </div>
                                    <p>You can see lounched after testings!..</p>
                                    <div class="more">
                                        <a href="meterial-engineering.php">See More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-5.png" alt></div>
                                        <h3>About our company</h3>
                                    </div>
                                    <p>See about our company..</p>
                                    <div class="more">
                                        <a href="about.php">See More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-6.png" alt></div>
                                        <h3>Contact us!</h3>
                                    </div>
                                    <p>Regester yourself right here..</p>
                                    <div class="more">
                                        <a href="contact.php">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-1.png" alt></div>
                                        <h3>Mechanical Engineering</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-2.png" alt></div>
                                        <h3>Automobile Services</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-3.png" alt></div>
                                        <h3>Bridge Construction</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-4.png" alt></div>
                                        <h3>Steel Industry</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-5.png" alt></div>
                                        <h3>Knitwear Products</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="service-title">
                                        <div class="icon"><img src="assets/images/services/icon-6.png" alt></div>
                                        <h3>Timber Production</h3>
                                    </div>
                                    <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia..</p>
                                    <div class="more">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <p class="view-all-services"> Click here to view <a href="meterial-engineering.php">All Services <i class="fa fa-long-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end services-section-s2 -->




        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Our Team</h2>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
<div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids team-slider">
                            <div class="grid">
                                <div class="img-holder-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/a6.jpg" alt="">
                                    </div>
                                    
                                </div>
                                <div class="details">
                                    <h4>Juniad Hashim</h4>
                                    <span class="post">Design Maker</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/a4.jpg" alt="">
                                    </div>
                                    <div class="social">
                                      
                                    </div>
                                </div>
                                <div class="details">
                                    <h4>Rafay Khan</h4>
                                    <span class="post">Project Manager and backend handler!</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder-social">
                                    <div class="img-holder">
                                        <img src="assets/images/team/a2.png" alt="">
                                    </div>
                                   
                                </div>
                                <div class="details">
                                    <h4>Azhan Amir</h4>
                                    <span class="post">Documentation Maker</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end team-section -->


       




        <!-- start fun-fact-section -->
        <section class="fun-fact-section">
            <h2 class="hidden">Fun fact</h2>
            <div class="container">
                <div class="row start-count">
                    <div class="col col-md-5 col-xs-4">
                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-1.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1200">00</span><span>+</span>
                            </h3>
                            <p>projects</p>
                        </div>
                    </div>
                    <div class="col col-md-4 col-xs-4">
                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-2.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="400">00</span><span>+</span>
                            </h3>
                            <p>Factories</p>
                        </div>
                    </div>
                    <div class="col col-md-3 col-xs-4">
                        <div class="grid">
                            <div class="icon">
                                <img src="assets/images/fun-fact/icon-3.png" alt>
                            </div>
                            <h3>
                                <span class="counter" data-count="1000">00</span><span>+</span>
                            </h3>
                            <p>Employees</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end fun-fact-section -->


 <!-- start testimonials-section-s2 -->
 <section class="testimonials-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4">
                        <div class="section-title-s2">
                            <h2>Reviews of <br>our clients</h2>
                        </div>
                    </div>
                    <div class="col col-lg-8 col-md-8">
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-11 col-lg-offset-1">
                        <div class="testimonials-grids testimonials-slider">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/r3.png" alt>
                                </div>
                                <div class="details">
                                    <h3>“Impressive Performance & Productivity”</h3>
                                    <span class="client-info">- Daniel Craig, Google</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                                   
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/r1.png" alt>
                                </div>
                                <div class="details">
                                    <h3>“Impressive Performance & Productivity”</h3>
                                    <span class="client-info">- Daniel Craig, Google</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non num quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commo di conse quatur.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonials-section-s2 -->

        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-text">
                            <h3>We provide innovative Product Solutions for sustainable progress.</h3>
                            <a href="about.php" class="theme-btn-s2">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end cta-section -->


        <!-- start news-section-s2 -->
        <section class="news-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>services</h2>
                            <p>We try our best for your product!</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="news-grids">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/o1.jpg" alt>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="services.php">You can add all of your products here!</a></h3>
                                    <p>Your products will test, qui dolorem ipsum quia dolor sit amet..</p>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                            <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/o2.jpg" alt>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="cpri_details.php">Add products for company testing!</a></h3>
                                    <p>your products will test, qui dolorem ipsum quia dolor sit amet..</p>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                            <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="assets/images/blog/o3.png" alt>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="meterial-engineering.php">All products tested and ready for lounch!</a></h3>
                                    <p>Your products lounched, qui dolorem ipsum quia dolor sit amet..</p>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> <a href="#">Nov 26</a></li>
                                            <li><i class="fa fa-comments-o"></i> <a href="#">2 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
        </section>
        <!-- end news-section-s2 -->







   <?php include("footer.php"); ?>

    



        <!-- All JavaScript files
    ================================================== -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugins for this template -->
        <script src="assets/js/jquery-plugin-collection.js"></script>

        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key"></script>

        <!-- Custom script for this template -->
        <script src="assets/js/script.js"></script>
</body>

</html>