<?php

namespace spec\Shrikeh\Collection\Examples;

use Shrikeh\Collection\Examples\ImmutableArrayStorage;
use Shrikeh\Collection\Examples\SomeObject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableArrayStorageSpec extends ObjectBehavior
{
    function let(
        SomeObject $foo,
        SomeObject $bar
    ) {
        $this->beConstructedThroughFromArray([$foo, $bar]);
    }

    function it_is_initializable($foo)
    {
        $this->shouldHaveType(ImmutableArrayStorage::class);
        $this->current()->shouldReturn($foo);
    }
}
