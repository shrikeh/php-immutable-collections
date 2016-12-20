<?php
namespace Shrikeh\Collection;

use Shrikeh\Collection\Exception\ImmutableCollection as ImmutableCollectionException;

trait ImmutableArrayAccessTrait
{
    final public function offsetSet($offset, $data)
    {
        $msg = 'Collection %s is immutable and values cannot be set.';
        $this->throwImmutable(sprintf($msg, static::class));
    }

    final public function offsetUnset($offset)
    {
        $msg = 'Collection %s is immutable and values cannot be unset.';
        $this->throwImmutable(sprintf($msg, static::class));
    }

    /**
     * @param string $msg
     */
    protected function throwImmutable($msg, $errorCode = null)
    {
        throw new ImmutableCollectionException($msg, $errorCode);
    }
}
