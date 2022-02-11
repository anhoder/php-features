<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

#[Attribute(Attribute::TARGET_CLASS)]
class CustomAttribute
{
    public function __construct(
        public string $name,
        public int $expire
    ) {}
}

#[CustomAttribute('anhoder', 1234)]
class A
{
}

$rc = new ReflectionClass(A::class);
foreach ($rc->getAttributes() as $attribute) {
    var_dump($attribute->getName());
}

