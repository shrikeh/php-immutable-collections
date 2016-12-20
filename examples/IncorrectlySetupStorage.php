<?php

namespace Shrikeh\Collection\Examples;

use Shrikeh\Collection\Immutable;
use Shrikeh\Collection\Examples\SomeObject;

/**
 * Class IncorrectlySetupStorage
 * @package Shrikeh\Collection\Examples
 */
final class IncorrectlySetupStorage
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\ObjectStorageTrait;
}
