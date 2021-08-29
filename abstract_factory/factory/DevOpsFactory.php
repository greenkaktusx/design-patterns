<?php

namespace factory;

use computers\{ComputerType, Individual};
use devices\{AdditionalDevice, Tablet};
use os\{OperatingSystem, Windows};

/**
 * Class DevOpsFactory
 * @package factory
 */
class DevOpsFactory implements WorkstationFactory
{
    /**
     * Build a computer for DevOPS Engineer.
     *
     * @return ComputerType
     */
    public function buildComputer(): ComputerType
    {
        return new Individual();
    }

    /**
     * Install OS for DevOPS Engineer.
     *
     * @return OperatingSystem
     */
    public function installOS(): OperatingSystem
    {
        return new Windows();
    }

    /**
     * Add additional devices for DevOPS Engineer.
     *
     * @return AdditionalDevice
     */
    public function addAdditionalDevices(): AdditionalDevice
    {
        return new Tablet();
    }
}