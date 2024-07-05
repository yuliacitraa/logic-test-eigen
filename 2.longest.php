<?php
function longest($sentence) {
    $words = explode(" ", $sentence);
    
    $longestWord = "";
    $maxLength = 0;
    
    foreach ($words as $word) {
        if (strlen($word) > $maxLength) {
            $longestWord = $word;
            $maxLength = strlen($word);
        }
    }
    
    return $longestWord . ": " . $maxLength . " character" . ($maxLength > 1 ? "s" : "");
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
echo longest($sentence);
?>