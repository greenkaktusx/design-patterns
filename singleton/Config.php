<?php

/**
 * Class Config
 */
class Config
{
    /** @var Config $instance */
    private static $instance;

    /** @var array $params Config params. */
    private $params;

    /**
     * Class constructor.
     */
    private function __construct()
    {
        // Init config params
        $this->params = [];
    }

    // Close magic methods
    private function __clone(){}
    private function __wakeup(){}

    /**
     * Get config object.
     *
     * @return Config
     */
    public static function getInstance(): Config
    {
        if (self::$instance == null) {
            self::$instance = new static;
        }

        return self::$instance;
    }

    /**
     * Get all config params.
     *
     * @return array
     */
    private function getParams(): array
    {
        return $this->params;
    }

    /**
     * Get parameter value by name.
     *
     * @param string $parameterName Parameter name.
     *
     * @return string
     */
    public function getParameter(string $parameterName): string
    {
        return $this->getParams()[$parameterName];
    }

    /**
     * Set parameter value by name.
     *
     * @param string $parameterName Parameter name.
     * @param string $parameterValue Parameter value.
     *
     * @return void
     */
    public function setParameter(string $parameterName, string $parameterValue): void
    {
        $this->params[$parameterName] = $parameterValue;
    }
}
