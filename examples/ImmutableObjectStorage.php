<?php

namespace Shrikeh\Collection\Examples;

use IteratorIterator;
use Shrikeh\Collection\Immutable;
use Shrikeh\Collection\Examples\SomeObject;

final class ImmutableObjectStorage extends IteratorIterator implements Immutable
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\ObjectStorageTrait;

    protected function append(SomeObject $object, $key = null)
    {
        $this->getStorage()->attach($object, $key);
    }
}
