<?php
$nums = [1, 2, 3, 4, 6, 5, 7];
$count = 0;
$swapCount = 0;

for ($i = 1; $i < count($nums); $i++) {
    for ($j = 0; $j < count($nums) - $i; $j++) {
        $count++;
        if ($nums[$j] > $nums[$j + 1]) {
            $tmp = $nums[$j];
            $nums[$j] = $nums[$j + 1];
            $nums[$j + 1] = $tmp;

            $swapCount++;
        }
    }

    if ($swapCount === 0) {
        break;
    }

    $swapCount = 0;
}


var_dump($count);


// [2, 4, 3, 1] - 2
// [2, 3, 1, 4] - 1
// [2, 1, 3, 4] - 1
// [1, 2, 3, 4] - 0