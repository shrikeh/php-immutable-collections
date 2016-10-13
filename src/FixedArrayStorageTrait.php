<?php

namespace Shrikeh\Collection;

use Traversable;
use OuterIterator;
use SplFixedArray;

use Shrikeh\Collection\Exception\IncorrectInterface;

trait FixedArrayStorageTrait
{
    public function __construct(Traversable $objects)
    {
        if (!$this instanceof OuterIterator) {
            $msg = 'class %s uses trait %s but it is not an %s';
            throw new IncorrectInterface(
                sprintf($msg,
                    __CLASS__,
                    __TRAIT__,
                    'OuterIterator'
                )
            );
        }
        $arr = [];
        foreach ($objects as $object) {
            $arr[] = $object;
        }
        parent::__construct(new SplFixedArray(count($arr)));

        foreach ($arr as $index => $obj) {
            $this->append($obj, $index);
        }
        $this->getStorage()->rewind();
    }

    protected function append($data, $key)
    {
        $msg = 'you must override the %s method';
        throw new \LogicException(sprintf($msg, __FUNCTION__));
    }

    abstract protected function getStorage();
}
