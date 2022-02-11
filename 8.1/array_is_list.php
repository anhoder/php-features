<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 11:26 AM
 */

$arr = [1, 2, 4]; // true
$arr2 = [0 => 3, 1 => 10, 2 => 14]; // true
$arr3 = [0 => 3, 6 => 10]; // false
$arr4 = ['name' => 1, 'age' => 2]; // false
$arr5 = [1, 1 => 2]; // true
$arr6 = [1 => 2, 0 => 1]; // false
$arr7 = [2, 1 => 1, 8, 9]; // true


var_dump(
    array_is_list($arr),
    array_is_list($arr2),
    array_is_list($arr3),
    array_is_list($arr4),
    array_is_list($arr5),
    array_is_list($arr6),
    array_is_list($arr7),
);
