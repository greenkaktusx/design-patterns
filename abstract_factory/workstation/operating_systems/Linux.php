<?php

namespace os;

/**
 * Class Linux
 * @package elements
 */
class Linux implements OperatingSystem
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Install Linux...<br/>';
    }

    /**
     * Install software for Linux and special setting system.
     *
     * @return void
     */
    public function setupEnvironment(): void
    {
        echo 'Setup Linux environment...<br/>';
    }
}