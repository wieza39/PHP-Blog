<?php
$cache_validation = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
if (false == $cache_validation) {
    if (empty($_COOKIE["licznikv2"])) {
        $_COOKIE["licznikv2"] = 1;
        setcookie("licznikv2", 1);
    } else {
        setcookie("licznikv2", $_COOKIE['licznikv2'] += 1);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licznikv2</title>
</head>

<body>
    <h2>Twoja liczba odwiedzin to: <?php echo $_COOKIE["licznikv2"] ?> </h2>
    <button onclick="window.location.reload()">Refresh</button>
</body>

</html>