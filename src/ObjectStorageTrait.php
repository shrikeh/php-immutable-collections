<?php

namespace Shrikeh\Collection;

use Traversable;
use SplObjectStorage;

trait ObjectStorageTrait
{
    public function __construct(Traversable $objects)
    {
        parent::__construct(new SplObjectStorage());

        foreach ($objects as $key => $value) {
            $this->append($value, $key);
        }
        $this->getStorage()->rewind();
    }

    abstract protected function getStorage();
}
