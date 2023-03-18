<?php
function is_prime($number) {
    $counter = 0;
    
    if ($number <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        $counter++;
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

?>