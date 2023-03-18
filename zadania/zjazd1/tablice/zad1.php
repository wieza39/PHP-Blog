<?php
function getNumberFromArray($index) {
    $array = array(1, 77, 2, 5, 54, 123);
    return $array[$index];
}

echo getNumberFromArray(2);

?>