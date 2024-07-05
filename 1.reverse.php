<?php
function ReverseAlphabet($str){
    $alphabets = '';
    $numbers = '';
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_alpha($str[$i])) {
            $alphabets .= $str[$i];
        } else {
            $numbers .= $str[$i];
        }
    }
    
    $reversedAlphabets = strrev($alphabets);
    $reversedString = $reversedAlphabets . $numbers;
    
    return $reversedString;
}

$str = "NEGIE1";
echo "Input: " . $str . "\n";
echo "Output: " . ReverseAlphabet($str) . "\n";
?>
