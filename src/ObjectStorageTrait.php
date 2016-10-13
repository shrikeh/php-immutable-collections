<?php

namespace Shrikeh\Collection;

use Traversable;
use SplObjectStorage;

trait ObjectStorageTrait
{
    use \Shrikeh\Collection\RequiresOuterIteratorTrait;

    public function __construct(Traversable $objects)
    {
        static::testOuterIterator($this);
        parent::__construct(new SplObjectStorage());

        foreach ($objects as $key => $value) {
            $this->append($value, $key);
        }
        $this->getStorage()->rewind();
    }

    abstract protected function getStorage();

    private function append($data, $key)
    {
        throw new \LogicException('you must override the append() method');
    }
}
