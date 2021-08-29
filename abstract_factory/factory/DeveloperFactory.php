<?php

namespace factory;

use computers\{ComputerType, Laptop};
use devices\{AdditionalDevice, Phone};
use os\{Linux, OperatingSystem};

/**
 * Class DeveloperFactory
 * @package factory
 */
class DeveloperFactory implements WorkstationFactory
{
    /**
     * Build the computer for developer.
     *
     * @return ComputerType
     */
    public function buildComputer(): ComputerType
    {
        return new Laptop();
    }

    /**
     * Install OS for developer.
     *
     * @return OperatingSystem
     */
    public function installOS(): OperatingSystem
    {
        return new Linux();
    }

    /**
     * Add additional devices for developer.
     *
     * @return AdditionalDevice
     */
    public function addAdditionalDevices(): AdditionalDevice
    {
        return new Phone();
    }
}