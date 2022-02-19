<?php
    $id = $_GET["id"];
    $cartcookie = "cart";
    if(!isset($_COOKIE[$cartcookie])){
        setcookie($cartcookie, $id, time()+30*24*60*60, "/");
    }else{
        setcookie($cartcookie, $id, time()+30*24*60*60, "/");
        setcookie("cart", $_COOKIE["cart"].",".$id, time()+30*24*60*60, "/");
    }
    
    $back = $_GET['back']."?id=".$id;

    header("Location: $back");
?>