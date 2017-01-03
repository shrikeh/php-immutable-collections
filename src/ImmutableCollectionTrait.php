<?php
namespace Shrikeh\Collection;

/**
 * Trait ImmutableCollectionTrait
 * @package Shrikeh\Collection
 */
trait ImmutableCollectionTrait
{
    /**
     * Allow this iterator to be used like ArrayAccess.
     */
    use \Shrikeh\Collection\ArrayAccessTrait;
    /**
     * Make this colleciton immutable after construction.
     */
    use \Shrikeh\Collection\ImmutableArrayAccessTrait
    {
        ImmutableArrayAccessTrait::offsetSet insteadof ArrayAccessTrait;
        ImmutableArrayAccessTrait::offsetUnset insteadof ArrayAccessTrait;
    }
}
