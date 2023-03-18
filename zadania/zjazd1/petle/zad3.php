<?php
function multiplicationTable($side_length) {
 
    $multiplication_table = array();
    for ($i = 1; $i <= $side_length; $i++) {
        $row = array();
        for ($j = 1; $j <= $side_length; $j++) {
            $row[] = $i * $j;
        }
        $multiplication_table[] = $row;
    }
    
    for ($i = 0; $i < $side_length; $i++) {
        for ($j = 0; $j < $side_length; $j++) {
            printf("%4d", $multiplication_table[$i][$j]);
        }
        echo "\n";
    }
}

multiplicationTable(5);
?>