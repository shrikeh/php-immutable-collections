<?php

namespace Shrikeh\Collection\Examples;

use ArrayAccess;
use ArrayObject;

/**
 * Class MutableArrayAccessStorage
 * @package Shrikeh\Collection\Examples
 */
final class MutableArrayAccessStorage implements ArrayAccess
{
    use \Shrikeh\Collection\ArrayAccessTrait;

    /**
     * MutableArrayAccessStorage constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->storage = new ArrayObject($data);
    }

    /**
     * @return ArrayObject
     */
    protected function getStorage()
    {
        return $this->storage;
    }
}
