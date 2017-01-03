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
    /**
     * Give it the named constructors fromTraversable() and fromArray()
     */
    use \Shrikeh\Collection\NamedConstructorsTrait;
    /**
     * Make it immutable
     */
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    /**
     * Remove access to getInnerIterator()
     */
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    /**
     * Proxy all access to getStorage()
     */
    use \Shrikeh\Collection\OuterIteratorTrait;
    /**
     * Construct it with SplFixedArray as the storage type
     */
    use \Shrikeh\Collection\FixedArrayStorageTrait;

    /**
     * @param SomeObject $object An object that is the only allowed type in this collection
     * @param $key
     */
    protected function append(SomeObject $object, $key)
    {
        $this->getStorage()->offsetSet($key, $object);
    }
}
