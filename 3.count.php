<?php
function countOccurrences($input, $query) {
    $output = [];
    
    foreach ($query as $q) {
        $count = 0;
        foreach ($input as $i) {
            if ($i == $q) {
                $count++;
            }
        }

        $output[] = $count;
    }
    
    return $output;
}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];
$output = countOccurrences($input, $query);

print_r($output);
?>