<?php declare(strict_types = 1);

namespace Nsanja\Core;

/**
 * Abstract class which makes its sub-class Util aware.
 * @author Marc L. Veary
 * @namespace Nsanja\Core
 * @package Nsanja
 */
abstract class UtilAwareAbstract
{
    protected $util;

    /**
     * Set an instance of the Util class.
     * @param Util $instance
     */
    public function setUtil(Util $instance): void
    {
        $this->util = $instance;
    }

    /**
     * Retrieve the Util class.
     * @throws \Exception Thrown if the Util instance has not been set.
     * @return Util
     */
    public function getUtil(): Util
    {
        if ($this->util === null) {
            throw new \Exception("Util instance not set. Please call 'setUtil()' first");
        }
        return $this->util;
    }
}
