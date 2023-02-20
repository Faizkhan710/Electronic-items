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



        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Service single</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Service single</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        
   <!-- start all-services-section -->
   <section class="all-services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Lounched Products</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids">
                        <?php
                                    include("config.php");
                                    $query =  "SELECT * FROM  products inner join `testing` on products.p_id = testing.p_id inner join cpri on testing.t_id = cpri.t_id inner join lounch on cpri.c_id = lounch.c_id";
                                    $result = mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0 ){
                                        while($row=mysqli_fetch_assoc($result))
                                    {
                                    
                                    
                                    ?>
                            <div class="grid">
                                <div class="img-overlay">
                                <img class="card-img-top" src="backend/upload/<?php echo $row["img"]; ?>" alt="" style="width: 80%; height: 80%;">
                                    <div class="overlay">
                                        <a href="product_details.php"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="details">
                                <h3><h4>Title :</h4><?php echo $row['title']; ?></h3>
                                <h3><h4>Description :</h4><?php echo $row['description']; ?></h3>
                                    <h3><h4>Company Test :</h4><?php echo $row['testing']; ?></h3>
                                    <p><h4>Cpri Test :</h4><?php  
                                  $r = $row['c_result'];
                                    if($r == 1){
                                        echo "pass";
                                    }else{
                                        echo "fail";
                                    }
                                    ?></p>
                         <h3><h4>product Price :</h4><?php echo $row['price']; ?></h3>

                                  
                                    <div class="read-more">
                                       
                                    </div>
                                </div>
                            </div>
                            <?php }  } ?>
                           
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end all-services-section -->
     


      


        <?php include("footer.php"); ?>




    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>
