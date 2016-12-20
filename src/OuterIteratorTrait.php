<?php

namespace Shrikeh\Collection;

/**
 * Trait OuterIteratorTrait
 * @package Shrikeh\Collection
 */
trait OuterIteratorTrait
{
    /**
     * @return mixed
     */
    public function current()
    {
        return $this->getStorage()->current();
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return $this->getStorage()->key();
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return $this->getStorage()->next();
    }

    /**
     * @return mixed
     */
    public function valid()
    {
        return $this->getStorage()->valid();
    }

    /**
     * @return mixed
     */
    public function rewind()
    {
        return $this->getStorage()->rewind();
    }

    /**
     * @return mixed
     */
    protected function getStorage()
    {
        return parent::getInnerIterator();
    }
}
