<?php
$ipList = "ip.txt";
$ip = file($ipList, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$user_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($user_ip, $ip)) {
    include("access.php");
} else {
    include("noaccess.php");
}
