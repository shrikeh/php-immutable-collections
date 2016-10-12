<?php

namespace Shrikeh\Collection\Examples;

class SomeObject
{
    private $string;

    public static function throughNamed($string)
    {
        return new static($string);
    }

    private function __construct($string)
    {
        $this->string = $string;
    }

    public function say()
    {
        return $this->string;
    }
}
