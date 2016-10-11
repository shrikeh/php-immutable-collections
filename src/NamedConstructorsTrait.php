<?php

namespace Shrikeh\Collection;

use ArrayObject;
use Traversable;

trait NamedConstructorsTrait
{
    public static function fromTraversable(Traversable $traversable)
    {
        return new static($traversable);
    }

    public static function fromArray(array $objects = array())
    {
        return new static(new ArrayObject($objects));
    }
}
