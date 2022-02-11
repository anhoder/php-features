<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

$datetime = mt_rand(0, 1) ? new DateTime() : null;
$t = $datetime?->getTimestamp();
var_dump($t);

