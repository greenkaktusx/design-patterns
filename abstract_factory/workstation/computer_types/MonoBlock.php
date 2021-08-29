<?php

namespace computers;

/**
 * Class MonoBlock
 * @package computers
 */
class MonoBlock implements ComputerType
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        echo 'Build mono block computer...<br/>';
    }

    /**
     * Setup hardware for computer.
     *
     * @return void
     */
    public function setupHardware(): void
    {
        echo 'Setup mono block hardware...<br/>';
    }
}