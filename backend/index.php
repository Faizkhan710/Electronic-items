<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>
<body id="reportsPage">
   <?php include("headers.php");
   ?>

        <div class="container">
            <div class="row">
            <?php
              include("config.php");
              $query = "SELECT * FROM `users`";
              $result=mysqli_query($conn,$query);
              if(!$result){
                echo "error";
              }
              ?>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">user Name</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">User Password</th>
                                    <th scope="col">User Role</th>
                                    <th scope="col">Delete user</th>

                                    
                                </tr>
                            </thead>
                            </tr>
                <?php
                while($row=mysqli_fetch_assoc($result)){

                
                ?>
                <tr>
                <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['passwords']; ?></td>
                  <td><?php 
                  $r1 = $row['role'];
                  if($r1 == 1){
                    echo "Admin";
                  }if($r1 == 2){
                    echo "Product Tester";
                  }if($r1 == 3){
                    echo "Product Adder";
                  }if($r1 == 4){
                    echo "Cpri Tester";
                  }
                  ?></td>
                  

                  <td>  <a class="far fa-trash-alt tm-product-delete-icon" href="delete2.php?id=<?php echo $row['u_id']?>"></a></td>


                </tr>


                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       <?php include("footer.php"); ?>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
</body>

</html>