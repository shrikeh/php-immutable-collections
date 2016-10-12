<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Shrikeh\Collection\Examples\SomeObject;
use Shrikeh\Collection\Examples\ImmutableObjectStorage;
use Shrikeh\Collection\Examples\ImmutableArrayStorage;

$valueObject1 = SomeObject::throughNamed('foo');
$valueObject2 = SomeObject::throughNamed('baz');
$valueObject3 = SomeObject::throughNamed('baz');

$objects = new ArrayObject([$valueObject1, $valueObject2, $valueObject3]);

$objectStorage = ImmutableObjectStorage::fromTraversable($objects);

foreach ($objectStorage as $valueObject) {
    echo $valueObject->say();
}
$objectStorage->rewind();

echo $objectStorage->current()->say();

$arrayStorage = ImmutableArrayStorage::fromTraversable($objects);

foreach ($arrayStorage as $object) {
    echo $object->say();
}
