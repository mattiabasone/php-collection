<?php

namespace PhpCollection;

/**
 * Implementation for ObjectBasics for entity-like objects.
 *
 * Two objects are considered equal if they refer to the same instance.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
trait EntityLikeObject
{
    public function hash(): string
    {
        return spl_object_hash($this);
    }

    public function equals(ObjectBasics $other): bool
    {
        return $this === $other;
    }
}
