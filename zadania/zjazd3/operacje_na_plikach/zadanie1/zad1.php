<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
</head>

<body>
    <form name="formularz" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data">
        <input type="file" name="plik">
        <input type="submit" name="zatwierdz" value="Wyślij plik">
    </form>
    <?php
    if (isset($_POST["zatwierdz"])) {
        if (isset($_FILES["plik"])) {
            $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");
            var_dump($_FILES);

            $paragraph = file($_FILES["plik"]["tmp_name"]);
            $reverse = array_reverse($paragraph);

            file_put_contents($_FILES["plik"]["tmp_name"], implode('', $reverse));

            fclose($fileDescriptor);

            echo "Plik zmodyfikowano.";
        }
    }
    ?>
</body>

</html>