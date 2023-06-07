<?php
include '../includes/header.php';

if ($_SESSION['login_status'] === false) {
    $user = $_POST['user'];
    $_SESSION['user'] = $user;
    setcookie('cookie', $user, time() + 60 * 60 * 2);
}


if ($_SESSION['login_status'] == true) {
    include '../user/index.php';
} else {
    include 'index.php';
}


include '../includes/footer.php';
