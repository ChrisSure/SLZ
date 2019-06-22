<?php

namespace Framework;

use Symfony\Component\HttpFoundation\Request;
use Psr\Container\ContainerInterface;


class Logger
{

    /**
     * @param Exception $e
     * @param ContainerInterface $container
     * @param Request $request
     *
     * @return void
     */
    public function addLog(\Exception $e, ContainerInterface $container, Request $request): void
    {
        $logger = $container->get(\Psr\Log\LoggerInterface::class);
        $logger->error($e->getMessage(), [
            'exception' => $e,
            'request' => $request,
        ]);
    }

}