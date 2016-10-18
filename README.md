# php-immutable-collections
[![build_status_img]][build_status_travis]
[![code_quality_img]][code_quality]
[![latest_stable_version_img]][latest_stable_version]
[![latest_unstable_version_img]][latest_unstable_version]
[![license_img]][license]
[![twitter_img]][twitter]

Trait-based helper library to take care of the heavy lifting of immutable collections in PHP.

## Overview

This low-level library is just time-saving [traits][] for creating immutable collections. As PHP 7 can use [return type hinting][php7_returning_values], I decided I would always return a Collection if there was a possibility of returning _0-n_ objects from a method, and could then type hint the return value as a Collection, whether empty or not. PHP does not natively support immutable iterators, so I find that whenever I use [Domain-Driven Design][ddd], and need an iterable list of [Value Objects][value_objects], I have to do the same boilerplate re-work.

This pattern has been successful for me, as I can also strongly type the Collections themselves, so they can only contain objects of a given type. I also generally make them immutable, so they throw a descendent of [`DomainException`][domainexception] if you try to set or unset a value.

So as I use these more often, I split them up into Traits for re-use across my code. Feel free to use for yourself, they're tiny and just take care of boilerplate stuff for me.

## Usage
The library consists of about a dozen traits that aid in matching core PHP and SPL interfaces such as [`ArrayAccess`][arrayaccess] and [`OuterIterator`][outeriterator]. Generally I have an inner "storage", and ensure that access to this directly is removed, including mutable methods such as `offSetSet()` or `offsetUnset()`. This ensures that only the values added to the constructor can be iterated over.

As an example, to create a Collection that can only contain `SomeObject` objects:
```php
<?php

namespace Shrikeh\Collection\Examples;

use IteratorIterator;
use Shrikeh\Collection\Examples\SomeObject;

final class ImmutableSomeObjectCollection extends IteratorIterator
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\ObjectStorageTrait;

    # And type hint the relevant class/interface we need...
    protected function append(SomeObject $object, $key)
    {
        $this->getStorage()->attach($object);
    }
}

```


#### ArrayAccessTrait
Used to easily meet the requirements of the ArrayAccess interface. Proxies to underlying `offsetX` methods of the storage.



[build_status_img]: https://img.shields.io/travis/shrikeh/php-immutable-collections.svg "Build Status"
[build_status_travis]: https://travis-ci.org/shrikeh/php-immutable-collections

[code_quality]: https://scrutinizer-ci.com/g/shrikeh/php-immutable-collections/?branch=master
[code_quality_img]: https://img.shields.io/scrutinizer/g/shrikeh/php-immutable-collections.svg "Scrutinizer Code Quality"

[latest_stable_version_img]: https://img.shields.io/packagist/v/shrikeh/collections.svg "Latest Stable Version"
[latest_stable_version]: https://packagist.org/packages/shrikeh/collections "Latest Stable Version"

[latest_unstable_version_img]: https://img.shields.io/packagist/vpre/shrikeh/collections.svg "Latest Unstable Version"
[latest_unstable_version]: https://packagist.org/packages/shrikeh/collections "Latest Unstable Version"

[license_img]: https://img.shields.io/packagist/l/shrikeh/collections.svg "License"
[license]: https://packagist.org/packages/shrikeh/collections

[twitter_img]: https://img.shields.io/badge/twitter-%40shrikeh-blue.svg "@shrikeh on Twitter"
[twitter]: https://twitter.com/shrikeh

[traits]: http://php.net/manual/en/language.oop5.traits.php "Link to traits overview in PHP 5.4"
[php7_returning_values]: http://php.net/manual/en/functions.returning-values.php "PHP 7 Returning Values"
[ddd]: https://en.wikipedia.org/wiki/Domain-driven_design "Domain driven design definition"
[value_objects]: https://en.wikipedia.org/wiki/Value_object "Value Objects definition"
[domainexception]: http://php.net/manual/en/class.domainexception.php "PHP Domain Exception documentation"
[arrayaccess]: http://php.net/manual/en/class.arrayaccess.php "The ArrayAccess interface"
[outeriterator]: http://php.net/manual/en/class.outeriterator.php "The OuterIterator interface"