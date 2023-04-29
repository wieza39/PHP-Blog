<?php

$file = fopen("links.txt", "r");

if ($file) {
    echo "<ul>";

    while ($line = fgets($file)) {
        list($link, $name) = explode(";", $line);
        echo "<li><a href='$link'>$name</a> address: $link</li>";
    }

    echo "</ul>";
    fclose($file);
}
