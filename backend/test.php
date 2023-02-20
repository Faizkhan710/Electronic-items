<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
  <body>
  <?php include("headers.php");
        include("config.php"); 
  ?>
  <?php 
  $u_id = $_GET["id"];
  $query = "SELECT * FROM `products` WHERE `p_id` = '{$u_id}'";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
  }
  ?>
  <div class="container">
    <table class="table table-hover tm-table-small tm-product-table">
 <center> <h1 style="color:white;font-weight:600;font-family:initial;">Products</h1></center>
                  <tr>
                    <th scope="col">Tile</th>
                    <th scope="col">Description</th>
                    <th scope="col">Maker</th>
                    <th scope="col">Department</th>
                    <th scope="col">Code</th>

                    <th scope="col">&nbsp;</th>
                  </tr>
               
                <tr>

                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['maker']; ?></td>
                  <td><?php echo $row['department']; ?></td>
                  <td><?php echo $row['p_code']; ?></td>


                </tr>


              
              </table>
            </div>

            </div>



    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-8 col-sm-8 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Test your Products here!</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form class="tm-edit-product-form"    method="post" >
                <div class="form-group mb-12">
                <div class="form-group mb-12">
                    
                  <div class="form-group mb-12">
                    <label
                      for="testing"
                      >Product testing
                    </label>
                    <input
                      id="name"
                      name="p_testing"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                
                 
                  
                  <div class="form-group mb-12">
                    <label
                      
                      >Tester Name
                    </label>
                    <input
                      id="name"
                      name="tester_name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                  <div class="form-group mb-12">
                    <label
                     
                      >Remarks</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      name="Remarks"
                      required
                    ></input>
                  </div>
                  <div class="form-group mb-12">
                    <label
                     
                      >Status
                    </label>
                    <input
                      id="name"
                      name="status"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      
                      >Result
                    </label>
                   
                 
                <select class="custom-select"  name="results" class="form-control validate"  id="name">
                <option value="0">Fail</option>
                <option value="1">Pass</option>
                
                
              </select>

              </div>
                                      
                  </div>                 
            </div>            
              <div class="col-12">
                <button type="submit" name="add" class="btn btn-primary btn-block text-uppercase">Enter</button>
              </div>
            </form>
            </div>
          </div>
        </div>


<?php
if(isset($_POST['add'])){


  $u_id = $_GET["id"];
  $testing = $_POST['p_testing'];
  $tester_name = $_POST['tester_name'];
  $remarks = $_POST['Remarks'];
  $result = $_POST['results'];
  $t_status = $_POST['status'];


  $query1 = "INSERT INTO `testing`(`testing`, `remarks`, `result`, `t_status`, `tester_name`,`p_id`) VALUES ('$testing','$remarks','$result','$t_status','$tester_name' ,'$u_id')";

  $result1 = mysqli_query($conn,$query1);
  if($result1){
    echo '<script>alert("Product Added...")</script>';

    // header("location:http://localhost:82/eprojects1/backend/testing.php");

    


  }else{
    echo "sorry";
  }

  


  
}
error_reporting(0);

?>



        
      </div>
    </div>
 <?php include("footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
