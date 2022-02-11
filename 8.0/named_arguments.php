<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

function test(string $name = '', int $age = 0, bool $flag = false) {
    echo "name: {$name}, age: {$age}, flag: {$flag}";
}

test(age: 18, flag: true);
