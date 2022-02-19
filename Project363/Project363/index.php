
    
<?php 
include "include/inc.header.php"; 
define("base_url","projectImages/projectImages/");
?>

    <a id="menu"></a>
    <div class="container-fluid img-fluid bg-image">


        <div class="row upperWords">


            <div class="col-12">
                <h1 class="display-1 pt-3">Party Time</h1>
            </div>
            <div class="col-3">
                <p class="h4">Buy any 2 burgers and get 1.5L Pepsi Free</p>
            </div>

            <div class="col-12">
                <button class="btn btn-warning">Order Now</button>
            </div>

        </div>


    </div>
    <?php 
    require_once "php/meal_dp.php";
    $meals = new meal_db();
    if(isset($_COOKIE["recent-bought"])): ?>
    <?php
        $dupArr = explode(",",$_COOKIE["recent-bought"]);
        $arrRecent = array_values(array_unique($dupArr));
    ?>

    <div class="recent">
        <section class="container">
            <?php require_once "php/meal_dp.php";
                  require_once "php/reviews.php";

            $meals = new meal_db(); $mealsArray = $meals->getAllMeals(); ?>
            <h2 class="h3">Your Recent Bought Products</h2>
            <div class="row">
                <?php for ($count=0; $count < count($arrRecent) ; $count++): ?>
                    <?php $recentOrder = $meals->getMealById($arrRecent[$count]); ?>
                    <section class="popular col-xs-12 col-md-4 col-lg-3">
                        <a href="<?php echo "detail.php?id=".$recentOrder["id"]; ?>">
                            <img class="col-12" src="projectImages/projectImages/<?php echo $recentOrder["image"]; ?>" alt="">
                            <!-- <p>&#11088;<?php echo $recentOrder["rating"]; ?> rating</p> -->
                            <p><strong><?php echo $recentOrder["title"]; ?></strong></p>
                            <p>Some description</p>
                        </a>
                        <div>
                            <form method="get" action="php/cart.php">
                                <input type="hidden" name="id" value="<?php echo $recentOrder["id"]; ?>">
                                <input type="hidden" name="back" value="<?php echo $_SERVER["PHP_SELF"] ?>">
                                <button class="btn btnCart" type="submit">Buy Again</button>
                                <?php echo $recentOrder["price"]; ?> SAR
                            </form>
                        </div>
                    </section>


                <?php endfor ?>
            </div>
        </section>
    <?php endif ?>
    </div>
    <div class="container-fluid">
        <h2 class="row  text-uppercase h3 want justify-content-center">
            Want To Eat
        </h2>

        <p class="row justify-content-center text-center">Try our most delicious food and usually take
            minutes to deliver</p>


        <div class="row ">

            <a class="col-2 text-center" href="">burger</a>
            <a class="col-2 text-center" href="">pizza</a>
            <a class="col-2 text-center" href="">fast food</a>
            <a class="col-2 text-center" href="">cupcake</a>
            <a class="col-2 text-center" href="">sandwich</a>
            <a class="col-2 text-center" href="">spaghetti</a>

        </div>
    </div>

    </div>
    <div class="container-fluid middle">
        <div class="row">
            <img class="col-xl-6 col-lg-12" src=<?php echo base_url."delivery.png"; ?> alt="delivery" />


            <div class="col-xl-6 col-lg-12" id="middleWords">
                <h2>We guarantee 30 minutes</br>
                    delivery</h2>
                <p>
                    If you are having a meeting, working late at night and need an extra
                    push
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a id="gallery"> </a>
        <?php 
        require_once "php/meal_dp.php";
        $meals = new meal_db();
        $mealsArray = $meals->getAllMeals();
         ?>

        <h2 class=" row text-uppercase h3 want justify-content-center">our most popular recipes</h2>

        <p class="row justify-content-center text-center">Try our most delicious food and usually take minutes to
            deliver</p>
        <div class="container-fluid p-lg-5">
        <div class="row">
            <?php for ($count=0 ; $count < count($mealsArray) ; $count++): ?>
                <section class="popular col-xs-12 col-md-4 col-lg-3">
                <a href="<?php echo "detail.php?id=".$mealsArray[$count]["id"]; ?>">
                    <img class="col-12" src="projectImages/projectImages/<?php echo $mealsArray[$count]['image']; ?>" alt="">
                    <!-- <p>&#11088;<?php echo $mealsArray[$count]["rating"]; ?> rating</p> -->
                    <p><strong><?php echo $mealsArray[$count]["title"]; ?></strong></p>
                    <p>Some description</p>
                </a>
                <div>
                    <form method="get" action="php/cart.php">
                        <input type="hidden" name="id" value="<?php echo $mealsArray[$count]["id"]; ?>">
                        <input type="hidden" name="back" value="<?php echo $_SERVER["PHP_SELF"] ?>">
                        <button class="btn btnCart" type="submit">add to cart</button>
                        <?php echo $mealsArray[$count]["price"]; ?> SAR
                    </form>
                </div>
            </section>
            
            
            <?php endfor ?>
        </div>
        </div>
    </div>
    


    <div id="eatBurger" class="container ">

        <a id="testimonials"> </a>


        <div class="row">
            <h2 class="row text-uppercase h3 want justify-content-center">clients testimonials</h2>

            <div class="col-xl-6 col-lg-12">
                <img class="img-fluid" src=<?php echo base_url."/man-eating-burger.png"?>
                    alt="man-eating-burger" />
            </div>
            <div class="col-xl-6 col-lg-12 text-center align-self-center">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam
                    deserunt laborum, laboriosam veritatis quibusdam blanditiis dolor
                    exercitationem velit commodi quae assumenda incidunt voluptas.
                    Corporis ex nulla repellendus ullam nihi!
                </p>
            </div>
        </div>

    </div>


   <?php include "include/inc.footer.php"; ?>
