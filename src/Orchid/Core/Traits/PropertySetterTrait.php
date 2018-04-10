<?php declare(strict_types = 1);

namespace Orchid\Core\Traits;

/**
 * @author Marc L. Veary
 * @namespace
 * @package package_name
 */
trait PropertySetter
{
    /**
     * Checks the given key is set in the data array, if so, the given property is set with the value.
     * @param string $key
     * @param array $data
     * @param mixed $property Must be a property of the class.
     * @param mixed $default. The default value (if this parameter is set) and the key is not found in the data array.
     */
    protected function setProperty(string $key, array $data, &$property, $default = null): void
    {
        if (isset($data[$key])) {
            $property = $data[$key];
            return;
        }

        // Only set the property to the default IF it is NOT null. Otherwise leave the value of the property as set
        // in the class.
        if ($default !== null) {
            $property = $default; //@codeCoverageIgnore
        }
    }
}
