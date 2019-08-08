<?php

namespace Stratadox\Proxy;

/**
 * Acts as a placeholder for the object that is still to be loaded.
 *
 * @author Stratadox
 */
interface Proxy
{
    /**
     * Proxies are given a loader and an associative array of known data.
     *
     * @param ProxyLoader $loader The loader responsible for fetching the real
     *                            object when any of the proxy methods is called.
     * @param array$knownData     Associative array containing what information
     *                            we have on the represented object.
     */
    public function __construct(ProxyLoader $loader, array $knownData);
}
