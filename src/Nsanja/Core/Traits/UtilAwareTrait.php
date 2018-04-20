<?php declare(strict_types = 1);

namespace Nsanja\Core\Traits;

use Nsanja\Core\Util;

/**
 * This trait makes a sub Util aware. The Util instance can be set and fetched using the provided methods.
 * @author Marc L. Veary
 * @namespace Nsanja\Core\Traits
 * @package Nsanja
 */
trait UtilAwareTrait
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
