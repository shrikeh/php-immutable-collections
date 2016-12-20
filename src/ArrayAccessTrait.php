<?php

namespace Shrikeh\Collection;

/**
 * Trait ArrayAccessTrait
 * @package Shrikeh\Collection
 */
trait ArrayAccessTrait
{
    /**
     * @param $offset
     * @return mixed
     */
    public function offsetExists($offset)
    {
        return $this->getStorage()->offsetExists($offset);
    }

    /**
     * @param $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->getStorage()->offsetGet($offset);
    }

    /**
     * @param $offset
     * @param $data
     * @return mixed
     */
    public function offsetSet($offset, $data)
    {
        return $this->getStorage()->offsetSet($offset, $data);
    }

    /**
     * @param $offset
     * @return mixed
     */
    public function offsetUnset($offset)
    {
        return $this->getStorage()->offsetUnset($offset);
    }

    /**
     * @return mixed
     */
    abstract protected function getStorage();
}
