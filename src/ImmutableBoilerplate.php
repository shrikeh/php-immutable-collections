<?php

namespace Shrikeh\Collection;

use IteratorIterator;
use Shrikeh\Collection\Immutable;

abstract class ImmutableBoilerplate extends IteratorIterator implements Immutable
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ObjectStorageTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
}
