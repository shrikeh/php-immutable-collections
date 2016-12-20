<?php

namespace Shrikeh\Collection\Examples;

use IteratorIterator;
use Shrikeh\Collection\Examples\SomeObject;

/**
 * Class ImmutableArrayStorage
 * @package Shrikeh\Collection\Examples
 */
final class ImmutableArrayStorage extends IteratorIterator
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\FixedArrayStorageTrait;

    /**
     * @param \Shrikeh\Collection\Examples\SomeObject $object
     * @param $key
     */
    protected function append(SomeObject $object, $key)
    {
        $this->getStorage()->offsetSet($key, $object);
    }
}
