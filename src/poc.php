<?php

/**
 * @param array<string,string> $data
 *
 * @return list<string>
 */
function x($data): array {
    return array_keys($data);
}

x(['string' => 'string']);


// ==================================================================================================================

/** @psalm-assert string $x  */
$x = pathinfo("./poc.php", PATHINFO_DIRNAME);


// ==================================================================================================================


class Collection implements IteratorAggregate
{
    public function getIterator()
    {
        return new ArrayIterator([]);
    }
}

class ExtendedCollection extends Collection
{
    /**
     * @return \ArrayIterator<int, string>
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator(['hello']);
    }
}

// ==================================================================================================================

/**@template X */
class Foo {}

/** @return \Generator<int, Foo<string>, mixed, void> */
function generate()
{
    /** @var Foo<string> $x */
    $x = new Foo();
    yield $x;
}
