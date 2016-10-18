<?php

namespace spec\Shrikeh\Collection\Examples;

use Shrikeh\Collection\Examples\MutableArrayAccessStorage;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MutableArrayAccessStorageSpec extends ObjectBehavior
{
    function it_allows_array_access()
    {
        $arr = [
          'foo' => 'bar',
          'bar' => 'baz'
        ];
        $this->beConstructedWith($arr);
        foreach ($arr as $key => $val) {
            $this[$key]->shouldReturn($val);
        }
    }
}
