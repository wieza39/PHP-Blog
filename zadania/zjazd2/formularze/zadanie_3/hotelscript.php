<?php
session_start();

$guests = $_SESSION['guests'];
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$check_in = date('l, jS \of F Y, 14:00', strtotime($_SESSION['check_in']));
$check_out = date('l, jS \of F Y, 11:00', strtotime($_SESSION['check_out']));
$credit_card = $_SESSION['creditCard'];
$credit_card_date = $_SESSION['creditCardDate'];
$credit_card_ccv = $_SESSION['CreditCardCCV'];
$facilities  = $_SESSION['facilities']; //array
$extraBed = $_SESSION['extraBed'];

session_destroy();

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
    <h1>Thank you for you reservation!</h1>
    <h2>Below you can find your reservation summary.</h3>

        <table>
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
                    echo "Extra bed: " . $extraBed;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Additional facilities:</td>
            </tr>
            <tr>
                <td>
                    <?php
                    if (isset($_SESSION['facilities'])) {
                        $facilities = $_SESSION['facilities'];
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
            <tr>
                <td>List of guests: </td>
            </tr>
            <tr>
                <?php
                for ($i = 1; $i <= $guests; $i++) { ?>
            <tr>
                <td>Guest <?php echo $i ?>: <?php echo $_POST['name_guest_' . $i] ?> <?php echo $_POST['surname_guest_' . $i] ?></td>
            </tr>
        <?php
                }
        ?>
        </tr>
        </table>
        <p>All details you can find also on provided e-mail address: <strong><?php echo $email ?></strong></p>
</body>

</html>