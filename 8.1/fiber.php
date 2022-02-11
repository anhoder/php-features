<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 11:26 AM
 */


$fiber = new Fiber(function ($value): void {
    echo 'Start fiber with ', $value, PHP_EOL;

    $value = Fiber::suspend('Suspend fiber');

    echo 'Resume fiber with ', $value, PHP_EOL;
});

$value = $fiber->start('start');
echo 'Resume main with ', $value, PHP_EOL;
$value = $fiber->resume('Suspend main');



