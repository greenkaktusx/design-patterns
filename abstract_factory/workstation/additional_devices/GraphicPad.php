<?php

namespace devices;

/**
 * Class GraphicPad
 * @package devices
 */
class GraphicPad implements AdditionalDevice
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Add graphic pad...<br/>';
    }

    /**
     * Install graphic pad software.
     *
     * @return void
     */
    public function installSoftware(): void
    {
        echo 'Install graphic pad software...<br/>';
    }
}