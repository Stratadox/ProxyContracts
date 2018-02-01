<?php

namespace Stratadox\Proxy;

/**
 * Produces Proxy Loaders for proxies of a certain class.
 *
 * @author Stratadox
 * @package Stratadox\Proxy
 */
interface ProducesProxyLoaders
{
    /**
     * Produce an instance that @see LoadsProxiedObjects.
     *
     * @param object $theOwner      The object this proxy gets bound to.
     * @param string $ofTheProperty The property this proxy gets bound to.
     * @param null   $atPosition    The position of the proxy in the collection.
     * @return LoadsProxiedObjects  The instance responsible for loading the proxy.
     */
    public function makeLoaderFor(
        $theOwner,
        string $ofTheProperty,
        $atPosition = null
    ) : LoadsProxiedObjects;
}
