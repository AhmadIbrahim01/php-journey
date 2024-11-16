<?php

function mergeSort(&$array, $left, $right) {
    if ($left < $right) {
        $mid = intdiv($left + $right, 2);
        mergeSort($array, $left, $mid);
        mergeSort($array, $mid + 1, $right);
        merge($array, $left, $mid, $right);
    }
}

function merge(&$array, $left, $mid, $right) {
    $left_size = $mid - $left + 1;
    $right_size = $right - $mid;

    $left_array = array_fill(0, $left_size, 0);
    $right_array = array_fill(0, $right_size, 0);

    for ($i = 0; $i < $left_size; $i++) {
        $left_array[$i] = $array[$left + $i];
    }
    for ($j = 0; $j < $right_size; $j++) {
        $right_array[$j] = $array[$mid + 1 + $j];
    }

    $index_l = 0;
    $index_r = 0;
    $index_merged = $left;

    while ($index_l < $left_size && $index_r < $right_size) {
        if ($left_array[$index_l] <= $right_array[$index_r]) {
            $array[$index_merged] = $left_array[$index_l];
            $index_l++;
        } else {
            $array[$index_merged] = $right_array[$index_r];
            $index_r++;
        }
        $index_merged++;
    }

    while ($index_l < $left_size) {
        $array[$index_merged] = $left_array[$index_l];
        $index_l++;
        $index_merged++;
    }

    while ($index_r < $right_size) {
        $array[$index_merged] = $right_array[$index_r];
        $index_r++;
        $index_merged++;
    }
}

$listt = [2,13,31,4,1,42,53,12,12,31];
echo "The unsorted list is: " . implode(", ", $listt) . "\n";
mergeSort($listt, 0, count($listt) - 1);
echo "The sorted list is: " . implode(", ", $listt) . "\n";

?>
