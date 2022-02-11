<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

function testMatch(int $value): string {
    return match ($value) {
        0 => 'Zero',
        1 => 'One',
        default => 'Unknown'
    };
}

var_dump(testMatch(0));
var_dump(testMatch(1));
var_dump(testMatch(2));

