<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

class Test
{
    public ?string $name;
    public int|float|null $num;

    public function __construct(?string $name, int|float|null $num)
    {
        $this->name = $name;
        $this->num = $num;
    }
}
