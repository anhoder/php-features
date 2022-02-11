<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

class A {
    public function test(string $name)
    {

    }
}

class B extends A {
    public function test(array $name)
    {

    }
}

// PHP Fatal error:  Declaration of B::test(array $name) must be compatible with A::test(string $name)
