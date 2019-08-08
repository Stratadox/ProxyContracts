<?php

namespace Stratadox\Proxy;

/**
 * Produces proxies, feeding them with whatever data we have on the object they
 * represent.
 *
 * @author Stratadox
 */
interface ProxyFactory
{
    /**
     * Creates a new proxy.
     *
     * @param array $knownData       Associative array with the known data.
     * @return Proxy                 The proxy, sherlock.
     * @throws ProxyProductionFailed When the proxy could not be created.
     */
    public function create(array $knownData = []): Proxy;
}
