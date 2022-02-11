<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

class Foo
{
    final public const BAR = 'bar';
    public const BAR2 = 'bar2';
}

class Foo2 extends Foo
{
    //public const BAR = 'bar'; PHP Fatal error:  Foo2::BAR cannot override final constant Foo::BAR in
    public const BAR2 = 'foo2_bar2';
}
