<?php


require_once "php/meal_dp.php";
$meals = new meal_db();
$method = $_SERVER["REQUEST_METHOD"];

if($method == "GET"){
    echo json_encode($meals->getMealReviwes($_GET["id"]));
 }else{
    $text = file_get_contents("")
 }
$id = $_GET["id"];

$text = '{"meal":{"name":}}'

function submit($id){
   

 $sql = "INSERT INTO reviews (id,reviewer_name,review) VALUES ('$id','$reviewer_name','$review')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
     } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
     }

     mysqli_close($link);
    
 }
 function retrive(){

 }


echo json_encode();

$data = array_merge($_POST,$_FILES);

require_once "php/meal_dp.php";
 $dp = new meal_db();
 if($dp->addMealReview($data)){
    $class = "alert-success";
    $title = "Done";
    $msg = "Succefully Added review, Thank you";
 }else{
    $class = "alert-danger";
     $title = "Error";
     $msg = "There was an error while adding the review";
}
 include_once "include/inc.header.php"
 ?>
 
 <div class<?php echo ""."alert$class"."";?>>
 <h3 class="alert-heading"><?php echo $title;?></h3>
 <p><?php echo $msg;?></p>
 </div>
 <?php include_once 'include/inc.footer.php';?>
 