<?php

namespace Shrikeh\Collection;

trait OuterIteratorTrait
{
    public function current()
    {
        return $this->getStorage()->current();
    }

    public function key()
    {
        return $this->getStorage()->key();
    }

    public function next()
    {
        return $this->getStorage()->next();
    }

    public function valid()
    {
        return $this->getStorage()->valid();
    }

    public function rewind()
    {
        return $this->getStorage()->rewind();
    }

    protected function getStorage()
    {
        return parent::getInnerIterator();
    }
}
