<?php

namespace devices;

/**
 * Class Phone
 * @package devices
 */
class Phone implements AdditionalDevice
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Add phone...<br/>';
    }

    /**
     * Install mobile software.
     *
     * @return void
     */
    public function installSoftware(): void
    {
        echo 'Install phone software...<br/>';
    }
}