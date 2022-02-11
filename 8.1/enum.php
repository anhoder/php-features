<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 11:26 AM
 */

enum Color {
    case Red;
    case Blue;
    case Green;
}

enum ColorWithValue: string {
    case Red = 'red';
    case Blue = 'blue';
    case Green = 'green';

    public function colorString(): string
    {
        return "Color: {$this->name} => {$this->value}";
    }
}

$red = Color::Red;
var_dump($red->name);

$red = ColorWithValue::Red;
var_dump($red->name, $red->value, $red->colorString());
