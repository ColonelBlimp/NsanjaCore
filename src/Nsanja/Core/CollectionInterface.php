<?php declare(strict_types = 1);

namespace Nsanja\Core;

interface CollectionInterface extends \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * Set an item.
     * @param string $key The key.
     * @param mixed $value The value.
     */
    public function set(string $key, $value): void;

    /**
     * Gets an item from the collection.
     * @param string $key The key.
     * @param mixed|null $default. The default value to return if the collection does not contain the given key.
     */
    public function get(string $key, $default = null);

    /**
     * Determines if the collection containes the given key.
     * @param string $key The key.
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Return the whole collection as an array.
     * @return array
     */
    public function all(): array;

    /**
     * Remove an item from the collection.
     * @param string $key The key.
     */
    public function remove(string $key): void;

    /**
     * Remove all items from the collection.
     */
    public function clear(): void;

    /**
     * Add item(s) replacing (if necessary).
     */
    public function replace(array $items): void;
}
