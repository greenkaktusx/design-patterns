<?php

namespace os;

interface OperatingSystem
{
    /**
     * Setup work environment.
     *
     * @return mixed
     */
    public function setupEnvironment(): void;
}