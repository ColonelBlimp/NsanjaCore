<?php declare(strict_types = 1);

namespace Orchid\Core\Traits;

/**
 * This trait overrides a class's magic methods which allow mutability.
 * @author Marc L. Veary
 * @namespace Orchid\Core\Traits
 * @package Orchid
 */
trait MagicOverrideForImmutableTrait
{
    /**
     * Overridden to ensure this object is immutable.
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        // Do nothing
    }

    /**
     * Overridden to ensure this object is immutable.
     * @param string $name
     */
    public function __unset($name)
    {
        // Do nothing
    }
}
