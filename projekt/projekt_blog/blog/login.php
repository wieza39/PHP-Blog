<?php
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user === 'user' && $password === '') {
        $_SESSION['user'] = $user; // Save login in session for later use
        $_SESSION['login_status'] = true;
        header('Location: blog.php');
        exit();
    } else {
        // Credentials are incorrect, display error message
        $error = 'Incorrect login or password';
    }
}


?>


<main class="login-page">
    <div class="login-container">
        <h3 class="login-header">Sign In</h3>
        <?php
        if (isset($error)) {
            echo '<div class="login-error">' . $error . '</div>';
        }
        ?>
        <form class="credentials-container" action="login.php" method="post">
            <div class="credentials"><input type="text" name="user" placeholder="user id"></div>
            <div class="credentials"><input type="password" name="password" placeholder="password"></div>
            <div class="credentials"><input class="form-btn" type="submit" value="login"></div>
        </form>
    </div>
</main>

<?php
include '../includes/footer.php';
?>