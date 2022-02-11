<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

$skeleton = "YYYYMMdd";

$today = new \DateTimeImmutable();

$dtpg = new \IntlDatePatternGenerator("zh_CN");
$pattern = $dtpg->getBestPattern($skeleton);
echo "zh: ", \IntlDateFormatter::formatObject($today, $pattern, "zh_CN"), "\n";

$dtpg = new \IntlDatePatternGenerator("en_US");
$pattern = $dtpg->getBestPattern($skeleton);
echo "en: ", \IntlDateFormatter::formatObject($today, $pattern, "en_US"), "\n";

