<?php

session_start();
if (!isset($_COOKIE['user_cookie'])) {
    setcookie('user_cookie', 'guest', time() + 60 * 5);
}
if (!isset($_COOKIE['login_status'])) {
    setcookie('login_status', 0, time() + 60 * 5);
}
if (!isset($_COOKIE['role'])) {
    setcookie('role', 'guest', time() + 60 * 5);
}
if (!isset($_COOKIE['user_id'])) {
    setcookie('user_id', 4, time() + 60 * 5);
}
if (!isset($_COOKIE['nickname'])) {
    setcookie('nickname', 'guest', time() + 60 * 5);
}

echo " cookie user: ";
var_dump($_COOKIE['user_cookie']);

echo " <br> cookie user_id: ";
var_dump($_COOKIE['user_id']);

echo ' <br> cookie login status: ';
var_dump($_COOKIE['login_status']);

echo ' <br> cookie user role: ';
var_dump($_COOKIE['role']);

echo ' <br> cookie user nickname: ';
var_dump($_COOKIE['nickname']);

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
                    <li><a class="menu-list-opt" href="contact.php">Contact</a></li>

                    <?php
                    if ($_COOKIE['user_cookie'] != 'guest') {
                        // User is logged in
                        echo '<li><a href="" class="menu-list-opt profile-btn">My Profile</a>';
                        echo '<ul class="dropdown">';
                        echo '<li><a href="reset_password.php">Reset Password</a></li>';
                        echo '<li><a href="">Change Nickname</a></li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li><a class="menu-list-opt" href="logout.php">Log out</a></li>';
                    } else {
                        // Guest
                        echo '<li><a class="menu-list-opt" id="login-btn" href="login.php">Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>