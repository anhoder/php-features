<?php
/**
 * The file is part of the php-feature.
 *
 * (c) anhoder <anhoder@88.com>.
 *
 * 2022/2/11 10:17 AM
 */

/**
 * @param \Countable&\Stringable $value
 * @return array{count: int, string: string}
 */
function testIntersectionTypes(Countable&Stringable $value) {
    return [
        'count' => $value->count(),
        'string' => (string)$value,
    ];
}

class A implements Countable, Stringable
{
    /** @var array<int> */
    private array $values;

    /**
     * @param array<int> $values
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function count(): int
    {
        return $this->values ? count($this->values) : 0;
    }

    public function __toString(): string
    {
        return $this->values ? implode(', ', $this->values) : '';
    }
}

class B implements Countable
{
    public function count(): int
    {
        return 0;
    }
}

var_dump(testIntersectionTypes(new A([1,2,3,4,5,5])));
// var_dump(testIntersectionTypes(new B())); PHP Fatal error:  Uncaught TypeError: testIntersectionTypes(): Argument #1 ($value) must be of type Countable&Stringable
