<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

$arr1 = ['name' => 'Alan'];
$arr2 = ['name' => 'anhoder'];

// In php 8.0, PHP Fatal error:  Uncaught Error: Cannot unpack array with string keys
var_dump(['name' => 'origin',...$arr1, ...$arr2]);


