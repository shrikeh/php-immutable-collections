<?php

namespace Shrikeh\Collection;

use Traversable;
use SplFixedArray;

trait FixedArrayStorageTrait
{
    public function __construct(Traversable $objects)
    {
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

    abstract protected function getStorage();
}
