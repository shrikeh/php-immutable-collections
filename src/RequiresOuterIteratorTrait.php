<?php

namespace Shrikeh\Collection;

use OuterIterator;
use Shrikeh\Collection\Exception\IncorrectInterface;

/**
 * Class RequiresOuterIteratorTrait
 * @package Shrikeh\Collection
 */
trait RequiresOuterIteratorTrait
{
    /**
     * @param $class
     */
    private static function testOuterIterator($class)
    {
        if (!$class instanceof OuterIterator) {
            $msg = 'class %s uses trait %s but it is not an %s';
            throw new IncorrectInterface(
                sprintf(
                    $msg,
                    __CLASS__,
                    __TRAIT__,
                    OuterIterator::class
                )
            );
        }
    }
}
