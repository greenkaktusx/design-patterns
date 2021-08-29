<?php

namespace computers;

/**
 * Class Individual
 * @package computers
 */
class Individual implements ComputerType
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Build individual assembly computer...<br/>';
    }

    /**
     * Setup hardware for individual computer assembly.
     *
     * @return void
     */
    public function setupHardware(): void
    {
        echo 'Setup individual assembly hardware...<br/>';
    }
}