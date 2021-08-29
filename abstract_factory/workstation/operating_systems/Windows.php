<?php

namespace os;

/**
 * Class Windows
 * @package elements
 */
class Windows implements OperatingSystem
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Install Windows...<br/>';
    }

    /**
     * Install software for Windows and special setting system.
     *
     * @return void
     */
    public function setupEnvironment(): void
    {
        echo 'Setup Windows environment...<br/>';
    }
}