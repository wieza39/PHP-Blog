<?php
session_start();
$customer = $_SESSION['customer'];
$card = $_SESSION['card'];
$people = $_SESSION['people'];
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumup</title>
</head>

<body>
    <h1>Podsumowanie: </h1>
    </br>
    <h3>Zamawiaacy: <?php echo $customer ?></h3>
    </br>
    <h3>Numer karty: <?php echo $card ?></h3>
    </br>
    <h3>Ilosc gosci: <?php echo $people ?></h3>
    </br>
    <?php for ($i = 1; $i <= $people; $i++) { ?>
        <h4>Gość <?php echo $i ?>: <?php echo $_SESSION['person' . $i] ?> </h4>
    <?php } ?>

</body>

</html>