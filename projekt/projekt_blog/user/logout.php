<?php
session_start();
session_unset();
header('Location: ../blog/blog.php');
exit();
