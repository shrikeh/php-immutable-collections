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
     *
     */
    final public function getInnerIterator()
    {
        $msg = 'Collection %s does not allow access to the inner iterator.';
        $this->throwClosedOuterIterator(sprintf($msg, static::class));
    }

    /**
     * @param $msg
     */
    private function throwClosedOuterIterator($msg)
    {
        throw new ClosedOuterIterator($msg);
    }
}
