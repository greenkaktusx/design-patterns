<?php

namespace factory;

use computers\{ComputerType, MonoBlock};
use devices\{AdditionalDevice, GraphicPad};
use os\{MacOS, OperatingSystem};

/**
 * Class DesignerFactory
 * @package factory
 */
class DesignerFactory implements WorkstationFactory
{
    /**
     * Build the computer for designer.
     *
     * @return ComputerType
     */
    public function buildComputer(): ComputerType
    {
        return new MonoBlock();
    }

    /**
     * Install OS for designer.
     *
     * @return OperatingSystem
     */
    public function installOS(): OperatingSystem
    {
        return new MacOS();
    }

    /**
     * Add additional devices for designer.
     *
     * @return AdditionalDevice
     */
    public function addAdditionalDevices(): AdditionalDevice
    {
        return new GraphicPad();
    }
}