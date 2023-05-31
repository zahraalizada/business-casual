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
    if ($page == "work_time") {
        $getData = getData('work_time',$id ?? null);
    }
    if ($page == "store") {
        $getData = getData('store',$id ?? null);
    }


}

?>