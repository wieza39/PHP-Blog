<?php

// include 'config.php';
// include 'close_db.php';

session_start();
if (!isset($_COOKIE['user_cookie'])) {
    setcookie('user_cookie', 'guest', time() + 60 * 5);
}

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'guest';
    $_SESSION['login_status'] = false;
}

echo " cookie user: ";
var_dump($_COOKIE['user_cookie']);

echo " session user: ";
var_dump($_SESSION['user']);


echo ' login status: ';
var_dump($_SESSION['login_status']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="../css/layout.css">
    <script src="https://kit.fontawesome.com/3901cf777d.js" crossorigin="anonymous"></script>
    <title>Blog Project</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <a class="home-btn" href="blog.php"><i class="fa-brands fa-gitkraken"></i></a>
            <div class="menu">
                <ul class="menu-list">
                    <li><a class="menu-list-opt" href="blog.php">Home</a></li>
                    <li><a class="menu-list-opt" href="rules.php">Rules</a></li>
                    <li><a class="menu-list-opt" href="about.php">Contact</a></li>

                    <?php
                    if ($_SESSION['user'] != 'guest') {
                        // User is logged in
                        echo '<li><a class="menu-list-opt" href="">My Profile</a></li>';
                        echo '<li><a class="menu-list-opt" href="../user/logout.php">Log out</a></li>';
                    } else {
                        // Guest
                        echo '<li><a class="menu-list-opt" id="login-btn" href="login.php">Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>