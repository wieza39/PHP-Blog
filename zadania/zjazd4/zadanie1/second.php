<?php

session_start();

$_SESSION['card'] = $_POST['card'];
$_SESSION['customer'] = $_POST['customer'];
$_SESSION['people'] = $_POST['people'];

for ($i = 1; $i <= $_SESSION['people']; $i++) {
    $_SESSION['person' . $i] = $_POST['person' . $i];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People data</title>
</head>

<body>
    <form method="POST" action="third.php">
        <?php for ($i = 1; $i <= $_SESSION['people']; $i++) { ?>
            <label for="person<?php echo $i; ?>">Gość <?php echo $i; ?> - imię:</label>
            <input type="text" name="person<?php echo $i; ?>"><br>
        <?php } ?>
        <input type="submit" value="Next">
    </form>
</body>

</html>