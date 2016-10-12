<?php

namespace Shrikeh\Collection\Examples;

use IteratorIterator;

final class ImmutableArrayStorage extends IteratorIterator
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\FixedArrayStorageTrait;

    protected function append(SomeObject $object, $key)
    {
        $this->getStorage()->offsetSet($key, $object);
    }
}
