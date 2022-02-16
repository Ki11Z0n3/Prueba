<?php

namespace ContainerXN1waVr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Command_ServerLogService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Command/ServerLogCommand.php';

        $container->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');
        $instance->setDescription('Start a log server that displays logs in real time');

        return $instance;
    }
}
