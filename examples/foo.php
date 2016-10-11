<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Shrikeh\Collection\Examples\SomeObject;
use Shrikeh\Collection\Examples\ImmutableObjectStorage;

$wibble = new SomeObject();
$wobble = new SomeObject();

$wibble->foo = 'bar';
$wobble->bar = 'baz';

$bar = new ArrayObject([$wibble, $wobble]);

$foo = ImmutableObjectStorage::fromTraversable($bar);

foreach ($foo as $something) {
    var_dump($something);
}
$foo->rewind();
var_dump($foo->current());
