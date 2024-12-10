<?php


$nums = [2, 5, 3, 2, 7, 4, 0];
$count = 0;

for ($i = 0; $i < count($nums); $i++) {
    for ($j = 0; $j < count($nums) - 1; $j++) {
        $count++;
        if ($nums[$j] > $nums[$j + 1]) {
            $tmp = $nums[$j];
            $nums[$j] = $nums[$j + 1];
            $nums[$j + 1] = $tmp;
        }
    }
}

var_dump($count);