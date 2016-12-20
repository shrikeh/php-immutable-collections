<?php

namespace Shrikeh\Collection\Examples;
/**
 * Class SomeObject
 * @package Shrikeh\Collection\Examples
 */
class SomeObject
{
    /**
     * @var
     */
    private $string;

    /**
     * @param $string
     * @return static
     */
    public static function throughNamed($string)
    {
        return new static($string);
    }

    /**
     * SomeObject constructor.
     * @param $string
     */
    private function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @return mixed
     */
    public function say()
    {
        return $this->string;
    }
}
