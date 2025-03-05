<?php

/*
 * Copyright 2012 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PhpCollection;

use PhpOption\None;
use PhpOption\Option;
use PhpOption\Some;

/**
 * Basic map interface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface MapInterface extends CollectionInterface
{
    /**
     * Returns the first element in the collection if available.
     *
     * @return Some|None on array<K,V>
     */
    public function first(): Some|None;

    /**
     * Returns the last element in the collection if available.
     *
     * @return Some|None on array<K,V>
     */
    public function last(): Some|None;

    /**
     * Returns all elements in this collection.
     */
    public function all(): array;

    /**
     * Searches the collection for an element.
     *
     * @param \Closure $callable receives the element as first argument, and returns true, or false
     *
     * @return Option on array<K,V>
     */
    public function find(\Closure $callable): Option;

    /**
     * Returns the value associated with the given key.
     *
     * @return Some|None on V
     */
    public function get(mixed $key): Some|None;

    /**
     * Returns whether this map contains a given key.
     */
    public function containsKey(mixed $key): bool;

    /**
     * Puts a new element in the map.
     */
    public function set(mixed $key, mixed $value): void;

    /**
     * Removes an element from the map.
     */
    public function remove(mixed $key): mixed;

    /**
     * Adds all another map to this map, and returns itself.
     */
    public function addMap(MapInterface $map): MapInterface;

    /**
     * Returns an array with the keys.
     */
    public function keys(): array;

    /**
     * Returns an array with the values.
     */
    public function values(): array;

    /**
     * Returns a new sequence by omitting the given number of elements from the beginning.
     *
     * If the passed number is greater than the available number of elements, all will be removed.
     */
    public function drop(int $number): MapInterface;

    /**
     * Returns a new sequence by omitting the given number of elements from the end.
     *
     * If the passed number is greater than the available number of elements, all will be removed.
     */
    public function dropRight(int $number): MapInterface;

    /**
     * Returns a new sequence by omitting elements from the beginning for as long as the callable returns true.
     *
     * @param \Closure $callable receives the element to drop as first argument, and returns true (drop), or false (stop)
     */
    public function dropWhile(\Closure $callable): MapInterface;

    /**
     * Creates a new collection by taking the given number of elements from the beginning
     * of the current collection.
     *
     * If the passed number is greater than the available number of elements, then all elements
     * will be returned as a new collection.
     */
    public function take(int $number): MapInterface;

    /**
     * Creates a new collection by taking elements from the current collection
     * for as long as the callable returns true.
     */
    public function takeWhile(\Closure $callable): MapInterface;
}
