<?php

namespace Shrikeh\Collection;

use ArrayObject;
use Traversable;

/**
 * Trait NamedConstructorsTrait
 * @package Shrikeh\Collection
 */
trait NamedConstructorsTrait
{
    /**
     * @param Traversable $traversable
     * @return static
     */
    public static function fromTraversable(Traversable $traversable)
    {
        return new static($traversable);
    }

    /**
     * @param array $objects
     * @return static
     */
    public static function fromArray(array $objects = array())
    {
        return new static(new ArrayObject($objects));
    }
}
