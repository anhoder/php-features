<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */


$a = [1,2,3,];
$b = new DateTime();

var_dump(get_debug_type($a), get_debug_type($b));
