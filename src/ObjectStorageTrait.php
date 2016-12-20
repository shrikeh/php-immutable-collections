<?php

namespace Shrikeh\Collection;

use Traversable;
use SplObjectStorage;

trait ObjectStorageTrait
{
    /**
     * Force that this trait is used inside an OuterIterator
     */
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

    /**
     * @return mixed
     */
    abstract protected function getStorage();

    /**
     * We don't want to make this abstract, because then we would defeat the
     * whole point of type hinting on this.
     * Usage within domain collections should be append(SomeDomainThing $thing, $key)
     * so instead we throw an Exception so a dev knows where the problem lies.
     */
    private function append($data, $key)
    {
        throw new \LogicException('you must override the append() method');
    }
}
