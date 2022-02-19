<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styledetail.css?v=<?php echo time(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Roboto&display=swap"
          rel="stylesheet" />
</head>
<body>
   
<nav id="navCustom" class="navbar sticky-top navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="projectImages/projectImages/logo-white.svg" class="img" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navItem"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navItem">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="index.php#menu">Menu</a>
                    <a class="nav-link" href="index.php#gallery">Gallery</a>
                    <a class="nav-link" href="index.php#testimonials">Testimonials</a>
                    <a class="nav-link" href="#ContactSection">Contact Us</a>
                    <a class="nav-link" href="#search">Search</a>
                    <a class="nav-link" href="#profile">Profile</a>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#cartModal" href="#">Cart<label id="cartInput">
                        <?php 
                        if(isset($_COOKIE["cart"])){
                            echo count(explode(",",$_COOKIE["cart"]));
                        } else {
                            echo "0";
                        }
                         ?></label></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cart Content</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <h5 class="col-6">Item</h5>
                            <h5 class="col-6">Price</h5>
                        </div>
                        <?php
                        require "php/meal_dp.php";
                        $totPrice=0;
                        if(isset($_COOKIE["cart"])):
                            $arrMeal = explode(",",$_COOKIE["cart"]);
                            ?>


                            <?php for ($count=0; $count < count($arrMeal) ; $count++): ?>
                            <?php $meals = new meal_db(); $finalCart = $meals->getMealById($arrMeal[$count]) ?>
                            <div id="cartMeal1" class="row">
                                <h6 class="col-6"><?php echo $finalCart["title"]; ?></h6>
                                <h6 class="col-6"><?php echo $finalCart["price"]; ?></h6>
                                <?php $totPrice += $finalCart["price"]; ?>
                            </div>
                        <?php endfor ?>
                        <?php endif ?>

                        <div class="row">
                            <h5 class="col-6">Total</h5>
                            <h5 class="col-6"><?php echo $totPrice ?></h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Close</button>
                    <form action="php/order.php" method="post" >
                    <input type="hidden" name="ids" value="<?php echo htmlentities(serialize($arrMeal)) ?>">
                        <input type="hidden" name="total" value="<?php echo $totPrice ?>">
                    <input type="submit" class="btn btn-closeCus" value="Order Now" >
                    </form>
                </div>
            </div>
        </div>
    </div>