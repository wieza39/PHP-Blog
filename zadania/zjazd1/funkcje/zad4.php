<?php
  function getDateFromPesel($pesel) {
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);

    echo $day . "-" . $month . "-" . $year;
}

getDateFromPesel('90010112341');

?>