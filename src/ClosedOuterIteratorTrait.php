<?php
namespace Shrikeh\Collection;

use Shrikeh\Collection\Exception\ClosedOuterIterator;

/**
 * Trait ClosedOuterIteratorTrait
 * @package Shrikeh\Collection
 */
trait ClosedOuterIteratorTrait
{
    /**
     * Remove access to the interface-defined getInnerIterator(), therefore
     * enforcing immutability.
     *
     * @throws ClosedOuterIterator
     */
    final public function getInnerIterator()
    {
        $msg = 'Collection %s does not allow access to the inner iterator.';
        $this->throwClosedOuterIterator(sprintf($msg, static::class));
    }

    /**
     * @param $msg The message in the exception.
     */
    private function throwClosedOuterIterator($msg)
    {
        throw new ClosedOuterIterator($msg);
    }
}
