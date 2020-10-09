<?php
namespace Dreamboy\Webhook;

/**
 * Class Factory
 * @package Dreamboy\Factory
 */
class Factory
{
    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    public static function make($name, array $config)
    {
        $namespace = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $name)));
        $application = "\\Dreamboy\\Webhook\\{$namespace}\\Webhook";

        return new $application($config);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}