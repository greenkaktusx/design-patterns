<?php

use factory\DesignerFactory;
use factory\DeveloperFactory;
use factory\DevOpsFactory;

/**
 * Class Application
 * @package app
 */
class WorkstationApplication
{
    public function __construct()
    {

    }

    /**
     * Add new employee and build his new workstation.
     *
     * @param string $employeePosition Employee position.
     *
     * @throws Exception Unknown employee position.
     */
    public function addEmployee(string $employeePosition)
    {
        // Here code to create new user, generate passwords and other default actions.
        echo 'Create new user...<br/><br/>';

        // Check employee position.
        switch ($employeePosition) {
            case 'Developer':
                $factory = new DeveloperFactory();
                break;
            case 'Designer':
                $factory = new DesignerFactory();
                break;
            case 'DevOPS':
                $factory = new DevOpsFactory();
                break;
            default:
                throw new Exception("Unknown employee position");
        }

        // And now create his workstation.
        echo 'Create ' . $employeePosition . ' workstation:<br/>';

        $workstation = new Workstation($factory);
        $workstation->createWorkstation();
        $workstation->settingWorkstation();
    }
}