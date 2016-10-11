<?php

namespace Shrikeh\Collection\Examples;

use Shrikeh\Collection\ImmutableBoilerplate;

final class ImmutableObjectStorage extends ImmutableBoilerplate
{
    protected function append(SomeObject $object, $key = null)
    {
        $this->getStorage()->attach($object, $key);
    }
}
