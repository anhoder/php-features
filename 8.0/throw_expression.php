<?php
/**
 * The file is part of the php8-test.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:11 AM
 */

// php<8
// PHP Parse error:  syntax error, unexpected 'throw' (T_THROW)
$name ?? throw new Exception('name cannot be null');
