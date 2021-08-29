<?php

namespace computers;

/**
 * Class Laptop
 * @package computers
 */
class Laptop implements ComputerType
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Build laptop computer...<br/>';
    }

    /**
     * Setup hardware for laptop.
     *
     * @return void
     */
    public function setupHardware(): void
    {
        echo 'Setup laptop hardware...<br/>';
    }
}