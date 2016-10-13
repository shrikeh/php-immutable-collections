<?php

namespace Shrikeh\Collection;

use Traversable;
use OuterIterator;
use SplObjectStorage;

use Shrikeh\Collection\Exception\IncorrectInterface;

trait ObjectStorageTrait
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
        parent::__construct(new SplObjectStorage());

        foreach ($objects as $key => $value) {
            $this->append($value, $key);
        }
        $this->getStorage()->rewind();
    }

    abstract protected function getStorage();

    protected function append($data, $key)
    {
        throw new \LogicException('you must override the append() method');
    }
}
