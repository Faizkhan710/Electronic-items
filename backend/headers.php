 <?php
session_start();
if(!isset($_SESSION['name'])){
    header("location:login.php");
  }
?>


<div class="" id="home">
    <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.php">
                    <h1 class="tm-site-title mb-0"><?php echo $_SESSION["name"]; ?></h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <?php
                        
                        if($_SESSION["role"] == 1){
                        
                        
                        
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php } ?>


                        <?php
                        
                        if($_SESSION["role"] == 2 || $_SESSION["role"] == 1 || $_SESSION["role"] == 3){
                        
                        
                        
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="products.php">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>
                        <?php } ?>



                        <?php
                        
                        if($_SESSION["role"] == 4){
                        
                        
                        
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="testing.php">
                                <i class="far fa-file-alt"></i>
                                Tested products
                            </a>
                        </li>


                        <?php } ?>
                        <?php
                        
                        if($_SESSION["role"] == 1 || $_SESSION["role"] == 4){
                        
                        
                        
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="epri_tested.php">
                                <i class="fas fa-cog"></i>
                                Epri Tested products
                            </a>
                        </li>
                        <?php } ?>
                        <?php
                        
                        if($_SESSION["role"] == 1 ){
                        
                        
                        
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="lounching.php">
                                <i class="fas fa-clock"></i>
                                Lounched products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accounts.php">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="logout.php">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>