<?php
session_start();
$postID = $_POST['postID'];
$comment_id = $_POST['comment_id'];

var_dump($postID);
var_dump($comment_id);

include '../includes/open_db.php';
$query = "DELETE FROM comments WHERE id = $comment_id";
$result = mysqli_query($connection, $query);
include '../includes/close_db.php';

header('Location: post.php?id=' . $postID);
exit();
