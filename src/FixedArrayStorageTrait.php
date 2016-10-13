<?php

namespace Shrikeh\Collection;

use Traversable;
use SplFixedArray;

trait FixedArrayStorageTrait
{
    use \Shrikeh\Collection\RequiresOuterIteratorTrait;

    public function __construct(Traversable $objects)
    {
        static::testOuterIterator($this);
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

    private function append($data, $key)
    {
        $msg = 'you must override the %s method';
        throw new \LogicException(sprintf($msg, __FUNCTION__));
    }

    abstract protected function getStorage();
}
