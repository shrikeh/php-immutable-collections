<?php
namespace Shrikeh\Collection;

trait ImmutableCollectionTrait
{
    use \Shrikeh\Collection\ArrayAccessTrait;
    use \Shrikeh\Collection\ImmutableArrayAccessTrait
    {
        ImmutableArrayAccessTrait::offsetSet insteadof ArrayAccessTrait;
        ImmutableArrayAccessTrait::offsetUnset insteadof ArrayAccessTrait;
    }
}
