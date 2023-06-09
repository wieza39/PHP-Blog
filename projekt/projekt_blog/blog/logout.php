<?php
session_start();
setcookie('user_cookie', 'guest', time() - 300);
setcookie('login_status', 0, time() - 300);
setcookie('user_id', 4, time() - 300);
setcookie('role', 'guest', time() - 300);
setcookie('nickname', 'guest', time() - 300);
header('Location: ../blog/blog.php');
exit();
