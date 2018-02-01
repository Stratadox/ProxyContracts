<?php

namespace Stratadox\Proxy;

/**
 * Produces Owner Updaters, which listen to lazy load operation and update the
 * property of the proxy owner to represent the newly loaded instance.
 *
 * @author Stratadox
 * @package Stratadox\Proxy
 */
interface ProducesOwnerUpdaters
{
    /**
     * Produce an instance that @see UpdatesTheProxyOwner when the proxy is loaded.
     *
     * @param object     $theOwner      The object this proxy gets bound to.
     * @param string     $ofTheProperty The property this proxy gets bound to.
     * @param mixed|null $atPosition    The position of the proxy in the collection.
     * @return UpdatesTheProxyOwner     The instance responsible for updating the property.
     */
    public function makeUpdaterFor(
        $theOwner,
        string $ofTheProperty,
        $atPosition = null
    ) : UpdatesTheProxyOwner;
}
