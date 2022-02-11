<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

class A implements Stringable {

    public function __toString(): string
    {
        return 'This is A.';
    }
}

$a = new A();
var_dump((string)$a);
