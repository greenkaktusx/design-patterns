<?php

use factory\WorkstationFactory;
use computers\ComputerType;
use os\OperatingSystem;
use devices\AdditionalDevice;

/**
 * Class Workstation
 * @package app
 */
class Workstation
{
    /** @var $workstation WorkstationFactory */
    private $workstation;
    /** @var $computer ComputerType */
    private $computer;
    /** @var $operatingSystem OperatingSystem */
    private $operatingSystem;
    /** @var $device AdditionalDevice */
    private $device;

    /**
     * Class constructor.
     *
     * @param WorkstationFactory $workstation
     */
    public function __construct($workstation)
    {
        $this->workstation = $workstation;
    }

    /**
     * Create new workstation for employee.
     *
     * @return void
     */
    public function createWorkstation(): void
    {
        $this->setComputer($this->getWorkstation()->buildComputer());
        $this->setOperationSystem($this->getWorkstation()->installOS());
        $this->setDevice($this->getWorkstation()->addAdditionalDevices());
    }

    /**
     * Setting current workstation components.
     *
     * @return void
     */
    public function settingWorkstation(): void
    {
        $this->getComputer()->setupHardware();
        $this->getOperatingSystem()->setupEnvironment();
        $this->getDevice()->installSoftware();
    }

    /**
     * Get workstation.
     *
     * @return WorkstationFactory
     */
    private function getWorkstation(): WorkstationFactory
    {
        return $this->workstation;
    }

    /**
     * Set current workstation computer type.
     *
     * @param ComputerType $computerType
     */
    private function setComputer(ComputerType $computerType): void
    {
        $this->computer = $computerType;
    }

    /**
     * Set current workstation operating system.
     *
     * @param OperatingSystem $operatingSystem
     */
    private function setOperationSystem(OperatingSystem $operatingSystem): void
    {
        $this->operatingSystem = $operatingSystem;
    }

    /**
     * Set current workstation additional device.
     *
     * @param AdditionalDevice $additionalDevice
     */
    private function setDevice(AdditionalDevice $additionalDevice): void
    {
        $this->device = $additionalDevice;
    }

    /**
     * Get current workstation computer type.
     *
     * @return ComputerType
     */
    private function getComputer(): ComputerType
    {
        return $this->computer;
    }

    /**
     * Get current workstation operating system.
     *
     * @return OperatingSystem
     */
    private function getOperatingSystem(): OperatingSystem
    {
        return $this->operatingSystem;
    }

    /**
     * Get current workstation additional device.
     *
     * @return AdditionalDevice
     */
    private function getDevice(): AdditionalDevice
    {
        return $this->device;
    }
}