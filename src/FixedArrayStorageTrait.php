<?php

namespace Shrikeh\Collection;

use Traversable;
use SplFixedArray;

/**
 * Trait FixedArrayStorageTrait
 * @package Shrikeh\Collection
 */
trait FixedArrayStorageTrait
{
    /**
     * Enforce that this trait is applied to an OuterIterator
     */
    use \Shrikeh\Collection\RequiresOuterIteratorTrait;

    /**
     * FixedArrayStorageTrait constructor.
     * @param Traversable $objects
     */
    public function __construct(Traversable $objects)
    {
        /**
         * Test this is an outer iterator.
         */
        static::testOuterIterator($this);
        $arr = [];
        foreach ($objects as $key => $object) {
            $arr[$key] = $object;
        }

        parent::__construct(new SplFixedArray(count($arr)));

        foreach ($arr as $index => $obj) {
            $this->append($obj, $index);
        }
        $this->getStorage()->rewind();
    }

    /**
     * @param $data
     * @param $key
     */
    private function append($data, $key)
    {
        $msg = 'you must override the %s method';
        throw new \LogicException(sprintf($msg, __FUNCTION__));
    }

    /**
     * @return mixed
     */
    abstract protected function getStorage();
}
