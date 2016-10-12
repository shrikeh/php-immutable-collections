<?php

namespace spec\Shrikeh\Collection\Examples;

use ArrayObject;
use Shrikeh\Collection\Examples\SomeObject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ImmutableObjectStorageSpec extends ObjectBehavior
{
    function let(
        SomeObject $foo,
        SomeObject $bar
    ) {
        $this->beConstructedThroughFromArray([$foo, $bar]);
    }

    function it_is_receives_an_array_in_its_constructor($foo)
    {
        $this->current()->shouldReturn($foo);
    }

    function it_allows_array_access(
        SomeObject $foo,
        SomeObject $bar
    ) {
        $array = [
            'foo' => $foo,
            'bar' => $bar,
        ];
        $this->beConstructedThroughFromArray($array);
        $this[$foo]->shouldReturn('foo');
    }

    function it_throws_an_exception_if_you_try_to_get_the_inner_iterator()
    {
        $this->shouldThrow('Shrikeh\Collection\Exception\ClosedOuterIterator')
            ->duringGetInnerIterator();
    }

    function it_throws_an_exception_if_you_try_to_set_a_value(
        SomeObject $foo,
        SomeObject $bar,
        SomeObject $baz
    ) {

        $this->shouldThrow('Shrikeh\Collection\Exception\ImmutableCollection')
            ->duringOffsetSet($baz, null);
    }

    function it_throws_an_exception_if_you_try_to_unset_a_value(
        SomeObject $foo,
        SomeObject $bar,
        SomeObject $baz
    ) {
        $this->beConstructedThroughFromArray([$foo, $bar]);
        $this->shouldThrow('Shrikeh\Collection\Exception\ImmutableCollection')
            ->duringOffsetUnset($baz, null);
    }

    function it_can_be_constructed_from_an_iterator() {
        $foo = SomeObject::throughNamed('foo');
        $bar = SomeObject::throughNamed('bar');
        $iterator = new ArrayObject([$foo, $bar]);

        $this->beConstructedThroughFromTraversable($iterator);
        $this->current()->shouldReturn($foo);
    }
}
