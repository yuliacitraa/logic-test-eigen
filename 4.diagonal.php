<?php
function diagonalDifference($matrix) {
    $n = count($matrix);
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;
    
    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonalSum += $matrix[$i][$i];
        $secondaryDiagonalSum += $matrix[$i][$n - $i - 1];
    }
    
    return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}

$matrix = [
    [1, 2, 0],
    [4, 5, 6],
    [7, 8, 9]
];

$result = diagonalDifference($matrix);
echo "Hasil: " . $result;
?>
