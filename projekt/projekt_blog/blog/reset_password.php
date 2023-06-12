<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = $_COOKIE['user_id'];
    $oldPassword = $_POST['old-password'];
    $newPassword = $_POST['new-password'];
    $repeatedPassword = $_POST['repeat-new-password'];
    $message = 'Passwords doesnt match';

    include '../includes/open_db.php';

    $searchPasswordQuery = "SELECT * FROM users WHERE id = '$userID'";
    $passResult = mysqli_query($connection, $searchPasswordQuery);
    $row = mysqli_fetch_assoc($passResult);
    $currentPass = $row['password'];

    if ($oldPassword == $currentPass && $newPassword == $repeatedPassword) {
        $updateQuery = "UPDATE users SET password = '$newPassword' WHERE id = '$userID'";
        $updateResult = mysqli_query($connection, $updateQuery);
        if ($updateResult) {
            $message = 'Password updated';
        } else {
            $message = 'Passwords doesnt match';
        }
    } else {
        $message = 'Passwords doesnt match';
    }

    include '../includes/close_db.php';
}

?>
<main class="reset-password">
    <div class="password-container">
        <h3 class="h3-header">Set up new password</h3>
        <?php
        if (isset($message) && ($updateResult == true)) {
            echo '<div class="login-message">' . $message . '</div>';
        } else {
            echo '<div class="login-error">' . $message . '</div>';
        }
        ?>
        <form class="password-change" action="reset_password.php" method="post">
            <div class="credentials forms"><input type="password" name="old-password" placeholder="Current password"></div>
            <div class="credentials forms"><input type="password" name="new-password" placeholder="New password"></div>
            <div class="credentials forms"><input type="password" name="repeat-new-password" placeholder="Repeat new password"></div>
            <div><input class="form-btn" type="submit" value="RESET"></div>
        </form>
    </div>
</main>

<?php
include '../includes/footer.php'
?>