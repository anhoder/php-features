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
    public readonly string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // PHP Fatal error:  Uncaught Error: Cannot modify readonly property A::$name
    //public function setName(string $name)
    //{
    //    $this->name = $name;
    //}
}

$a = new A('anhoder', 18);
var_dump($a->name, $a->age);
//$a->name = "1234"; // PHP Fatal error:  Uncaught Error: Cannot modify readonly property A::$name
$a->age++;
var_dump($a);


