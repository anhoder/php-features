<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

$f = fopen('a.txt', 'w+');
fwrite($f, 'line 1');
fwrite($f, PHP_EOL);
fwrite($f, 'line 2');

fsync($f); // wait data and metadata write to disk
// fdatasync($f); // wait only data (without metadata) write to disk
fclose($f);


