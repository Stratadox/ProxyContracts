<?php

namespace Stratadox\Proxy;

/**
 * Lazily loads the objects that are represented by the proxy.
 *
 * @author Stratadox
 */
interface ProxyLoader
{
    /**
     * Loads the real object, now that the proxy is called upon.
     *
     * @param array $data The data we have about the object.
     * @return object     The lazily loaded instance.
     */
    public function loadTheInstance(array $data): object;
}
