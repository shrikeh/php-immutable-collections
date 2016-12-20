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
     * Test that the given class is an instance of OuterIterator
     * @param $class
     * @throws IncorrectInterface if the class isn't an OuterIterator
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
