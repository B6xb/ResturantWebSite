
<?php 
include_once "include/inc.header.php";
define("base_url","projectImages/projectImages/");
require_once "php/meal_dp.php";
$id = $_GET['id'];
$meals = new meal_db();
$choosenMeal = $meals -> getMealById($id); 
 ?>

    <div class="container">
        <div class="row align-items-center">
        <img src="<?php echo "projectimages/projectImages/".$choosenMeal["image"] ?>" alt="" class="col-md-12 col-lg-6">
            <div class="col-md-12 col-lg-6">
                <h1><?php echo $choosenMeal["title"] ?></h1>
                <p><?php echo $choosenMeal["price"] ?> SAR</p>
                <!-- <p>&#11088; <?php echo $choosenMeal["rating"] ?> rating</p> -->
                <p><?php echo $choosenMeal["description"] ?></p>
                <div class="cartButtn">
                    <button class="btn btn-sm btn-outline-warning" onclick="decrement()">-</button>
                    <button class="btn btn-sm" id="quantity">1</button>
                    <button class="btn btn-sm btn-outline-warning" onclick="increment()">+</button>
                    <form method="get" action="php/cart.php">
                        <input type="hidden" name="id" value="<?php echo $choosenMeal["id"]; ?>">
                        <input type="hidden" name="back" value="<?php echo $_SERVER["PHP_SELF"] ?>">
                        <input type="submit" class="btn  btnCart" id="cartButton" value="add to cart">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn-lg active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button onclick="showReviews()" class="nav-link btn-lg" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Reviews</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
                <div id="desc">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate pariatur labore expedita
                        iste, ipsum
                        temporibus aperiam esse, praesentium voluptatibus asperiores vitae modi obcaecati nostrum ullam
                        at odio
                        beatae quia soluta.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus maiores numquam tempora alias
                        iusto
                        laborum
                        quaerat, inventore rem deserunt! Fuga vitae tenetur voluptates tempore iusto vel in explicabo
                        saepe
                        culpa!
                    </p>
                </div>

                <h4>
                    nutrition facts
                </h4>

                <table>

                    <tbody>


                        <tr>
                            <th colspan="3">Supplement Facts </th>
                        </tr>
                        <tr>
                            <th colspan="3">Serving Size: 1 Cookie (57 g) </th>
                        </tr>
                        <tr>
                            <th colspan="3">Serving Per Container: 12</th>
                        </tr>



                        <tr>
                            <th> </th>
                            <th> Amount Per Serving </th>
                            <th>%Daily Value* </th>
                        </tr>



                        <tr>
                            <td>Calories </td>
                            <td>200 </td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td>Calories from Fat </td>
                            <td>70 </td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td>Total Fat </td>
                            <td>7 g </td>
                            <td>11% </td>
                        </tr>

                        <tr>
                            <td>Saturated Fat </td>
                            <td>4 g </td>
                            <td>20% </td>
                        </tr>

                        <tr>
                            <td>Trans Fat </td>
                            <td>0 g </td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td>Cholesterol </td>
                            <td>0 mg </td>
                            <td>0% </td>
                        </tr>

                        <tr>
                            <td>Sodium </td>
                            <td>220 mg </td>
                            <td>9% </td>
                        </tr>

                        <tr>
                            <td>Total Carbohydrate </td>
                            <td>31 g </td>
                            <td>10% </td>
                        </tr>

                        <tr>
                            <td>Dietary Fiber</td>
                            <td>5 g </td>
                            <td>20% </td>
                        </tr>

                        <tr>
                            <td>Sugars </td>
                            <td>12 g </td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td>Sugar Alcohol </td>
                            <td>0 g </td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td>Protein </td>
                            <td>8 g </td>
                            <td>8% </td>
                        </tr>

                        <tr>
                            <td>Vitamin A</td>
                            <td> </td>
                            <td>0% </td>
                        </tr>

                        <tr>
                            <td>Vitamin C </td>
                            <td> </td>
                            <td>0% </td>
                        </tr>

                        <tr>
                            <td>Calcium </td>
                            <td> </td>
                            <td>2% </td>
                        </tr>

                        <tr>
                            <td>Iron </td>
                            <td> </td>
                            <td>10% </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                *Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher
                                or
                                lower depending on your calorie needs
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container" id="rev">
            <div class="row align-items-center">
                    <img class="col-md-12 col-lg-6" src="<?php echo "projectimages/projectImages/".$choosenMeal["reviews"]["image"] ?>" alt="">
                    <div class="col-md-12 col-lg-6">
                        <h4><?php echo $choosenMeal["reviews"]["reviewer_name"] ?></h4>
                        <h5><?php echo $choosenMeal["reviews"]["city"] ?> - <?php echo $choosenMeal["reviews"]["date"] ?> &#11088;&#11088;
                        &#11088;&#11088;&#11088;</h5>
                        <p><?php echo $choosenMeal["reviews"]["review"] ?></p>
                    </div>
                </div>
                <button onclick="showRev()" class="review-button">Add Your Review</button></br>
                <form action="" enctype="multipart/form-data" method="post" name="register" class="formRev" hide>
                    <label>Image</label></br><input type="file" class="imgfile"><br />

                    <label>Rate the food </label></br> <input type="range" class="rate" min="0" max="5" step="1"
                        list="ticks">

                    <datalist id="ticks">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </datalist>
                    <br />

                    <label>Name </label></br><input type="text" id="customerName" class="name"
                        placeholder="First and Last name"><br />

                    <label>Review</label><br />
                    <span id="error"></span></br>
                    <textarea class="opinion" name="opinion" placeholder="Type your review here max 500 character"
                        rows="11" cols="28" maxlength="500" onkeyup="countChar(this)"
                        onkeypress="hideError()"></textarea><br />
                    <span id="textcount">0</span>/500<br />
                    </br><input type="button" onclick="errorMsg()" class="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    </br>

    <?php include "include/inc.footer.php"; ?>