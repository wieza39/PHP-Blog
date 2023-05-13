<?php
if (empty($_COOKIE["licznik"])) {
    $_COOKIE["licznik"] = 1;
    setcookie("licznik", 1);
} else {
    setcookie("licznik", $_COOKIE['licznik'] += 1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licznik</title>
</head>

<body>
    <h2>Twoja liczba odwiedzin to: <?php echo $_COOKIE["licznik"] ?> </h2>
    <button onclick="window.location.reload()">Refresh</button>
</body>

</html>