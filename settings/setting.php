<?php

include "functions.php";

//if (!isset($_SESSION['admin'])){
//    header("location: ../website/login.php");
//    exit();
//}

if (isset($page)) {

    if ($page == "home") {
        $getData = getData('home',$id ?? null);
    }
    if ($page == "about") {
        $getData = getData('about',$id ?? null);
    }
    if ($page == "products") {
        $getData = getData('products',$id ?? null);
    }


}

?>