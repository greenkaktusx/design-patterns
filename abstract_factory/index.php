<?php

spl_autoload_register(function ($className) {
    $namepaces = [
        'computers' => 'workstation/computer_types',
        'os' => 'workstation/operating_systems',
        'devices' => 'workstation/additional_devices'
    ];

    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);

        $namespace = $namepaces[$namespace] ?: $namespace;

        $className = substr($className, $lastNsPos + 1);

        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require_once $fileName;
});

$application = new WorkstationApplication();

$application->addEmployee('Developer');
$application->addEmployee('Designer');
$application->addEmployee('DevOPS');