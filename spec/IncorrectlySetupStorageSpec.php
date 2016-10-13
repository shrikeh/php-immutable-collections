<?php

namespace spec\Shrikeh\Collection\Examples;

use Shrikeh\Collection\Examples\SomeObject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IncorrectlySetupStorageSpec extends ObjectBehavior
{
    function let(
        SomeObject $foo,
        SomeObject $bar
    ) {
        $this->beConstructedThroughFromArray([$foo, $bar]);
    }

    function it_throws_an_exception_because_it_is_not_an_outeriterator()
    {
        $this->shouldThrow('LogicException')->duringInstantiation();
    }
}
