<?php

namespace PhpCollection\ObjectBasicsHandler;

use PhpCollection\ObjectBasicsHandler;

class DateTimeHandler implements ObjectBasicsHandler
{
    public function hash($object): string|int
    {
        if (!$object instanceof \DateTimeInterface) {
            throw new \LogicException('$object must be an instance of \DateTime.');
        }

        return $object->getTimestamp();
    }

    public function equals($firstObject, $secondObject): bool
    {
        if (!$firstObject instanceof \DateTimeInterface) {
            throw new \LogicException('$thisObject must be an instance of \DateTime.');
        }
        if (!$secondObject instanceof \DateTimeInterface) {
            return false;
        }

        return $firstObject->format(\DateTimeInterface::ATOM) === $secondObject->format(\DateTimeInterface::ATOM);
    }
}
