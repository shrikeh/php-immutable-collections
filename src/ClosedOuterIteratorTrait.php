<?php
namespace Shrikeh\Collection;

use Shrikeh\Collection\Exception\ClosedOuterIterator;

trait ClosedOuterIteratorTrait
{
    final public function getInnerIterator()
    {
        $msg = 'Collection %s does not allow access to the inner iterator.';
        $this->throwClosedOuterIterator(sprintf($msg, static::class));
    }

    protected function throwClosedOuterIterator($msg)
    {
        throw new ClosedOuterIterator($msg);
    }
}
