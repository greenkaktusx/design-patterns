<?php

namespace os;

/**
 * Class macOS
 * @package elements
 */
class MacOS implements OperatingSystem
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Install macOS...<br/>';
    }

    /**
     * Install software for macOS and special setting system.
     *
     * @return void
     */
    public function setupEnvironment(): void
    {
        echo 'Setup macOS environment...<br/>';
    }
}