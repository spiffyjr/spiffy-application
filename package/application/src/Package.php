<?php

namespace Application;

use Spiffy\Framework\AbstractPackage;

/*
 * Every package registered with Spiffy\Framework requires a Package class. Generally you should just
 * extend the Spiffy\Framework\AbstractPackage but if you have custom needs you can just implement
 * the Spiffy\Framework\ApplicationPackage interface instead.
 */
class Package extends AbstractPackage
{
    /**
     * {@inheritDoc}
     */
    public function isAutoloadServicesEnabled()
    {
        return true;
    }
}
