<?php
    $ids = unserialize($_POST['ids']);
    $total = $_POST['total'];
    setcookie("recent-bought", $_COOKIE["cart"], time()+30*24*60*60, "/");
    setcookie("cart", "", time()-24*60*60, "/");
    header("Location: ../index.php");
?>