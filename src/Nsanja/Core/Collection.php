<?php declare(strict_types = 1);

namespace Nsanja\Core;

/**
 * Collection.
 * @author Marc L. Veary
 * @namespace Nsanja\Core
 * @package Nsanja
 */
class Collection implements CollectionInterface
{
    private $data = [];

    /**
     * Constructor.
     * @param array $items Pre-populate the collection with key/value array.
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $key => $value) {
            $this->set($key, $value);
        }
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::all()
     */
    public function all(): array
    {
        return $this->data;
    }

    /**
     * {@inheritDoc}
     * @see \ArrayAccess::offsetGet()
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * {@inheritDoc}
     * @see \IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::set()
     */
    public function set(string $key, $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * {@inheritDoc}
     * @see \ArrayAccess::offsetExists()
     */
    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::get()
     */
    public function get(string $key, $default = null)
    {
        return $this->has($key) ? $this->data[$key] : $default;
    }

    /**
     * {@inheritDoc}
     * @see \ArrayAccess::offsetUnset()
     */
    public function offsetUnset($offset)
    {
        $this->remove($offset);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::clear()
     */
    public function clear(): void
    {
        $this->data = [];
    }

    /**
     * {@inheritDoc}
     * @see \Countable::count()
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::has()
     */
    public function has(string $key): bool
    {
        return isset($this->data[$key]);
    }

    /**
     * {@inheritDoc}
     * @see \ArrayAccess::offsetSet()
     */
    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::remove()
     */
    public function remove(string $key): void
    {
        unset($this->data[$key]);
    }

    /**
     * {@inheritDoc}
     * @see \Nsanja\Core\CollectionInterface::replace()
     */
    public function replace(array $items): void
    {
        foreach ($items as $key => $value) {
            $this->set($key, $value);
        }
    }
}
