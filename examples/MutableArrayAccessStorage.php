<?php

namespace Shrikeh\Collection\Examples;

use ArrayAccess;
use ArrayObject;

final class MutableArrayAccessStorage implements ArrayAccess
{
    use \Shrikeh\Collection\ArrayAccessTrait;

    public function __construct($data)
    {
        $this->storage = new ArrayObject($data);
    }

    protected function getStorage()
    {
        return $this->storage;
    }
}
