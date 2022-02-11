<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

class A
{
    public function test($name)
    {
        return "test $name";
    }

    public static function test2($name)
    {
        return "test2 $name";
    }
}

$a = new A();

$fn = strlen(...);
$fn2 = $a->test(...);
$fn3 = A::test2(...);
$fn4 = $a::test2(...);
$fn5 = [$a, 'test2'](...);

var_dump($fn('dsadsa'), $fn2('anhoder'), $fn3('anhoder'), $fn4('anhoder'));

