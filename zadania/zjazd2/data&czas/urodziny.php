<?php

$birthday = strtotime($_GET['urodziny']);
$currentDate = time();
$nextBirthday = strtotime(date('Y') . '-' . date('m-d', $birthday));

if($nextBirthday - $currentDate < 0) {
    //....
}

$daysUntilBirthday = ceil(($nextBirthday - $currentDate) / 86400); 

if ($currentDate > $birthday) {
    $age = date('Y', $currentDate) - date('Y', $birthday);
} else {
    echo "Bledna data";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>urodziny</title>
</head>

<body>
    <p>Twoje urodziny są <?php echo date('d-m-Y', $birthday) ?>.</p>
    <p>Dzisiaj jest <?php echo date('d-m-Y', $current) ?></p>
    <p>Urodziłeś się w <?php echo date('l', $birthday)?></p>
    <p>Nastepne urodziny masz za <?php echo $daysUntilBirthday?> dni</p>
    <p>Masz <?php echo $age ?> lat</p>
</body>

</html>