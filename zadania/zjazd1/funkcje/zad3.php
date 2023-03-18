<?php
   function censorship($sentence) {
  
    $forbidden = array("orange", "apple"); 


    $sentence_array = explode(" ", $sentence);

    foreach ($sentence_array as &$word) {
        if (in_array($word, $forbidden)) {
            $word = str_repeat("*", mb_strlen($word));
        }
    }

    $new_sentence = implode(" ", $sentence_array);

    return $new_sentence;
}

    echo censorship("orange banana apple");

?>