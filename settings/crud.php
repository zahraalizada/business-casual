<?php
require_once "functions.php";

// ====================================  HOME PAGE    ====================================

// *** insert ***
if (isset($_POST['add-home-btn'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('home', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])]);
    redirect('../admin/home.php');
}
// *** update ***
if (isset($_POST['update-home-btn'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hdn'];
    if ($_FILES['image']['name'] != '') {
        getUpdate('home', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/home.php');

    } else {
        getUpdate('home', ['title', 'subtitle', 'content', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/home.php');
    }
}
// *** delete ***
if (isset($_GET['delete_home_id'])) {
    $getDelete = getDelete('home', $_GET['delete_home_id'], true);
    redirect('../admin/home.php');
}


// ====================================  ABOUT PAGE   ====================================

// *** insert ***
if (isset($_POST['add-about-btn'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('about', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])]);
    redirect('../admin/about.php');
}
// *** update ***
if (isset($_POST['update-about-btn'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hdn'];
    if ($_FILES['image']['name'] != '') {
        getUpdate('about', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/about.php');
    } else {
        getUpdate('about', ['title', 'subtitle', 'content', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/about.php');
    }
}
// *** delete ***
if (isset($_GET['delete_about_id'])) {
    $getDelete = getDelete('about', $_GET['delete_about_id'], true);
    redirect('../admin/about.php');
}


// ==================================== PRODUCTS PAGE ====================================

// *** insert ***
if (isset($_POST['add-products-btn'])) {
    $image = getImage($_FILES['image']);
    $data = getInsert('products', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])]);
    redirect('../admin/products.php');
}
// *** update ***
if (isset($_POST['update-products-btn'])) {
    $image = getImage($_FILES['image']);
    $hidden_update_id = $_POST['hdn'];
    if ($_FILES['image']['name'] != '') {
        getUpdate('products', ['title', 'subtitle', 'content', 'image', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], $image, url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/products.php');
    } else {
        getUpdate('products', ['title', 'subtitle', 'content', 'slug'], [$_POST['title'], $_POST['subtitle'], $_POST['content'], url_slug($_POST['title'])], $hidden_update_id);
        redirect('../admin/products.php');
    }
}
// *** delete ***
if (isset($_GET['delete_products_id'])) {
    $getDelete = getDelete('products', $_GET['delete_products_id'], true);
    redirect('../admin/products.php');
}


// ====================================  STORE PAGE   ====================================

// *** update ***
if (isset($_POST['update-store-btn'])) {
    $hidden_update_id = $_POST['hdn'];
    getUpdate('store', ['title', 'subtitle', 'slug', 'street', 'address', 'phone'], [$_POST['title'], $_POST['subtitle'], url_slug($_POST['title']), $_POST['street'], $_POST['address'], $_POST['phone']], $hidden_update_id);
    redirect('../admin/store.php');
}
// *** delete ***
if (isset($_GET['delete_store_id'])) {
    $getDelete = getDelete('store', $_GET['delete_store_id'], true);
    redirect('../admin/store.php');
}

// ====================================  WORK TIME PAGE   ====================================

// *** update ***
if (isset($_POST['update-work-time-btn'])) {
    $hidden_update_id = $_POST['hdn'];
    getUpdate('work_time', ['work_key', 'work_value'], [$_POST['work_key'], $_POST['work_value']], $hidden_update_id);
    redirect('../admin/work_time.php');
}


// ====================================  LOGIN PAGE   ====================================


if (isset($_GET['logout']) && $_GET['logout'] === 'true')
{
    session_destroy();
    header("location: ../admin/login.php");
} else
{
    if (isset($_POST['admin_login-btn'])) {

        $data = getData('admin_login');
        $username = $data[0]['user_name'];
        $password = $data[0]['user_pass'];
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo 'username or Password empty ';
            header("location: ../website/login.php");
            exit();
        } elseif ($_POST['username'] === $username && $_POST['password'] === $password) {
            $_SESSION['admin'] = $_POST['username'];
            header("location: ../admin/index.php");
            exit();
        } else {
            echo 'Email or Password wrong!';
            header("location: ../admin/login.php");
        }
    }
}

?>