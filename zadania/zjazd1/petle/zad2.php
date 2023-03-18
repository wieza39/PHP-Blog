<?php

    function getScore($throws) {

        $scores = array();

        for($i = 0; $i < $throws; $i++) {
            array_push($scores, rand(1,6));
        }

        print_r($scores);
    }

    getScore(5);
?>