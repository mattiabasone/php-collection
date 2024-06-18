<?php

namespace PhpCollection\ObjectBasicsHandler;

use PhpCollection\ObjectBasicsHandler;

class IdentityHandler implements ObjectBasicsHandler
{
    public function hash($object): string
    {
        return spl_object_hash($object);
    }

    public function equals($firstObject, $secondObject): bool
    {
        return $firstObject === $secondObject;
    }
}
