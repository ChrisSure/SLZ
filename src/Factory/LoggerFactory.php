<?php
/**
 * Created by PhpStorm.
 * User: ktv911
 * Date: 12.07.18
 * Time: 22:08
 */

namespace Framework\Factory;

use Psr\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class LoggerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $logger = new Logger('App');
        $logger->pushHandler(new StreamHandler(
            'runtime/log/application.log',
            $container->get('config')['debug'] ? Logger::DEBUG : Logger::WARNING
        ));
        return $logger;
    }
}