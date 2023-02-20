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
  ?>

  <?php 
  include("config.php");
  
  $query ="SELECT * FROM  products inner join `testing` on products.p_id = testing.p_id";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
  }
  ?>
  <div class="container">
    <table class="table table-hover tm-table-small tm-product-table">
 <center> <h1 style="color:white;font-weight:600;font-family:initial;">Product Info!</h1></center>
                  <tr>
                    <th scope="col">Tile</th>
                    <th scope="col">Description</th>
                    <th scope="col">Maker</th>
                    <th scope="col">Department</th>
                   

                    <th scope="col">&nbsp;</th>
                  </tr>
               
                <tr>

                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['tester_name']; ?></td>
                  <td><?php echo $row['department']; ?></td>
                 


                </tr>


              
              </table>
            </div>

            </div>


    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form class="tm-edit-product-form" method="POST">
                 
                
                  
                  <div class="form-group mb-12">
                    <label
                      for="description"
                      >Remarks</label
                    >
                    <input
                      class="form-control validate"
                      
                      name="remarks"
                      required
                    ></input>
                  </div>
                  <div class="form-group mb-12">
                    <label               
                      >Result
                    </label>   
                <select class="custom-select"  name="result" class="form-control validate"  id="name">
                <option value="0">Fail</option>
                <option value="1">Pass</option>
              </select>
                  
                  </div>
                
                  </div>
              </div>
              <div class="col-12">
                <button type="submit" name="add" class="btn btn-primary btn-block text-uppercase">Cpri Test!</button>
              </div>
            </form>

<?php
include("config.php");


if(isset($_POST['add']))
{
  $t_id = $_GET["id"];
$title = $row['title'];
$remarks = $_POST['remarks'];
$result = $_POST['result'];

$query = "INSERT INTO `cpri`(`title`, `reamerks`, `c_result`, `t_id`) VALUES ('$title','$remarks','$result','$t_id')";
$result = mysqli_query($conn,$query);
if($result){
  echo "Added";
  // header("location:http://localhost/eprojects1/backend/epri_tested.php");
}else{
  $r =  $_POST['c_result'];
  if($r == 0){
    echo "Failed!";
  }
}


}



?>









            </div>
          </div>
        </div>
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
