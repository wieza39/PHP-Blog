<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = $_COOKIE['user_id'];
    $newNick = $_POST['new-nick'];

    include '../includes/open_db.php';

    $updateQuery = "UPDATE users SET nickname = '$newNick' WHERE id = '$userID'";
    $updateResult = mysqli_query($connection, $updateQuery);
    if ($updateResult) {
        $message = 'Nickname changed';
        setcookie('nickname', $newNick, time() + 60 * 5);
    } else {
        $message = 'There was an error. Try again later.';
    }

    include '../includes/close_db.php';
}

?>
<main class="reset-password">
    <div class="nick-container">
        <h3 class="h3-header">Change your nickname</h3>
        <?php
        if (isset($message) && ($updateResult == true)) {
            echo '<div class="login-message">' . $message . '</div>';
        } else {
            echo '<div class="login-error">' . $message . '</div>';
        }
        ?>
        <form class="nick-change" action="change_nick.php" method="post">
            <div class="credentials forms"><input type="text" name="new-nick" placeholder="Enter new nickname"></div>
            <div><input class="form-btn" type="submit" value="SET"></div>
        </form>
    </div>
</main>

<?php
include '../includes/footer.php'
?>