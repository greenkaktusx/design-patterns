<?php

namespace factory;

use computers\ComputerType;
use devices\AdditionalDevice;
use os\OperatingSystem;

interface WorkstationFactory
{
    public function buildComputer(): ComputerType;
    public function installOS(): OperatingSystem;
    public function addAdditionalDevices(): AdditionalDevice;
}