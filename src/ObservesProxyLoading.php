<?php

namespace Stratadox\Proxy;

/**
 * Observes the loading of proxies to get notified of lazy loading operations.
 *
 * @author Stratadox
 * @package Stratadox\Proxy
 */
interface ObservesProxyLoading
{
    /**
     * Notifies the observer, passing along the loaded instance.
     *
     * @param object $theLoadedInstance The instance that replaces the proxy.
     */
    public function updateWith($theLoadedInstance) : void;
}
