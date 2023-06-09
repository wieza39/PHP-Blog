<?php
session_start();
$postID = $_POST['postID'];
$commentText = $_POST['comment-text'];
$userID = $_COOKIE['user_id'];

include '../includes/open_db.php';
$addCommentQuery = "INSERT INTO comments (user_id, post_id, content) VALUES ('$userID', '$postID', '$commentText')";
$addCommentResult = mysqli_query($connection, $addCommentQuery);
include '../includes/close_db.php';

header('Location: post.php?id=' . $postID);
exit();
