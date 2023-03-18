<?php

    function findBiggestFor() {
        $numbers = array(1,2,76,4,5);
        $highest = $numbers[0];

        for($i = 1; $i < count($numbers); $i++) {
            if($highest < $numbers[$i]) {
                $highest = $numbers[$i];
            }
        
        }

        echo $highest;
    }

    findBiggestFor();

?>

<?php

    function findBiggestWhile() {
        $numbers = array(1,2,76,4,5);
        $highest = $numbers[0];
        $i = 0;

        while($i < count($numbers)) {
            if($highest < $numbers[$i]) {
                $highest = $numbers[$i];
            }
            $i++;
        }

        echo $highest;
    }

    findBiggestWhile();

?>

<?php

    function findBiggestDo() {
        $numbers = array(1,2,76,4,5);
        $highest = $numbers[0];
        $i = 0;

         do{
            if($highest < $numbers[$i]) {
                $highest = $numbers[$i];
            }
            $i++;
        } while($i < count($numbers));

        echo $highest;
    }

    findBiggestDo();

?>

<?php

    function findBiggestForeach() {
        $numbers = array(1,2,3,4,5);
        $highest = $numbers[0];
        $i = 0;

         foreach($numbers as $value) {
            if($highest < $value) {
                $highest = $value;
            }
        };

        echo $highest;
    }

    findBiggestForeach();

?>