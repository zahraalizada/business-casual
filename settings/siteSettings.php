<?php

include "functions.php";

if ($page=='index'){
    $home = getData('home');
}

if ($page=='about'){
    $about = getData('about');
}

if ($page=='products'){
    $products = getData('products');
}

if ($page=='store'){
    $store = getData('store');
    $work_time = getData('work_time');
    $about = getData('about');
}
