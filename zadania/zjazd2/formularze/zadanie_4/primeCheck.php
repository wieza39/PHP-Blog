<?php
$number = $_POST['number'];

if (isset($number) > 0) {
    $number;
} else {
    $number = "jest ujemna. Liczby pierwsze są tylko dodatnie";
}

function check($number)
{
    $loops = 0;
    if ($number < 2) {
        echo " nie jest liczbą pierwszą";
    } elseif ($number == 2 || $number == 3) {
        echo " jest liczbą pierwszą";
    } else {
        $check = sqrt($number);
        for ($i = 2; $i <= $check; $i++) {
            $loops++;
            if (($number % $i) == 0) {
                echo " nie jest liczbą pierwszą";
                break;
            } else {
                echo " jest liczbą pierwszą";
                break;
            }
        }
    }
    echo ". Wykonano iteracji: $loops";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Check</title>
</head>

<body>
    <h3>Twoja liczba <?php echo $number ?> <?php check($number) ?></h3>
</body>

</html>