<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">


    <?php include("headers.php"); ?>

    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">

                            <?php
              include("config.php");
              $query = "SELECT * FROM  products inner join `testing` on products.p_id = testing.p_id inner join cpri on testing.t_id = cpri.t_id inner join lounch on cpri.c_id = lounch.c_id";
              $result=mysqli_query($conn,$query);
              if(!$result){
                echo "error";
              }
              ?>
                                <center>
                                    <h1 style="color:white;font-weight:600;font-family:initial;">Tested Products</h1>
                                </center>
                                <tr>
                                    <th scope="col">lounch_id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Testing</th>
                                    <th scope="col">Cpri_testing</th>
                                    <th scope="col">Price</th>
                                  

                            
                                    <th scope="col">&nbsp;</th>
                                </tr>
                                <?php
                while($row=mysqli_fetch_assoc($result)){

                
                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['l_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['title']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['description']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['testing']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['c_result']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['price']; ?>
                                        </td>
                                      
                                    </tr>
                                    <?php  } ?>
                      
                        </table>
                    </div>
                   






                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                    <h2 class="tm-block-title">Delete Products</h2>
                    <div class="tm-product-table-container">
                        <table class="table tm-table-small tm-product-table">

                            <?php
              $query1 = "SELECT `t_id` FROM `testing`";
              $result1 = mysqli_query($conn,$query1);
              if(!$result1){
                echo "Error";
              }
              ?>
                                <tr>
                                    <th scope="col">Identification</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                <tr>
                                    <?php
                  while($row=mysqli_fetch_assoc($result1)){

                  
                  ?>


                                        <td>
                                            <?php echo $row['t_id']; ?>
                                        </td>
                                        <td>
                                            <a class="far fa-trash-alt tm-product-delete-icon" href="delete1.php?id=<?php echo $row['t_id']?>"></a>
                                        </td>

                                </tr>

                                <?php } ?>
                        </table>
                    </div>
                    <!-- table container -->
                    <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function() {
            $(".tm-product-name").on("click", function() {
                window.location.href = "edit-product.html";
            });
        });
    </script>
</body>

</html>