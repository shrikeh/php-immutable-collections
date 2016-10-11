<?php

namespace Shrikeh\Collection;

trait ArrayAccessTrait
{
    public function offsetExists($offset) {
        return $this->getStorage()->offsetExists($offset);
    }

    public function offsetGet($offset) {
        return $this->getStorage()->offsetGet($offset);
    }

    public function offsetSet($offset, $data) {
        return $this->getStorage()->offsetSet($offset, $data);
    }

    public function offsetUnset($offset) {
        return $this->getStorage()->offsetUnset($offset);
    }

    abstract protected function getStorage();
}
