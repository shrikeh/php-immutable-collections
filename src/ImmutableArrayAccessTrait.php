<?php
namespace Shrikeh\Collection;

use Shrikeh\Collection\Exception\ImmutableCollection as ImmutableCollectionException;

/**
 * Trait ImmutableArrayAccessTrait
 * @package Shrikeh\Collection
 */
trait ImmutableArrayAccessTrait
{
    /**
     * Immutable collections should not have setters or unsetters.
     *
     * @param $offset
     * @param $data
     * @throws ImmutableCollectionException
     */
    final public function offsetSet($offset, $data)
    {
        $msg = 'Collection %s is immutable and values cannot be set.';
        $this->throwImmutable(sprintf($msg, static::class));
    }

    /**
     * Immutable collections should not have setters or unsetters.
     *
     * @param $offset
     * @throws ImmutableCollectionException
     */
    final public function offsetUnset($offset)
    {
        $msg = 'Collection %s is immutable and values cannot be unset.';
        $this->throwImmutable(sprintf($msg, static::class));
    }

    /**
     * @param string $msg
     * @throws ImmutableCollectionException
     */
    protected function throwImmutable($msg, $errorCode = null)
    {
        throw new ImmutableCollectionException($msg, $errorCode);
    }
}
