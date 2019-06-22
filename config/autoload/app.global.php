<?php


return [
    'dependencies' => [
        'factories' => [
            'DB_CONNECT' => Framework\Factory\DBFactory::class,
            Twig\Environment::class => Framework\Factory\TwigFactory::class,
            Psr\Log\LoggerInterface::class => Framework\Factory\LoggerFactory::class,
        ],
    ],
];