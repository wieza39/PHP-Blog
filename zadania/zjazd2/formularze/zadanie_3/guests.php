<?php
session_start();

$guests = $_POST['guests'];
$_SESSION['guests'] = $guests;
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['check_in'] = date('l, jS \of F Y, 14:00', strtotime($_POST['check_in']));
$_SESSION['check_out'] = date('l, jS \of F Y, 11:00', strtotime($_POST['check_out']));
$_SESSION['credit_card'] = $_POST['creditCard'];
$_SESSION['credit_card_date'] = $_POST['creditCardDate'];
$_SESSION['credit_card_ccv'] = $_POST['CreditCardCCV'];
$_SESSION['facilities']  = $_POST['facilities']; //array
$_SESSION['extraBed'] = $_POST['extraBed'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests</title>
</head>

<body>
    <form action="hotelscript.php" method="post">
        <h1>Reservation Form</h1>
        <h3>Guest data</h3>
        <table>
            <?php
            $guests = $_POST['guests'];

            for ($i = 1; $i <= $guests; $i++) {

            ?>
                <tr>
                    <td>Guest <?php echo $i; ?></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name_guest_<?php $i ?>"></td>
                </tr>
                <tr>
                    <td>Surname: </td>
                    <td><input type="text" name="surname_guest_<?php $i ?>"></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <input type="submit" value="Reserve">
    </form>
</body>

</html>