<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

// always throw or exit.
function testNeverReturn(): never {
    var_dump(123);
     exit();
    //throw new Exception(123);
}

testNeverReturn();
