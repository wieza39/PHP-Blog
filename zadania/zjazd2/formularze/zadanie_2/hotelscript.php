<?php
$guests = $_POST['guests'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$check_in = date('l, jS \of F Y, 14:00', strtotime($_POST['check_in']));
$check_out = date('l, jS \of F Y, 11:00', strtotime($_POST['check_out']));
$credit_card = $_POST['creditCard'];
$credit_card_date = $_POST['creditCardDate'];
$credit_card_ccv = $_POST['CreditCardCCV'];
$facilities  = $_POST['facilities']; //array
$extra_bed = $_POST['extraBed'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
</head>

<body>
    <h1>Thank you <?php echo $name ?> for you reservation!</h1>
    <h2>Below you can find your reservation summary.</h3>

        <table>
            <tr>
                <td>Reserved by: <?php echo $name, " ", $surname; ?></td>
            </tr>
            <tr>
                <td>Guests: <?php echo $guests ?></td>
            </tr>
            <tr>
                <td>Check-in: <?php echo $check_in ?></td>
            </tr>
            <tr>
                <td>Check-out: <?php echo $check_out ?></td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo "Extra bed: " . $extra_bed;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Additional facilities:</td>
            </tr>
            <tr>
                <td>
                    <?php
                    if (isset($_POST['facilities'])) {
                        $facilities = $_POST['facilities'];
                        echo "<ul>";
                        foreach ($facilities as $facility) {
                            echo "<li>$facility</li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "&emsp;None were chosen";
                    } ?>

                </td>
            </tr>
        </table>
        <p>All details you can find also on provided e-mail address: <strong><?php echo $email ?></strong></p>
</body>

</html>