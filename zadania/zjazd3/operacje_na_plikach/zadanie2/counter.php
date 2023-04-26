<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter</title>
</head>

<body>
    <?php
    $filename = "counter.txt";
    if (!file_exists($filename)) {
        $file = fopen($filename, "w");
        fwrite($file, "1");
        fclose($file);
    }
    $file = fopen($filename, "r+");
    $count = intval(fread($file, filesize($filename)));
    $count++;
    rewind($file);
    fwrite($file, $count);
    fclose($file);

    echo "Visits counted: " . $count;

    ?>
</body>

</html>