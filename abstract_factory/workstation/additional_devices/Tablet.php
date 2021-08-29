<?php

namespace devices;

/**
 * Class Tablet
 * @package devices
 */
class Tablet implements AdditionalDevice
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Add tablet...<br/>';
    }

    /**
     * Install table software.
     *
     * @return void
     */
    public function installSoftware(): void
    {
        echo 'Install tablet software...<br/>';
    }
}