<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

class A
{
    public function __construct(
        public string $name,
        public int $age
    ) {}
}

class B extends A
{
    public function __construct(
        $name,
        $age,
        public string $class
    ) {
        parent::__construct($name, $age);
    }
}

$a = new A('anhoder', 18);
var_dump($a);
$a->age++;
var_dump($a);

$b = new B('anhoder', '18', 'c2');
var_dump($b);


