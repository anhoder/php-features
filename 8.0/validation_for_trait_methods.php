<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

trait Test
{
    abstract public function hello(string $name);
}

class CTest
{
    use Test;

    public function hello(int $name)
    {
        return "hello, $name";
    }
}

// PHP Fatal error:  Declaration of CTest::hello(int $name) must be compatible with Test::hello(string $name)
$t = new CTest();
var_dump($t->hello(12));
