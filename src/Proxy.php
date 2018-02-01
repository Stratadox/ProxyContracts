<?php

namespace Stratadox\Proxy;

/**
 * Acts as a placeholder for the object that is still to be loaded.
 *
 * @author Stratadox
 * @package Stratadox\Proxy
 */
interface Proxy
{
    /**
     * Lazily load and return the proxied object.
     *
     * @return object The lazily loaded object.
     */
    public function __load();
}
