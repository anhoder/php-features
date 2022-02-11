<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

$arr = ['foo'];
var_dump(in_array(0, $arr));
// php < 8, it is true
// php >= 8, it is false
