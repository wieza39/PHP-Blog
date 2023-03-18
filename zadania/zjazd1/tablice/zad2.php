<?php

function findNationality($country) {
    $nationality = array(
        "Poland" => "Polish", "England" => "English", "Germany" => "German");

        if (array_key_exists($country, $nationality)) {
            return $nationality[$country];
        } else {
            return "Don't know who you are";
        }
}

echo "You are " . findNationality('England');

?>